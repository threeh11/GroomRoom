<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function myApplications()
    {
        return 'myApplications';
    }

    public function allAplications()
    {
        return 'allAplications';
    }

    public function profile()
    {
        return view('profile');
    }
}