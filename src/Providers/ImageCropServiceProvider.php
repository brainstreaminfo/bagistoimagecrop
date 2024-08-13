<?php

namespace Webkul\ImageCrop\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ImageCropServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'imagecrop');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'imagecrop');

        // Override the specific view
        View::composer('admin::components.media.images', function ($view) {
            $view->setPath(base_path('packages/Webkul/ImageCrop/src/Resources/views/components/media/images.blade.php'));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}