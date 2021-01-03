<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
Session_start();
use Session;
use DB;

class LoginController extends Controller
{
    public function loginForm()
    {
    	return view('login');
    }
    /*
    public function dashboard(Request $request)
    {
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);
        $result=DB::table('users')
                ->where('email',$admin_email)
                ->where('password',$admin_password)
                ->first();
                //echo "<pre>";
                //print_r($result);
                if ($result) {
                  Session::put('admin_name',$result->admin_name);
                  Session::put('admin_id',$result->admin_id);
                  return Redirect::to('/dashboard');
                }else{
                  Session::put('message','Email or Password Invalid');
                  return Redirect::to('/admin');
                }
    }
    */
    /* @POST
*/
public function login(Request $request){
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
        ]);
    if (\Auth::attempt([
        'email' => $request->email,
        'password' => $request->password])
    ){
        return redirect('/dashboard');
    }
    return redirect('/login')->with('error', 'Invalid Email address or Password');
}
/* GET
*/
public function logout(Request $request)
{
    if(\Auth::check())
    {
        \Auth::logout();
        $request->session()->invalidate();
    }
    return  redirect('/login');
}
}
