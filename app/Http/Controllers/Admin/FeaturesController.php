<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreFeaturesRequest;
use App\Http\Requests\Admin\UpdateFeaturesRequest;
use App\Models\Features;

class FeaturesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        parent::__construct();
    }
    public function image_upload($file)
    {
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'media-file-' . time() . '.' . $extension;
        $file->move(uploadsDir('/features'), $filename);
        return $filename;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $records = Features::all();
            return view('admin.features.index', compact('records'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeaturesRequest $request)
    {
        try {

            $data = $request->except(
                [
                    '_token',
                    '_method'
                ]
            );
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $getImage = $this->image_upload($file);
                $data['image'] = $getImage;
            } else {
                $data['image'] = 'no-image.jpg';
            }
            Features::create($data);

            return redirect()
                ->route('admin.features.index')
                ->with('success', 'Feature has been added successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Features::find($id);

            return view('admin.features.show', compact('data'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $data = Features::find($id);
            return view('admin.features.edit', compact('data'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeaturesRequest $request, $id)
    {
        try {
            $data = $request->except(
                [
                    '_method',
                    '_token'
                ]
            );
            $data2 = Features::find($id);
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $getImage = $this->image_upload($file);
                $data['image'] = $getImage;
            } else {
                $data['image'] =   $data2->image;
            }
            Features::where('id', $id)->update($data);

            return redirect()
                ->route('admin.features.index')
                ->with('success', 'Feature has been updated successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Features::destroy($id);
            return redirect()
                ->route('admin.features.index')
                ->with('success', 'Feature has been deleted successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
