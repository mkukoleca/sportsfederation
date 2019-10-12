<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        

        parent::boot();
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
       // Route::model('Club', \App\Club::class);
       Route::model('Staff', \App\Staff::class);
=======
       
>>>>>>> origin/tim_nijepekmez
=======

        Route::model('cccc',\App\PlayerInfo::class);
>>>>>>> origin/tim_kornjaca
=======
        //Route::model('Club', \App\Club::class);
=======
       // Route::model('Club', \App\Club::class);
       Route::model('Staff', \App\Staff::class);
>>>>>>> 93f395187c1a04707a356c0d67b0e0e1d4416942
>>>>>>> 24ca8d7a670113ef41e1e99aa58d9c5c9155a393
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
