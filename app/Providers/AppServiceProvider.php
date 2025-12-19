<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use App\Models\Service;
use App\Models\ConditionsCategory;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     View::composer('*', function ($view) {
    //         $notifications = Contact::latest()->take(5)->get(); // last 5
    //         $view->with('notifications', $notifications);
    //     });
    // }

    //  public function boot(): void
    // {
    //     View::composer('*', function ($view) {
    //         // Notifications (aapka existing code)
    //         $notifications = Contact::latest()->take(5)->get();

    //         // Services dropdown data (safe try/catch in case table not migrated yet)
    //         try {
    //             $servicesMenu = Service::active()->ordered()->get(['title','slug']);
    //         } catch (\Throwable $e) {
    //             $servicesMenu = collect();
    //         }

    //         // Dono variables sab views me available
    //         $view->with(compact('notifications','servicesMenu'));
    //     });
    // }

    public function boot()
{
    View::composer('Layout.layout', function ($view) {

        $treatCategories = ConditionsCategory::where('is_active', 1)
            ->with(['subcategories' => function ($q) {
                $q->where('is_active', 1)
                  ->orderBy('sort_order', 'asc')
                  ->orderBy('created_at', 'asc');
            }])
            ->orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();

        $view->with('treatCategories', $treatCategories);
    });
}
}
