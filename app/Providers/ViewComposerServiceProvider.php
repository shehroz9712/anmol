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
        // $site_settings = SiteSetting::first();
        // $contactQueriesCount = ContactQuery::count();
        // View::share(['setting' => $site_settings, 'contactQueriesCount' => $contactQueriesCount]);
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
         * Pages
         */
        view()->composer('admin.pages.index', function ($view) {
            $view->with(['pageTitle' => 'Page List']);
        });
        view()->composer('admin.pages.create', function ($view) {
            $view->with(['pageTitle' => 'Add Page']);
        });
        view()->composer('admin.pages.show', function ($view) {
            $view->with(['pageTitle' => 'Show Page']);
        });
        view()->composer('admin.pages.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Page']);
        });

        /*
         * blogs
         */
        view()->composer('admin.blogs.index', function ($view) {
            $view->with(['pageTitle' => 'Blogs List']);
        });
        view()->composer('admin.blogs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Blog']);
        });
        view()->composer('admin.blogs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Blog']);
        });
        view()->composer('admin.blogs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Blog']);
        });
        // /*
        //  * careers
        //  */
        // view()->composer('admin.careers.index', function ($view) {
        //     $view->with(['pageTitle' => 'Careers List']);
        // });
        // view()->composer('admin.careers.create', function ($view) {
        //     $view->with(['pageTitle' => 'Add Career']);
        // });
        // view()->composer('admin.careers.show', function ($view) {
        //     $view->with(['pageTitle' => 'Show Career']);
        // });
        // view()->composer('admin.careers.edit', function ($view) {
        //     $view->with(['pageTitle' => 'Edit Career']);
        // });
        /*
         * Users
         */
        view()->composer('admin.users.index', function ($view) {
            $view->with(['pageTitle' => 'Users List']);
        });
        view()->composer('admin.users.create', function ($view) {
            $view->with(['pageTitle' => 'Add User']);
        });
        view()->composer('admin.users.show', function ($view) {
            $view->with(['pageTitle' => 'Show User']);
        });
        view()->composer('admin.users.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit User']);
        });

        /*
         * Services
         */
        view()->composer('admin.services.index', function ($view) {
            $view->with(['pageTitle' => 'Services List']);
        });
        view()->composer('admin.services.create', function ($view) {
            $view->with(['pageTitle' => 'Add Service']);
        });
        view()->composer('admin.services.show', function ($view) {
            $view->with(['pageTitle' => 'Show Service']);
        });
        view()->composer('admin.services.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Service']);
        });

        /*
         * Projects
         */
        view()->composer('admin.projects.index', function ($view) {
            $view->with(['pageTitle' => 'Projects List']);
        });
        view()->composer('admin.projects.create', function ($view) {
            $view->with(['pageTitle' => 'Add Project']);
        });
        view()->composer('admin.projects.show', function ($view) {
            $view->with(['pageTitle' => 'Show Project']);
        });
        view()->composer('admin.projects.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Project']);
        });

        /*
         * Certificates
         */
        view()->composer('admin.certificates.index', function ($view) {
            $view->with(['pageTitle' => 'Certificates List']);
        });
        view()->composer('admin.certificates.create', function ($view) {
            $view->with(['pageTitle' => 'Add Certificate']);
        });
        view()->composer('admin.certificates.show', function ($view) {
            $view->with(['pageTitle' => 'Show Certificate']);
        });
        view()->composer('admin.certificates.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Certificate']);
        });

        /*
         * Careers
         */
        view()->composer('admin.careers.index', function ($view) {
            $view->with(['pageTitle' => 'Careers List']);
        });
        view()->composer('admin.careers.create', function ($view) {
            $view->with(['pageTitle' => 'Add Career']);
        });
        view()->composer('admin.careers.show', function ($view) {
            $view->with(['pageTitle' => 'Show Career']);
        });
        view()->composer('admin.careers.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Career']);
        });

        /*
         * Career Queries
         */
        view()->composer('admin.career_queries.index', function ($view) {
            $view->with(['pageTitle' => 'Career Queries']);
        });

        view()->composer('admin.career_queries.show', function ($view) {
            $view->with(['pageTitle' => 'Career Show']);
        });

        /*
         * Features
         */
        view()->composer('admin.features.index', function ($view) {
            $view->with(['pageTitle' => 'Features List']);
        });
        view()->composer('admin.features.create', function ($view) {
            $view->with(['pageTitle' => 'Add Feature']);
        });
        view()->composer('admin.features.show', function ($view) {
            $view->with(['pageTitle' => 'Show Feature']);
        });
        view()->composer('admin.features.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Feature']);
        });


        view()->composer('admin.sections.index', function ($view) {
            $view->with(['pageTitle' => 'Sections List']);
        });
        view()->composer('admin.sections.create', function ($view) {
            $view->with(['pageTitle' => 'Add Sections']);
        });
        view()->composer('admin.sections.show', function ($view) {
            $view->with(['pageTitle' => 'Show Sections']);
        });
        view()->composer('admin.sections.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Sections']);
        });
        /* /*
         * Sliders
         */
        view()->composer('admin.sliders.index', function ($view) {
            $view->with(['pageTitle' => 'Sliders List']);
        });
        view()->composer('admin.sliders.create', function ($view) {
            $view->with(['pageTitle' => 'Add Slider']);
        });
        view()->composer('admin.sliders.show', function ($view) {
            $view->with(['pageTitle' => 'Show Slider']);
        });
        view()->composer('admin.sliders.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Slider']);
        });
        /* /*    * Testimonials
         */
        view()->composer('admin.testimonials.index', function ($view) {
            $view->with(['pageTitle' => 'Testimonials List']);
        });
        view()->composer('admin.testimonials.create', function ($view) {
            $view->with(['pageTitle' => 'Add Testimonial']);
        });
        view()->composer('admin.testimonials.show', function ($view) {
            $view->with(['pageTitle' => 'Show Testimonial']);
        });
        view()->composer('admin.testimonials.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Testimonial']);
        });

        /*
         * Recommendations
         */
        view()->composer('admin.recommendations.index', function ($view) {
            $view->with(['pageTitle' => 'Recommendations List']);
        });
        view()->composer('admin.recommendations.create', function ($view) {
            $view->with(['pageTitle' => 'Add Recommendation']);
        });
        view()->composer('admin.recommendations.show', function ($view) {
            $view->with(['pageTitle' => 'Show Recommendation']);
        });
        view()->composer('admin.recommendations.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Recommendation']);
        });

        /*
         * FAQs
         */
        view()->composer('admin.faqs.index', function ($view) {
            $view->with(['pageTitle' => 'Faqs List']);
        });
        view()->composer('admin.faqs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Faq']);
        });
        view()->composer('admin.faqs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Faq']);
        });
        view()->composer('admin.faqs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Faq']);
        });

        /*
         * FAQs
         */
        view()->composer('admin.news_slides.index', function ($view) {
            $view->with(['pageTitle' => 'News Slides List']);
        });
        view()->composer('admin.news_slides.create', function ($view) {
            $view->with(['pageTitle' => 'Add news Slides']);
        });
        view()->composer('admin.news_slides.show', function ($view) {
            $view->with(['pageTitle' => 'Show News Slides']);
        });
        view()->composer('admin.news_slides.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit News Slides']);
        });

        /*
         * FAQs
         */
        view()->composer('admin.apply_jobs.index', function ($view) {
            $view->with(['pageTitle' => 'Apply Jobs List']);
        });
        view()->composer('admin.apply_jobs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Apply Jobs']);
        });
        view()->composer('admin.apply_jobs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Apply Jobs']);
        });
        view()->composer('admin.apply_jobs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Apply Jobs']);
        });


        /*
         * locations
         */

        view()->composer('admin.locations.index', function ($view) {
            $view->with(['pageTitle' => 'locations List']);
        });
        view()->composer('admin.locations.create', function ($view) {
            $view->with(['pageTitle' => 'Add locations']);
        });
        view()->composer('admin.locations.show', function ($view) {
            $view->with(['pageTitle' => 'Show locations']);
        });
        view()->composer('admin.locations.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit locations']);
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