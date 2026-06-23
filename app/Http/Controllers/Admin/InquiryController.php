<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class InquiryController extends Controller
{
    public function index()
    {
        $inquiries = ContactMessage::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show(ContactMessage $inquiry)
    {
        if (!$inquiry->is_read) {
            $inquiry->update(['is_read' => true]);
        }
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function destroy(ContactMessage $inquiry)
    {
        $inquiry->delete();
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry deleted successfully.');
    }
}
