<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\ContactQuery;
use App\Models\NewsletterSubscriber;
use App\Models\Page;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        parent::__construct();
    }

    /**
     * Admin Dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $adminsCount = Admin::count();
        $contactQueriesCount = ContactQuery::count();
        $newsletterSubscribesCount = NewsletterSubscriber::count();
        $pagesCount = Page::count();

        return view('admin.dashboard.index', compact(
            'adminsCount',
            'contactQueriesCount',
            'newsletterSubscribesCount',
            'pagesCount'
        ));
    }
}
