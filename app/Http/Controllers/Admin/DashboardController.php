<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Events;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Events::all();

        return view('admin.dashboard.index');
    }
}