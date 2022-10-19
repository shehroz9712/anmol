<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreSlidersRequest;
use App\Http\Requests\Admin\UpdateSlidersRequest;
use App\Models\Sliders;

class SlidersController extends Controller
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
        $file->move(uploadsDir('/sliders'), $filename);
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
            $records = Sliders::all();
            return view('admin.sliders.index', compact('records'));
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
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlidersRequest $request)
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
            }
            if ($request->hasfile('left_image')) {
                $file = $request->file('left_image');
                $getImage = $this->image_upload($file);
                $data['left_image'] = $getImage;
            }
            if ($request->hasfile('right_image')) {
                $file = $request->file('right_image');
                $getImage = $this->image_upload($file);
                $data['right_image'] = $getImage;
            }
            Sliders::create($data);

            return redirect()
                ->route('admin.sliders.index')
                ->with('success', 'Slider has been added successfully.');
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
            $data = Sliders::find($id);

            return view('admin.sliders.show', compact('data'));
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
            $data = Sliders::find($id);
            return view('admin.sliders.edit', compact('data'));
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
    public function update(UpdateSlidersRequest $request, $id)
    {
        try {
            $data = $request->except(
                [
                    '_method',
                    '_token'
                ]
            );
            $data2 = Sliders::find($id);
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $getImage = $this->image_upload($file);
                $data['image'] = $getImage;
            }
            if ($request->hasfile('left_image')) {
                $file = $request->file('left_image');
                $getImage = $this->image_upload($file);
                $data['left_image'] = $getImage;
            }
            if ($request->hasfile('right_image')) {
                $file = $request->file('right_image');
                $getImage = $this->image_upload($file);
                $data['right_image'] = $getImage;
            }
            Sliders::where('id', $id)->update($data);

            return redirect()
                ->route('admin.sliders.index')
                ->with('success', 'Slider has been updated successfully.');
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
            Sliders::destroy($id);
            return redirect()
                ->route('admin.sliders.index')
                ->with('success', 'Slider has been deleted successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
