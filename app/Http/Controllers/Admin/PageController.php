<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('title')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        $pages = Page::all();
        return view('admin.pages.create', compact('pages'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages',
            'parent_id' => 'nullable|exists:pages,id',
            'content' => 'required|string',
        ]);

        Page::create($data);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Страница успешно создана');
    }

    public function edit(Page $page)
    {
        $pages = Page::where('id', '<>', $page->id)->get();
        return view('admin.pages.edit', compact('page', 'pages'));
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'parent_id' => 'nullable|exists:pages,id',
            'content' => 'required|string',
        ]);

        $page->update($data);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Страница обновлена');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')
            ->with('success', 'Страница удалена');
    }
}
