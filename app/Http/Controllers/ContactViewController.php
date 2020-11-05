<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactViewController extends Controller
{
    public function index(){
	$users = DB::select('select * from contact');
	return view('cont_view',['users'=>$users]);
	}
}
