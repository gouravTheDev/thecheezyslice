<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Response;
use App\Models\User;
use App\Models\Cards;
use App\Models\SubscriptionPlan;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }else{
            return view('admin.login');
        }
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }else{
            return view('admin.login');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...

            FacadesSession::put('email', $request->email);
            // Session::put('s_email', $request->email);
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()->with('success', "You have entered wrong credentials");
    }

    // public function postRegister(Request $request)
    // {  
    //     // dd($request->all());         
     
    //     $data = array('name' => 'Cheezyslice Admin', 'email' => 'admin@thecheezyslice.com', 'password' => "Fgta%$128Yag#");
    //     // dd($data);
    //     $data['password']=Hash::make($data['password']);
    //     $check = User::create($data);

    //     return Redirect::to("/admin/login")->with('success','Login to continue'); 
    // }

    public function logout() {
        FacadesSession::flush();
        Auth::logout();
        return Redirect('/admin/login');
    }
}
