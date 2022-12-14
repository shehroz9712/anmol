<?php

namespace App\Providers;

use App\Models\ContactQuery;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
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
    public function boot()
    {
        $this->composeAdminPages();
        $site_settings = SiteSetting::first();
        View::share(['setting' => $site_settings]);
    }

    /**
     * Compose the admin pages
     *
     * e-g: admin page titles etc.
     */
    private function composeAdminPages()
    {
        /*
         * Dashboard
         */
        view()->composer('admin.dashboard.index', function ($view) {
            $view->with(['pageTitle' => 'Dashboard']);
        });

        /*
         * Administrators
         */
        view()->composer('admin.administrators.index', function ($view) {
            $view->with(['pageTitle' => 'Admin Users List']);
        });
        view()->composer('admin.administrators.create', function ($view) {
            $view->with(['pageTitle' => 'Add Admin User']);
        });
        view()->composer('admin.administrators.show', function ($view) {
            $view->with(['pageTitle' => 'Show Admin User']);
        });
        view()->composer('admin.administrators.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Admin User']);
        });

        /*
         * Demo
         */
        view()->composer('admin.demo.index', function ($view) {
            $view->with(['pageTitle' => 'demo List']);
        });
        view()->composer('admin.demo.create', function ($view) {
            $view->with(['pageTitle' => 'Add demo Slides']);
        });
        view()->composer('admin.demo.show', function ($view) {
            $view->with(['pageTitle' => 'Show demo Slides']);
        });
        view()->composer('admin.demo.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit demo Slides']);
        });



        /*
         * Newsletter Subscriber
         */
        view()->composer('admin.newsletter_subscriber.index', function ($view) {
            $view->with(['pageTitle' => 'Newsletter Subscriber']);
        });

        /*
         * Contact Queries
         */
        view()->composer('admin.contact_queries.index', function ($view) {
            $view->with(['pageTitle' => 'Contact Queries']);
        });

        view()->composer('admin.contact_queries.show', function ($view) {
            $view->with(['pageTitle' => 'Contact Show']);
        });

        /*
         * Site Setting
         */
        view()->composer('admin.siteSettings', function ($view) {
            $view->with(['pageTitle' => 'Site Settings']);
        });

        /*
         * Change Password
         */
        view()->composer('admin.users.changePassword', function ($view) {
            $view->with(['pageTitle' => 'Change Password']);
        });
    }
}