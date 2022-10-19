<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewsletterSubscriber;

class NewsletterSubscriberController extends Controller
{

    /**
     * NewsletterSubscriberController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $records = NewsletterSubscriber::all();
            return view('admin.newsletter_subscriber.index', compact('records'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
