<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Image\ImageRepository;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Rating\RatingRepository;
use App\Repositories\Rating\RatingRepositoryInterface;
use App\Repositories\Size\SizeRepository;
use App\Repositories\Size\SizeRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(ImageRepositoryInterface::class, ImageRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(SizeRepositoryInterface::class, SizeRepository::class);
        $this->app->singleton(RatingRepositoryInterface::class, RatingRepository::class);
    }

    public function boot()
    {
        //
    }
}
