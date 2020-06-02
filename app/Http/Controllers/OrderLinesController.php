<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;
use App\OrderLines;
class OrderLinesController extends Controller
{
    public function index(){
        return view('datatimes');
    }
    public function add(Request $request,$id){
        $orderlines = new OrderLines();
        $orderlines->DateT = $request->DateT;
        $orderlines->services_id = Service::find($id);
        $orderlines->save();
        return redirect('/datatimes/{id}')->with('success', 'Дата выбрана');

    }
}
