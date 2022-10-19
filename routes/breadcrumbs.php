<?php

/**
 * routes/breadcrumbs.php
 *
 */

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

// Dashboard
Breadcrumbs::for('admin.dashboard.index', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.dashboard.index'));
});

/*
|--------------------------------------------------------------------------
| User Management > Administrator
|--------------------------------------------------------------------------
*/

// Administrator
Breadcrumbs::for('admin.administrators.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Admin Users List', route('admin.administrators.index'));
});

// Administrator > New
Breadcrumbs::for('admin.administrators.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.administrators.index');
    $breadcrumbs->push('Add', route('admin.administrators.create'));
});

// Administrator > Show
Breadcrumbs::for('admin.administrators.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.administrators.index');
    $breadcrumbs->push($data->fullName(), route('admin.administrators.show', $data->id));
});

// Administrator > Edit
Breadcrumbs::for('admin.administrators.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.administrators.show', $data);
    $breadcrumbs->push('Edit', route('admin.administrators.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

// Pages > Listing
Breadcrumbs::for('admin.pages.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Page List', route('admin.pages.index'));
});

// Pages > New
Breadcrumbs::for('admin.pages.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push('Add', route('admin.pages.create'));
});

// Pages > Show
Breadcrumbs::for('admin.pages.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push($data->page_title, route('admin.pages.show', $data->id));
});

// Pages > Edit
Breadcrumbs::for('admin.pages.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.pages.index', $data);
    $breadcrumbs->push('Edit', route('admin.pages.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Blogs
|--------------------------------------------------------------------------
*/

// Blogs > Listing
Breadcrumbs::for('admin.blogs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Blog List', route('admin.blogs.index'));
});

// Blogs > New
Breadcrumbs::for('admin.blogs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.blogs.index');
    $breadcrumbs->push('Add', route('admin.blogs.create'));
});

// Blogs > Show
Breadcrumbs::for('admin.blogs.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.blogs.index');
    $breadcrumbs->push($data->title, route('admin.blogs.show', $data->id));
});

// Blogs > Edit
Breadcrumbs::for('admin.blogs.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.blogs.index', $data);
    $breadcrumbs->push('Edit', route('admin.blogs.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Site Settings
|--------------------------------------------------------------------------
*/

// Site Setting
Breadcrumbs::for('admin.site-settings.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Site Settings', route('admin.site-settings.index'));
});

/*
|--------------------------------------------------------------------------
| Change Password
|--------------------------------------------------------------------------
*/

// Change Password
Breadcrumbs::for('admin.users.change-password', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Change Password', route('admin.users.change-password'));
});


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/

// users
Breadcrumbs::for('admin.users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('users List', route('admin.users.index'));
});

// users > New
Breadcrumbs::for('admin.users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push('Add', route('admin.users.create'));
});

// users > Amazon Inc.
Breadcrumbs::for('admin.users.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push($data->name, route('admin.users.show', $data->id));
});

// users > Edit
Breadcrumbs::for('admin.users.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.show', $data);
    $breadcrumbs->push('Edit', route('admin.users.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Contact Queries
|--------------------------------------------------------------------------
*/

// contact queries
Breadcrumbs::for('admin.contact-queries.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Contact Queries List', route('admin.contact-queries.index'));
});

// contact queries > Show
Breadcrumbs::for('admin.contact-queries.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.contact-queries.index');
    $breadcrumbs->push($data->first_name . ' ' . $data->last_name, route('admin.contact-queries.show', $data->id));
});

/*
|--------------------------------------------------------------------------
| Newsletter Subscriber
|--------------------------------------------------------------------------
*/

// Newsletter Subscriber
Breadcrumbs::for('admin.newsletter-subscribers.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Newsletter Subscribers List', route('admin.newsletter-subscribers.index'));
});

/*
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
*/

// services
Breadcrumbs::for('admin.services.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Services List', route('admin.services.index'));
});

// services > New
Breadcrumbs::for('admin.services.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.services.index');
    $breadcrumbs->push('Add', route('admin.services.create'));
});

// services > Show
Breadcrumbs::for('admin.services.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.services.index');
    $breadcrumbs->push($data->name, route('admin.services.show', $data->id));
});

