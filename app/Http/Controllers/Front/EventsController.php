<?php

namespace App\Http\Controllers\Front;

use App\Models\Equipments;
use App\Models\Dishes;
use App\Models\Events;
use App\Models\MenuPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
        parent::__construct();
    }
    // Events start

    public function submit_events(Request $request)
    {
        $data = $request->validate([
            'event_name' => 'required|string',
            'event_type' => 'required|string',
            'event_date' => 'required|date|after_or_equal:today',
            'occation' => 'required|string',
            'guest' => 'required|integer',
            'from' => 'required',
            'to' => 'required',
        ]);
        $data = $request->except(
            [
                '_token',
            ]
        );
        $insert_data = Events::create($data);
        if ($insert_data) {
            return redirect()
                ->route('front.venue_info', $insert_data->id)
                ->with('success', 'Events has been submit successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong please resubmit .Thank you');
        }
    }

    // Events End
    // Venue start

    public function venue_info($id)
    {
        $data = $id;
        $event_data = Events::where('id', $id)->first();
        if (!$event_data) {
            return redirect()->route('front.create_event')->with('error', 'Event not found');
        }
        return view('front.create_venue', compact('data'));
    }

    public function submit_venue(Request $request)
    {

        $data =  $request->validate([

            'venue_name' => 'required|string',
            'address' => 'required|string',
            'venue_type' => 'required|string',
            'contact_email'   => 'required|email',
            'contact_name'  => 'required|string',
            'contact_phone' => 'required|integer',
        ]);

        $event_data = Events::where('id', $request->id)->first();
        if (!$event_data) {
            return redirect()->back()->with('error', 'Event not found');
        }

        $data = $request->except(
            [
                '_token',
                'id',
            ]
        );
        Events::where('id', $request->id)->update($data);

        return redirect()
            ->route('front.menu', $request->id)
            ->with('success', 'Venue has been submit successfully.');
    }
    // Venue End
    // menu start
    public function menu($id)
    {
        $packages = MenuPackages::where('status', 1)->with('dishes1')->get();
        // dd($packages);

        // $package_dishes =  implode(',', $packages->dishes);

        $dishes = Dishes::where('status', 1)->with('menu_attribute')->get();
        $data = $id;
        return view('front.menu', compact('data', 'packages', 'dishes'));
    }
    public function submit_menu(Request $request)
    {
        dd($request->all());

        return redirect()
            ->route('front.service', '1')
            ->with('success', 'Menu has been submit successfully.');
    }
    // menu End
    // service start
    public function service($id)
    {

        $data = $id;
        return view('front.service', compact('data'));
    }
    public function submit_service(Request $request)
    {
        $data =  $request->validate([

            'appitizer_type' => 'required|string',
            'appitizer_start' => 'required|string',
            'appitizer_end' => 'required|string',
            'appitizer_station' => 'required|string',
            'maincource_type' => 'required|string',
            'maincource_start' => 'required|string',
            'maincource_end' => 'required|string',
            'maincource_station' => 'required|string',
            'desert_type' => 'required|string',
            'desert_start' => 'required|string',
            'desert_end' => 'required|string',
            'desert_station' => 'required|string',
        ]);

        $event_data = Events::where('id', $request->id)->first();
        if (!$event_data) {
            return redirect()->back()->with('error', 'Event not found');
        }

        $data = $request->except(
            [
                '_token',
                'id',
            ]
        );
        Events::where('id', $request->id)->update($data);


        return redirect()
            ->route('front.equipments', $request->id)
            ->with('success', 'Service has been submit successfully.');
    }
    // service End
    // equipments start
    public function equipments($id)
    {

        $packages = Equipments::where('status', 1)->with('dishes1')->get();

        $data = $id;
        return view('front.equipments', compact('data'));
    }
    public function submit_equipments()
    {
        return redirect()
            ->route('front.labour_staff', '1')
            ->with('success', 'Equipments has been submit successfully.');
    }
    // equipments End
    // labour_staff start
    public function labour_staff($id)
    {
        $data = $id;
        return view('front.labour_staff', compact('data'));
    }
    public function submit_labour_staff()
    {
        return redirect()
            ->route('front.labour_staff', '1')
            ->with('success', 'Labour And Staff has been submit successfully.');
    }

    // labour_staff End
}