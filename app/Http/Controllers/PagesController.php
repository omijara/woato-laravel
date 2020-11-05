<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
      return View('pages.home');
    }
    public function About()
    {
      return View('pages.about');
    }
    public function Donate()
    {
      return View('pages.donate');
    }
    public function Events()
    {
      return View('pages.events');
    }
    public function Volunteer()
    {
      return View('pages.volunteer');
    }
    public function Contact()
    {
      return View('pages.contact');
    }
}
