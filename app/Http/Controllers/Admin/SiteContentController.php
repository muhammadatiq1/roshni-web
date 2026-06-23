<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteContent;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SiteContentController extends Controller
{
    public function index()
    {
        // Get distinct pages
        $pages = SiteContent::select('page')
            ->distinct()
            ->pluck('page');

        return view('admin.content.index', compact('pages'));
    }

    public function edit($page)
    {
        // Get all contents for the page and group by section
        $groupedContents = SiteContent::where('page', $page)
            ->get()
            ->groupBy('section');

        if ($groupedContents->isEmpty()) {
            abort(404);
        }

        return view('admin.content.edit', compact('page', 'groupedContents'));
    }

    public function update(Request $request, $page)
    {
        $contents = SiteContent::where('page', $page)->get();

        foreach ($contents as $content) {
            $key = $content->key;

            if ($request->has("delete_" . $key)) {
                // User checked the "Remove media" box
                if ($content->content) {
                    $oldPath = str_replace('/storage/', '', $content->content);
                    Storage::disk('public')->delete($oldPath);
                }
                $content->update(['content' => null]);
            } elseif ($content->type === 'image' || $content->type === 'video') {
                if ($request->hasFile($key)) {
                    if ($content->type === 'image') {
                        // Upload new image and convert to WebP
                        $file = $request->file($key);
                        $manager = new ImageManager(new Driver());
                        $image = $manager->decode($file->getRealPath());
                        
                        $filename = uniqid() . '_' . time() . '.webp';
                        $path = 'content_images/' . $filename;
                        
                        // Save as WebP with 80% quality
                        Storage::disk('public')->put($path, (string) $image->encode(new \Intervention\Image\Encoders\WebpEncoder(80)));
                    } else {
                        // Upload new video securely
                        $path = $request->file($key)->store('content_videos', 'public');
                    }
                    
                    if ($content->content) {
                        $oldPath = str_replace('/storage/', '', $content->content);
                        Storage::disk('public')->delete($oldPath);
                    }
                    
                    $content->update(['content' => '/storage/' . $path]);

                    // Mutual Exclusivity Logic (Remove counterpart if exists)
                    $counterpartKey = null;
                    if (str_ends_with($key, '_image')) {
                        $counterpartKey = str_replace('_image', '_video', $key);
                    } elseif (str_ends_with($key, '_video')) {
                        $counterpartKey = str_replace('_video', '_image', $key);
                    }

                    if ($counterpartKey) {
                        $counterpartContent = SiteContent::where('page', $page)->where('key', $counterpartKey)->first();
                        if ($counterpartContent && $counterpartContent->content) {
                            $oldPath = str_replace('/storage/', '', $counterpartContent->content);
                            Storage::disk('public')->delete($oldPath);
                            $counterpartContent->update(['content' => null]);
                        }
                    }
                }
            } else {
                if ($request->has($key)) {
                    $content->update(['content' => $request->input($key)]);
                }
            }

            // Clear cache for this key
            Cache::forget('site_content_' . $key);
            if (isset($counterpartKey) && $counterpartKey) {
                Cache::forget('site_content_' . $counterpartKey);
            }
        }

        return redirect()->route('admin.content.index')->with('success', 'Page content updated successfully!');
    }
}
