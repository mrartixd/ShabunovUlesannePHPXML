<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Routing\Redirector;

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

    public function create()
    {
        return view('pages.new');
    }

    public function suc()
    {
        return view('pages.success');
    }

    public function store(Post $postModel, Request $request)
    {
        //dd($request->all());
        //\DB::table('news')->insert($request->except('_token'));
        //$postModel->create($request->all());
        \DB::insert('insert into news (title, description, id_category, link) values (?, ?, ?, ?)', [$request->get('title'), $request->get('description'), $request->get('category'),$request->get('links')]);
        return redirect('suc');
    }
    
}
