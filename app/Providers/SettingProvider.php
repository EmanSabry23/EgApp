<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SettingProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Factory $cache, Setting $settings)
    {
        //
        if (DB::connection()->getDatabaseName()) {
            if (Schema::hasTable('settings')) {
                $settings = $cache->remember('settings', 60 * 60, function () use ($settings) {
                    return $settings->pluck('value', 'key')->all();
                });
                config()->set('setting', $settings);
            }
        }
    }
}
