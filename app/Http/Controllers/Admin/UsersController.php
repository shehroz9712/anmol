<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdatePasswordRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = User::all();

        return view(
            'admin.users.index',
            compact('records')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\StoreUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->except([
            '_token',
            '_method',
            'area_of_expertise'
        ]);

        if ($request->hasFile('photo')) {
            //move | upload file on server
            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension(); // getting file extension
            $filename = strtolower(str_replace(' ', '-', $request->name)) . '-' . time() . '.' . $extension;
            $photo->move(uploadsDir(), $filename);
            $data['photo'] = $filename;
        }

        $user = User::create($data);

        event(new \App\Events\UserCreatedEvent($user));

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);

        return view(
            'admin.users.show',
            compact('data')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);

        return view(
            'admin.users.edit',
            compact('data')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Admin\UpdateUserRequest $request
     * @param User ID $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->except([
            '_token',
            '_method',
            'previous_image',
            'areas_of_expertise'
        ]);

        //check file if exists
        if ($request->hasfile('photo')) {
            //move | upload file on server
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $photo = strtolower(str_replace(' ', '-', $request->name)) . '-' . time() . '.' . $extension;
            $file->move(uploadsDir(), $photo);
            //remove/unlink if New uploaded successfully
            if (!empty($request->previous_image && file_exists(uploadsDir() . $request->previous_image))) {
                unlink(public_path(uploadsDir() . $request->previous_image));
            }
        } else {
            $photo = $request->previous_image;
        }

        $data['photo'] = $photo;

        User::where('id', $id)->update($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        User::delete($id);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User was deleted successfully.');
    }

    /**
     * Show the form for editing the password to specified resource.
     *
     * @return Response
     */
    public function changePassword()
    {
        return view('admin.users.changePassword');
    }

    /**
     * Update the password of specified resource in storage.
     *
     * @param UpdatePasswordRequest $request
     *
     * @return Response message
     */
    public function processChangePassword(UpdatePasswordRequest $request)
    {
        $user = Auth::user();
        if (Hash::check($request->get('oldpassword'),$user->password)) {
            $data['password'] = bcrypt($request->get('password'));

            Admin::where('id', $user->id)->update($data);

            return redirect()
                ->route('admin.users.change-password')
                ->with('success', 'Password has been changed successfully..');
        } else {
            return redirect()
                ->route('admin.users.change-password')
                ->with('error', 'Wrong Password..');
        }
    }
}
