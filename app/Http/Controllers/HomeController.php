<?php

namespace App\Http\Controllers;

use App\Models\Even;
use App\Models\Predi;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $a=Predi::latest()->paginate(10);
        $b=Even::latest()->paginate(10);
        return view('welcome', compact('a','b'));
    }
}
