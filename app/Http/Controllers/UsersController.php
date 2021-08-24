<?php

namespace App\Http\Controllers;

use App\Country;
use App\Hobby;
use App\Language;
use App\User;
use App\UsersDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

class UsersController extends Controller
{
    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->save();
        }
        return view('users.register');
    }

    public function step2(Request $request){
        // echo "<pre>"; print_r(Auth::user()); die;
        // echo Auth::User()['id'];
        if($request->isMethod('post')){
            $data = $request->all();
            echo "<pre>"; print_r($data); die;
            $userDetail = new UsersDetail;
            $userDetail->user_id = Auth::user()['id'];
            $userDetail->dob = $data['dob'];
            $userDetail->gender = $data['gender'];
            $userDetail->height = $data['height'];
            $userDetail->marital_status = $data['marital_status'];
            $userDetail->save();
        }
        // Get All Countries 
        $countries = Country::get();

        // Get All Languages 
        $languages = Language::orderBy('name', 'ASC')->get();

        // Get All Hobbies

        $hobbies = Hobby::orderBy('title', 'ASC')->get();

        return view('users.step2')->with(compact('countries', 'languages', 'hobbies'));
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            // echo "<pre>"; print_r($data); die;
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin'=> 0])){
                // echo "success"; die;
                Session::put('frontSession', $data['email']);
                return redirect('/step/2');
            }else{
                // echo "failed"; die;
                return redirect::back()->with('flash_message_error', 'Invalid Username or Password');
            }
        }
    }

    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        return redirect()->action('IndexController@index');
    }

    public function checkEmail(Request $request){
        $data = $request->all();
        $usersCount = User::where('email', $data['email'])->count();
        if($usersCount > 0){
            echo 'false';
        }else{
            echo 'true';
        }
    }
}
