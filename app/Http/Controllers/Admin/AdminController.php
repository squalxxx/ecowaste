<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Request as ModelRequest;

class AdminController extends Controller
{
    public function index()
    {
        $latestRequests = ModelRequest::latest()->take(5)->get();
        $latestPages = Page::latest()->take(5)->get();

        return view('admin.index', compact('latestRequests', 'latestPages'));
    }
}
