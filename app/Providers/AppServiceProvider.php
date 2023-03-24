<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        view()->composer(
            '*',
            function ($view) {
                $view->with([
                    'category' => Category::all(),
                    'berita' => Post::where('status', 'publish')->orderBy('created_at', 'DESC')->get()
                    // 'menus' => Menu::all(),
                    // 'pages' => Page::all(),
                    // 'announs' => Announs::where('status', 'Publish')->limit(3)->get(),
                    // 'laporans' => Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->limit(4)->get(),
                    // 'publicoffering' => Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->where('category', 'Public Offering Prospectus')->limit(12)->get(),
                    // 'pagepublish' => $pagepublish,
                    // 'docs' => Doc::all(),

                    // 'data' => $data,
                    // 'cal' => $cal,
                    // 'tanda' => $tanda,
                    // 'up' => $up,
                    // 'modal' => $modal,
                    // 'postpublish' => $postpublish
                ]);
            }
        );
    }
}
