<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registration()
    {
        return view('front.register');
    }
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'email' => 'required|string|email|max:191|unique:users',
            'phone' => 'required',

        ]);
        if ($validator->fails() == true) {
            session()->flash('error', $validator->errors()->first());
            return redirect()->back()->withInput();
        }
        $randome = null;
        $password = null;
        if ($request->password) {
            $password = $request->password;
        } else {
            $password = $randome;
            $randome = mt_rand(1111, 9999999);
        }
        $userdata = User::create(
            [
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($password),
                'code' =>    $randome,
            ]
        );

        dispatch(new \App\Jobs\SendUserCreatedEmailJob($userdata));
        request()->session()->flash('message', 'Your feedback submitted successfully');


        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }


        $credentials = (['email' => $queries->email, 'password' => $queries->password]);



        if (!Auth::attempt($credentials)) {
            return $this->respondUnauthorized('Invalid Email and Password');
        }

        return redirect()
            ->route('front.create_event')
            ->with('success', 'Query has been submit successfully.');
    }
    public function login_form()
    {
        return view('front.login');
    }
}


linkily (
linkily (
linkily (
linkily (
linkily ( Management
linkily (
linkily ( Management