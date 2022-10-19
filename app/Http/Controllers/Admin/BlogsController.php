<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use App\Models\Blogs;

class BlogsController extends Controller
{

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


    public function image_upload($file)
    {
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'media-file-' . time() . '.' . $extension;
        $file->move(uploadsDir('/blogs'), $filename);
        return $filename;
    }
    public function index()
    {
        try {
            $records = Blogs::all();
            return view('admin.blogs.index', compact('records'));
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
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        try {

            $data = $request->except(
                [
                    '_token',
                    '_method'
                ]
            );
            if ($request->hasfile('media')) {
                $file = $request->file('media');
                $getImage = $this->image_upload($file);
                $data['media'] = $getImage;
            } else {
                $data['media'] = 'no-image.jpg';
            }
            Blogs::create($data);

            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blogs has been added successfully.');
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
            $data = Blogs::find($id);
            return view('admin.blogs.show', compact('data'));
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
            $data = Blogs::find($id);
            return view('admin.blogs.edit', compact('data'));
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
    public function update(UpdateBlogRequest $request, $id)
    {
        try {
            $data = $request->except(
                [
                    '_method',
                    '_token'
                ]
            );
            $data1 = Blogs::find($id);

            if ($request->hasfile('media')) {
                $file = $request->file('media');
                $getImage = $this->image_upload($file);
                $data['media'] = $getImage;
            } else {
                $data['media'] = $data1->media;
            }

            Blogs::where('id', $id)->update($data);

            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blogs has been updated successfully.');
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
            Blogs::destroy($id);
            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blog has been deleted successfully.');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
