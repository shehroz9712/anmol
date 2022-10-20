<?php

namespace App\Http\Controllers\Front;


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

    public function create_event()
    {
        return view('front.create_event');
    }
}