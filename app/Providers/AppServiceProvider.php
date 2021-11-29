<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Component;
use App\Models\MetaTag;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('components', function () {
            return Component::get()->groupBy('slug')->toArray();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer(
            '*',
            function ($view) {
                if (Schema::hasTable('services')) {
                    $services = Service::orderBy('sort', 'asc')->get();
                    $view->with('services', $services);
                }
                if (Schema::hasTable('meta_tags')) {
                    $metatags = MetaTag::get();
                    $view->with('metatags', $metatags);
                }
                if (Schema::hasTable('meta_tags')) {
                    $metatags = MetaTag::where('meta_name', '!=', 'title')
                        ->get()
                        ->groupBy('page')
                        ->toArray();
                    $titles = MetaTag::where('meta_name', 'title')
                        ->get(['meta_content', 'page'])
                        ->groupBy('page')
                        ->toArray();
                    $view->with('metatags', $metatags)
                        ->with('titles', $titles);
                }
            }
        );
    }
}
