<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TapanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:tapan');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('tapan.home');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}