// services > Edit
Breadcrumbs::for('admin.services.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.services.show', $data);
    $breadcrumbs->push('Edit', route('admin.services.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Projects
|--------------------------------------------------------------------------
*/

// projects
Breadcrumbs::for('admin.projects.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Projects List', route('admin.projects.index'));
});

// projects > New
Breadcrumbs::for('admin.projects.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.projects.index');
    $breadcrumbs->push('Add', route('admin.projects.create'));
});

// projects > Show
Breadcrumbs::for('admin.projects.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.projects.index');
    $breadcrumbs->push($data->project_name, route('admin.projects.show', $data->id));
});

// projects > Edit
Breadcrumbs::for('admin.projects.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.projects.show', $data);
    $breadcrumbs->push('Edit', route('admin.projects.edit', $data->id));
});



Breadcrumbs::for('admin.sections.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Sections List', route('admin.sections.index'));
});

// projects > New
Breadcrumbs::for('admin.sections.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.sections.index');
    $breadcrumbs->push('Add', route('admin.sections.create'));
});

// projects > Show
Breadcrumbs::for('admin.sections.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.sections.index');
    $breadcrumbs->push($data->title, route('admin.sections.show', $data->id));
});

// projects > Edit
Breadcrumbs::for('admin.sections.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.sections.show', $data);
    $breadcrumbs->push('Edit', route('admin.sections.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Certificates
|--------------------------------------------------------------------------
*/

// certificates
Breadcrumbs::for('admin.certificates.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Certificates List', route('admin.certificates.index'));
});

// certificates > New
Breadcrumbs::for('admin.certificates.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.certificates.index');
    $breadcrumbs->push('Add', route('admin.certificates.create'));
});

// certificates > Show
Breadcrumbs::for('admin.certificates.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.certificates.index');
    $breadcrumbs->push('Show', route('admin.certificates.show', $data->id));
});

// certificates > Edit
Breadcrumbs::for('admin.certificates.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.certificates.show', $data);
    $breadcrumbs->push('Edit', route('admin.certificates.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| News_slides
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Careers
|--------------------------------------------------------------------------
*/

// careers
Breadcrumbs::for('admin.careers.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Certificates List', route('admin.careers.index'));
});

// careers > New
Breadcrumbs::for('admin.careers.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.careers.index');
    $breadcrumbs->push('Add', route('admin.careers.create'));
});

// careers > Show
Breadcrumbs::for('admin.careers.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.careers.index');
    $breadcrumbs->push($data->title, route('admin.careers.show', $data->id));
});

// careers > Edit
Breadcrumbs::for('admin.careers.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.careers.show', $data);
    $breadcrumbs->push('Edit', route('admin.careers.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Career Queries
|--------------------------------------------------------------------------
*/

// career queries
Breadcrumbs::for('admin.career-queries.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Career Queries', route('admin.career-queries.index'));
});

// career queries > Show
Breadcrumbs::for('admin.career-queries.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.career-queries.index');
    $breadcrumbs->push($data->first_name . ' ' . $data->last_name, route('admin.career-queries.show', $data->id));
});

/*
|--------------------------------------------------------------------------
| Testimonials
|--------------------------------------------------------------------------
*/

// testimonials
Breadcrumbs::for('admin.testimonials.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Testimonials List', route('admin.testimonials.index'));
});

// testimonials > New
Breadcrumbs::for('admin.testimonials.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.testimonials.index');
    $breadcrumbs->push('Add', route('admin.testimonials.create'));
});

// testimonials > Show
Breadcrumbs::for('admin.testimonials.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.testimonials.index');
    $breadcrumbs->push($data->name, route('admin.testimonials.show', $data->id));
});

// testimonials > Edit
Breadcrumbs::for('admin.testimonials.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.testimonials.show', $data);
    $breadcrumbs->push('Edit', route('admin.testimonials.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Recommendations
|--------------------------------------------------------------------------
*/

// recommendations
Breadcrumbs::for('admin.recommendations.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Recommendations List', route('admin.recommendations.index'));
});

// recommendations > New
Breadcrumbs::for('admin.recommendations.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.recommendations.index');
    $breadcrumbs->push('Add', route('admin.recommendations.create'));
});

// recommendations > Show
Breadcrumbs::for('admin.recommendations.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.recommendations.index');
    $breadcrumbs->push($data->title, route('admin.recommendations.show', $data->id));
});

