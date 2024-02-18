<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function categories()
    {
        return view('categories');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }
    public function about()
    {
        return view('about');
    }
    public function signup()
    {
        return view('signup');
    }
    public function test()
    {
        return view('test');
    }
}
