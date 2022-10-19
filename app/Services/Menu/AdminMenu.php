<?php

namespace App\Services\Menu;

use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

/**
 * Class AdminMenu
 *
 * @author Muzafar Ali Jatoi <muzfr7@gmail.com>
 * @date   23/9/18
 */
class AdminMenu
{
    public function register()
    {
        Menu::macro('admin', function () {

            $menu = Menu::new()
                ->addClass('page-sidebar-menu')
                ->setAttribute('data-keep-expanded', 'false')
                ->setAttribute('data-auto-scroll', 'true')
                ->setAttribute('data-slide-speed', '200')
                ->html('<div class="sidebar-toggler hidden-phone"></div>');

            return $menu->add(Link::toRoute(
                'admin.dashboard.index',
                '<i class="fa fa-home"></i> <span class="title">Dashboard</span>'
            )
                ->addParentClass('start'))
                // ->add(Link::toRoute(
                //     'admin.contact-queries.index',
                //     '<i class="fa fa-envelope"></i> <span class="title">Contact Queries</span>'
                // ))
                ->add(Link::toRoute(
                    'admin.newsletter-subscribers.index',
                    '<i class="fa fa-envelope-o"></i> <span class="title">Newsletter Subscribers</span>'
                ))
                ->add(Link::toRoute(
                    'admin.contact-queries.index',
                    '<i class="fa fa-envelope-o"></i> <span class="title">Contact Query</span>'
                ))
                ->add(Link::toRoute(
                    'admin.apply_jobs.index',
                    '<i class="fa fa-th"></i> <span class="title">Apply Jobs</span>'
                ))
                ->add(Link::toRoute(
                    'admin.pages.index',
                    '<i class="fa fa-th"></i> <span class="title">Pages</span>'
                ))
                ->add(Link::toRoute(
                    'admin.careers.index',
                    '<i class="fa fa-th"></i> <span class="title">Career/Jobs</span>'
                ))
                ->add(Link::toRoute(
                    'admin.blogs.index',
                    '<i class="fa fa-th"></i> <span class="title">Blogs</span>'
                ))

                ->add(Link::toRoute(
                    'admin.news_slides.index',
                    '<i class="fa fa-th"></i> <span class="title">New Slider</span>'
                ))
                ->add(Link::toRoute(
                    'admin.sections.index',
                    '<i class="fa fa-th"></i> <span class="title">Sections</span>'
                ))
                ->add(Link::toRoute(
                    'admin.testimonials.index',
                    '<i class="fa fa-th"></i> <span class="title">Testimonials</span>'
                ))
                ->add(Link::toRoute(
                    'admin.features.index',
                    '<i class="fa fa-th"></i> <span class="title">Features</span>'
                ))->add(Link::toRoute(
                    'admin.sliders.index',
                    '<i class="fa fa-th"></i> <span class="title">Sliders</span>'
                ))
                ->add(Link::toRoute(
                    'admin.locations.index',
                    '<i class="fa fa-th"></i> <span class="title">Locations</span>'
                ))
                ->add(Link::toRoute(
                    'admin.faqs.index',
                    '<i class="fa fa-th"></i> <span class="title">Faqs</span>'
                ))
                ->add(Link::toRoute(
                    'admin.administrators.index',
                    '<i class="fa fa-user"></i> <span class="title">Admin Users</span>'
                ))
                ->add(Link::toRoute(
                    'admin.site-settings.index',
                    '<i class="fa fa-cog"></i> <span class="title">Site Settings</span>'
                ))
                ->add(Link::toRoute(
                    'admin.users.change-password',
                    '<i class="fa fa-lock"></i> <span class="title">Change Password</span>'
                ))
                ->add(Link::toRoute(
                    'admin.auth.logout',
                    '<i class="fa fa-sign-out"></i> <span class="title">Logout</span>'
                )->setAttribute('id', 'leftnav-logout-link'))
                ->setActiveFromRequest();
        });
    }
}
