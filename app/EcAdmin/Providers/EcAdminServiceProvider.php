<?php

namespace app\EcAdmin\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Blade;
class EcAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::componentNamespace('App\\EcAdmin\\View\\Components', 'ea');
        Blade::anonymousComponentNamespace('components', 'ea');
    }
}
