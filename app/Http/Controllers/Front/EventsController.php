<?php

namespace App\Http\Controllers\Front;

use App\Models\Equipments;
use App\Models\Dishes;
use App\Models\Events;
use App\Models\EvnetEquipmentsStaff;
use App\Models\LabourStaff;
use App\Models\MenuPackages;
use App\Models\PackageCategory;
use App\Models\Packages;
use App\Models\SubCatogires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:web');
    //     parent::__construct();
    // }
    // Events start

    public function submit_events(Request $request)
    {
        $data = $request->validate([
            'event_name' => 'required|string',
            'event_date' => 'required|date|after_or_equal:week',
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
                ->with('success', 'Events has been created successfully.');
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
        $packagecategories = PackageCategory::where('status', 1)->with('packages')->get();


        // $package_dishes =  implode(',', $packages->dishes);

        $dishes = Dishes::where('status', 1)->with('menu_attribute')->get();
        $data = $id;
        $subcats = SubCatogires::where('status', 1)->with('dishes')->get();

        return view('front.menu', compact('data', 'packagecategories', 'dishes', 'subcats'));
    }
    public function package($packageid)
    {

        $package = Packages::where(['id' => $packageid, 'status' => 1])->with('include')->first();

        $data = $packageid;


        return view('front.package', compact('data', 'package'));
    }


    public function getdetail()
    {
        $dishes = Dishes::where('id', 1)->get();
        return Response::json($dishes);
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


            'maincource_type' => 'required|string',
            'maincource_start' => 'required|string',

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

        $equipments = Equipments::where('status', 1)->with('dishes1')->get();

        $data = $id;
        return view('front.equipments', compact('data', 'equipments'));
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
        $labourstaff = LabourStaff::where('status', 1)->get();
        $data = $id;
        return view('front.labour_staff', compact('data', 'labourstaff'));
    }
    public function submit_labour_staff(Request $request)
    {
        $number = count($request->qty);

        if ($number >= 1) {
            for ($i = 0; $i < $number; $i++) {
                EvnetEquipmentsStaff::where('id', $request->id)->create([
                    'name' => $request->labourstaff[$i],
                    'qty' => $request->qty[$i],
                    'event_id' => $request->id,
                    'type' => 'labour'
                ]);
            }

            return redirect()
                ->route('front.index')
                ->with('success', 'Labour And Staff has been submit successfully.');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Qty is Required.');
        }
    }

    // labour_staff End
}