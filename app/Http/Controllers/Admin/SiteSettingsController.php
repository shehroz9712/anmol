<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UpdateSiteSettingRequest;
use App\Models\SiteSetting;

class SiteSettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $records = SiteSetting::first();
        return view('admin.siteSettings', compact('records'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSiteSettingRequest $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateSiteSettingRequest $request, $id)
    {
        try {
            $data = $request->except([
                '_token',
                '_method',
                'previous_logo'
            ]);

            if ($request->hasfile('logo')) {
                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename = 'logo-' . time() . '.' . $extension;
                $file->move(uploadsDir(), $filename);
                $data['logo'] = $filename;
                if (file_exists(uploadsDir() . $filename)
                    && !empty($request->previous_logo && file_exists(uploadsDir() . $request->previous_logo))
                ) {
                    unlink(public_path(uploadsDir() . $request->previous_logo));
                }
            } else {
                $data['logo'] = $request->previous_logo;
            }

            SiteSetting::where('id', $id)->update($data);

            return redirect()
                ->route('admin.site-settings.index')
                ->with('success', 'Site settings was updated successfully!');
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}
