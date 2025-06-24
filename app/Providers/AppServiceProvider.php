<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Page::creating(function ($page) {
            if ($page->parent_id) {
                $parent = Page::find($page->parent_id);
                $page->full_slug = $parent->full_slug . '/' . $page->slug;
            } else {
                $page->full_slug = $page->slug;
            }
        });

        Page::updating(function ($page) {
            if ($page->isDirty('parent_id')) {
                if ($page->parent_id) {
                    $parent = Page::find($page->parent_id);
                    $page->full_slug = $parent->full_slug . '/' . $page->slug;
                } else {
                    $page->full_slug = $page->slug;
                }
            }
        });
    }
}
