<?php

namespace App\Http\Controllers\Site;

use App\BladeRenderer;
use App\Http\Controllers\Controller;
use App\Models\Page;

class SiteController extends Controller
{
    public function page($path)
    {
        $slugs = explode('/', $path);

        $page = Page::whereNull('parent_id')
            ->where('slug', $slugs[0])
            ->first();

        if (!$page) {
            abort(404);
        }

        foreach (array_slice($slugs, 1) as $slug) {
            $page = $page->children()->where('slug', $slug)->first();

            if (!$page) {
                abort(404);
            }
        }

        $data = [
            'title' => $page->title,
            'description' => $page->description ?? '',
            'page' => $page,
        ];

        $html = BladeRenderer::render($page->content, $data);

        return view('site.layouts.app', ['content' => $html]);
    }
}
