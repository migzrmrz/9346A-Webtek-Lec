<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function quiz()
    {
        return view('pages.quiz');
    }

    public function courses()
    {
        return view('pages.courses');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }
}
