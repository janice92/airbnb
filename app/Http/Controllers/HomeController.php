<?php

namespace App\Http\Controllers;

use App\Annonce;
use Image;


use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('home', compact('annonces'));
    }
    public function search($search){
        $search = urldecode($search);
        $annonces = Annonce::select()
                ->where('title', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->get();

        return view('home', compact('annonces'));
 
    }
}
