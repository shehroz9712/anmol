<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Events;
use Illuminate\Http\Request;

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
        $data = Events::all();

        return view('admin.dashboard.index', compact('data'));
    }
}