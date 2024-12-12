<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Servicesmenu;
use App\Models\Services;
use Illuminate\Http\Request; // Ensure Request class is imported
use Illuminate\Support\Facades\App; // Ensure App facade is imported

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request): void
    {
        // Use the injected $request object to get the 'locale' cookie
        $locale = $request->cookie('locale', config('app.locale')); // Default to app locale if no cookie
        
        // Set the application locale
        App::setLocale($locale);
    }

}