// recommendations > Edit
Breadcrumbs::for('admin.recommendations.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.recommendations.show', $data);
    $breadcrumbs->push('Edit', route('admin.recommendations.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| FAQs
|--------------------------------------------------------------------------
*/

// faqs
Breadcrumbs::for('admin.faqs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Faqs List', route('admin.faqs.index'));
});

// faqs > New
Breadcrumbs::for('admin.faqs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.faqs.index');
    $breadcrumbs->push('Add', route('admin.faqs.create'));
});

// faqs > Show
Breadcrumbs::for('admin.faqs.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.faqs.index');
    $breadcrumbs->push($data->question, route('admin.faqs.show', $data->id));
});

// recommendations > Edit
Breadcrumbs::for('admin.faqs.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.faqs.show', $data);
    $breadcrumbs->push('Edit', route('admin.faqs.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| _slide
|--------------------------------------------------------------------------
*/

// _slide
Breadcrumbs::for('admin.apply_jobs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('apply_jobs List', route('admin.apply_jobs.index'));
});

// _slide > New
Breadcrumbs::for('admin.apply_jobs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.apply_jobs.index');
    $breadcrumbs->push('Add', route('admin.apply_jobs.create'));
});

// _slide > Show
Breadcrumbs::for('admin.apply_jobs.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.apply_jobs.index');
    $breadcrumbs->push($data->f_name, route('admin.apply_jobs.show', $data->id));
});

// _slide > Edit
Breadcrumbs::for('admin.apply_jobs.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.apply_jobs.show', $data);
    $breadcrumbs->push('Edit', route('admin.apply_jobs.edit', $data->id));
});

// _slide
Breadcrumbs::for('admin.news_slides.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('news_slides List', route('admin.news_slides.index'));
});

// _slide > New
Breadcrumbs::for('admin.news_slides.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.news_slides.index');
    $breadcrumbs->push('Add', route('admin.news_slides.create'));
});

// _slide > Show
Breadcrumbs::for('admin.news_slides.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.news_slides.index');
    $breadcrumbs->push($data->slide, route('admin.news_slides.show', $data->id));
});

// _slide > Edit
Breadcrumbs::for('admin.news_slides.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.news_slides.show', $data);
    $breadcrumbs->push('Edit', route('admin.news_slides.edit', $data->id));
});
/*
|--------------------------------------------------------------------------
| location
|--------------------------------------------------------------------------
*/



Breadcrumbs::for('admin.locations.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('locations List', route('admin.locations.index'));
});

// location > New
Breadcrumbs::for('admin.locations.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.locations.index');
    $breadcrumbs->push('Add', route('admin.locations.create'));
});

// location > Show
Breadcrumbs::for('admin.locations.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.locations.index');
    $breadcrumbs->push($data->name, route('admin.locations.show', $data->id));
});

// location > Edit
Breadcrumbs::for('admin.locations.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.locations.show', $data);
    $breadcrumbs->push('Edit', route('admin.locations.edit', $data->id));
});


// features
Breadcrumbs::for('admin.features.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('feature List', route('admin.features.index'));
});

// features > New
Breadcrumbs::for('admin.features.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.features.index');
    $breadcrumbs->push('Add', route('admin.features.create'));
});

// features > Show
Breadcrumbs::for('admin.features.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.features.index');
    $breadcrumbs->push($data->name, route('admin.features.show', $data->id));
});

// recommendations > Edit
Breadcrumbs::for('admin.features.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.features.show', $data);
    $breadcrumbs->push('Edit', route('admin.features.edit', $data->id));
});
// sliders
Breadcrumbs::for('admin.sliders.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('slider List', route('admin.sliders.index'));
});

// sliders > New
Breadcrumbs::for('admin.sliders.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.sliders.index');
    $breadcrumbs->push('Add', route('admin.sliders.create'));
});

// sliders > Show
Breadcrumbs::for('admin.sliders.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.sliders.index');
    $breadcrumbs->push($data->name, route('admin.sliders.show', $data->id));
});

// recommendations > Edit
Breadcrumbs::for('admin.sliders.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.sliders.show', $data);
    $breadcrumbs->push('Edit', route('admin.sliders.edit', $data->id));
});
