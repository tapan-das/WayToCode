<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Validator;
use Auth;
class MainController extends Controller
{
    public function index()
    {
    	return view('login');
    }
    public function checklogin(Request $request)
    {
    	//$this->validate($request, [
    		//'email'		=>	'required|email',
    		//'password'	=>	'required|alphaNum|min:4'
    	//]);
    	//$user_data = array(
    	//	'email'		=>	$request->get('email'),
    		//'password'	=> 	$request->get('password')

    	//);
    	$email=$request->email;
        $password=md5($request->password);
        $user_data=DB::table('users')
                ->where('email',$email)
                ->where('password',$password)
                ->first();
                //echo "<pre>";
                //print_r($result);
               // if ($user_data) {
                //  Session::put('name',$user_data->name);
                //  Session::put('id',$user_data->id);
                 // return Redirect::to('/dashboard');
               // }else{
                //  Session::put('message','Email or Password Invalid');
                 // return Redirect::to('/admin');
               // }
    	if(Auth::attempt($user_data))
    	{
    		return redirect('main/successlogin');
    	}
    	else
    	{
    		return back()->with('Error','Error in Login details' );
    	}
    }
    public function successlogin()
    {
    	//return view('successlogin');
    	return view('dashboard');
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('main');
    }
}
