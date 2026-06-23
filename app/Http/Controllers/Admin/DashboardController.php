<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactMessage;
use App\Models\SiteContent;

class DashboardController extends Controller
{
    public function index()
    {
        $totalInquiries = ContactMessage::count();
        $unreadInquiries = ContactMessage::where('is_read', false)->count();
        $recentInquiries = ContactMessage::orderBy('created_at', 'desc')->take(5)->get();
        $totalPages = SiteContent::select('page')->distinct()->count();

        return view('admin.dashboard', compact('totalInquiries', 'unreadInquiries', 'recentInquiries', 'totalPages'));
    }
}
