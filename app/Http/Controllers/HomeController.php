<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function newindex()
    {
        $new =\DB::select('select * from category');
        return view('pages.new', compact('new'));
    }
    public function categories()
    {
        $categories=\App\Category::all();
        return view('layouts.categories', compact('categories'));
    }
}
