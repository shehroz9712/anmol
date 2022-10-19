<?php

namespace App\Http\Controllers\Front;

use App\Models\Apply_jobs;
use App\Models\Blogs;
use App\Models\Careers;
use App\Models\ContactQuery;
use App\Models\Faq;
use App\Models\Features;
use App\Models\News_slides;
use App\Models\NewsletterSubscriber;
use App\Models\Page;
use App\Models\Request_queries;
use App\Models\Sections;
use App\Models\SiteSetting;
use App\Models\Sliders;
use App\Jobs\SendContactEmailJob;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
        parent::__construct();
    }
    /**
     * Index Action
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function image_upload($file)
    {
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'media-file-' . time() . '.' . $extension;
        $file->move(uploadsDir('/resume'), $filename);
        return $filename;
    }
    public function index()
    {
        return view('front.index');
    }


    public function contactquery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|max:128',
            'phone_number' => 'required',
            'yourtitle' => 'required',
            'companyname' => 'required',
            'size_of_company' => 'required',
            'industry' => 'required',
            'management' => 'required',
            'practice' => 'required',
            'business_address' => 'required',
            'management_system' => 'required',
            'support' => 'required',
        ]);
        if ($validator->fails() == true) {
            session()->flash('error', $validator->errors()->first());
            return redirect()->back()->withInput();
        }

        $industry = implode(",", $request->industry);
        $queries = Request_queries::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'yourtitle' => $request->yourtitle,
                'companyname' => $request->companyname,
                'size_of_company' => $request->size_of_company,
                'industry' => $industry,
                'management' => $request->management,
                'practice' => $request->practice,
                'business_address' => $request->business_address,
                'management_system' => $request->management_system,
                'support' => $request->support
            ]
        );
        dispatch(new \App\Jobs\SendContactEmailJob($queries));
        request()->session()->flash('message', 'Your feedback submitted successfully');

        return redirect()
            ->route('front.page', 'thank-you')
            ->with('success', 'Query has been submit successfully.');
    }
    public function page(Request $request, $slug = '')
    {
        $cmsPage = Page::where('slug', $slug)->first();
        if ($cmsPage) {

            return view('front.page', compact(
                'cmsPage'
            ));
        }
        return view('front.errors.404');
    }
}