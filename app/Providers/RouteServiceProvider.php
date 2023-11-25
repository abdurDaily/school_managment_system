<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

                //* QUESTIONS ROUTE'S
            Route::middleware('web')
                ->group(base_path('routes/question.php'));

                //* ATTENDANCE ROUTE'S
            Route::middleware('web')
                 ->group(base_path('routes/attendance.php'));

                //* FRONTEND BLOG ROUTE'S
            Route::middleware('web')
                 ->group(base_path('routes/frontEndBlog.php'));
                 
                //* FRONTEND BLOG ROUTE'S
            Route::middleware('web')
                 ->group(base_path('routes/teachers.php'));
                 
                //* FRONTEND ATTENSDANCE
            Route::middleware('web')
                 ->group(base_path('routes/frontEndAttendance.php'));

                 //* FRONT END BLOG FOR HOME
            Route::middleware('web')
                 ->group(base_path('routes/blog.home.php'));
                 
                 //* COURSES RECORDS
            Route::middleware('web')
                 ->group(base_path('routes/courses.php'));
                 
                 //* SEND MESSAGE
            Route::middleware('web')
                 ->group(base_path('routes/message.php'));
                 
                 //* SECONDARY FRONTEND
            Route::middleware('web')
                 ->group(base_path('routes/secondaryFrontend.php'));
                 
                 //* SECONDARY FRONTEND
            Route::middleware('web')
                 ->group(base_path('routes/backendClub.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}