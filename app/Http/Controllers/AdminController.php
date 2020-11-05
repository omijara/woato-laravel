<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function index()
    {
    	return view('admin.dashboard');
    }
    
    public function Profile()
    {
        return view('admin.profile');
    }

    public function Change_Pass()
    {
        return view('admin.change_password');
    }

    public function Post_list()
    {
        return view('admin.list.post');
    }

    public function Volunteer_list()
    {
        return view('admin.list.volunteer');
    }

    public function Contact_list()
    {
        return view('admin.list.contact');
    }
}
