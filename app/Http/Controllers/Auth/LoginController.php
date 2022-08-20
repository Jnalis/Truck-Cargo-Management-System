<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        // dd($request->email);

        $loginInfo = Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password,
            ]
        );


        if ($loginInfo) {
            $current_user_id = Auth::user()->id;
            // dd($current_user_id);
            // return 'your logged in';

            $role_user_id = RoleUser::select('role_id')->firstWhere('user_id', '=', $current_user_id)->role_id;

            // return 'the current role is admin which have id no ' . $role_user_id;

            // $role_id = Role::select('id')->firstWhere('id', '=', $role_user_id)->id;

            // return 'i get the role id which is ' . $role_id;

            if (1 == $role_user_id) {

                // dd(Auth::user()->usertype);
                // FacadesAlert::toast('Welcome', 'success');
                return redirect(route('admin.home'));
            }
        } else {
            return back()->with('fail', 'Check your credentials');
            // FacadesAlert::error('Login Info', 'Please make sure your login information are correct');
            // return back();
        }
    }
}
