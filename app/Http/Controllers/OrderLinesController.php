<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;
use App\OrderLines;
class OrderLinesController extends Controller
{
    public function index()
    {
        return view('datatimes');
    }

    public function add(Request $request)
    {
        $service = Service::find($request->id);
        $orderlines = new OrderLines();
        $orderlines->DateT = $request->DateT;
        $orderlines->Times = $request->Times;
        $orderlines->services_id = $service->id;
        $orderlines->save();
        return redirect('/order');

    }

    public function getByDate(Request $request)
    {
        $date = $request->date;
        $orderlines = OrderLines::where('DateT', '=', $date)->get();
        return json_encode($orderlines->pluck('Times'));

    }
}
