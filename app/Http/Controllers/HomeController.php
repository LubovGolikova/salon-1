<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::orderBy('created_at','DESC');
        return view('home',compact('services'));
    }
    public function services(){
        return view('services');
    }
}
