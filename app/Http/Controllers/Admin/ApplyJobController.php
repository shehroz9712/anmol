<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Requests\Admin\StoreApply_jobRequest;
// use App\Http\Requests\Admin\UpdateApply_jobRequest;
use App\Models\Apply_jobs;

class ApplyJobController extends Controller
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
    public function index()
    {
        try {
            $records = Apply_jobs::all();
            return view('admin.apply_jobs.index', compact('records'));
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
    // public function create()
    // {
    //     return view('admin.apply_jobs.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param \Illuminate\Http\Request $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(StoreApply_jobRequest $request)
    // {
    //     try {

    //         $data = $request->except(
    //             [
    //                 '_token',
    //                 '_method'
    //             ]
    //         );

    //         Apply_jobs::create($data);

    //         return redirect()
    //             ->route('admin.apply_jobs.index')
    //             ->with('success', 'Apply_job has been added successfully.');
    //     } catch (\Exception $exception) {
    //         return redirect()->back()->with('error', $exception->getMessage());
    //     }
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param int $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {
        try {
            $data = Apply_jobs::find($id);
            return view('admin.apply_jobs.show', compact('data'));
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param int $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     try {
    //         $data = Apply_jobs::find($id);
    //         return view('admin.apply_jobs.edit', compact('data'));
    //     } catch (\Exception $exception) {
    //         return redirect()
    //             ->back()
    //             ->with('error', $exception->getMessage());
    //     }
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param \Illuminate\Http\Request $request
    //  * @param int $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdateApply_jobRequest $request, $id)
    // {
    //     try {
    //         $data = $request->except(
    //             [
    //                 '_method',
    //                 '_token'
    //             ]
    //         );

    //         Apply_jobs::where('id', $id)->update($data);

    //         return redirect()
    //             ->route('admin.apply_jobs.index')
    //             ->with('success', 'Apply_job has been updated successfully.');
    //     } catch (\Exception $exception) {
    //         return redirect()
    //             ->back()
    //             ->with('error', $exception->getMessage());
    //     }
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param int $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     try {
    //         Apply_jobs::destroy($id);
    //         return redirect()
    //             ->route('admin.apply_jobs.index')
    //             ->with('success', 'Apply_job has been deleted successfully.');
    //     } catch (\Exception $exception) {
    //         return redirect()
    //             ->back()
    //             ->with('error', $exception->getMessage());
    //     }
    // }
}
