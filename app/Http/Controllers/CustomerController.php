<?php

namespace App\Http\Controllers;

use App\OrderLines;
use App\Service;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Validator;
use App\Customer;
use Illuminate\Support\Facades\Mail;
class CustomerController extends Controller
{
    public function index(Request $request){
        $service = Service::find($request->service);
        $Times = $request->Times;
        $DateT = $request->DateT;
        return view('order.newOrder',compact('service', 'Times', 'DateT'));

    }
    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:2|max:150',
            'phone'=>'required',
            'email'=>'required',
        ]);
        if($validator->fails()){
            return redirect('/order')->withErrors($validator)->withInput();
        }
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->message = $request->message;
        $customer->save();
        $OrderLines = new OrderLines();
        $OrderLines->services_id = $request->service;
        $OrderLines->DateT = $request->DateT;
        $OrderLines->Times = $request->Times;
        $OrderLines->customers_id = $customer->id;
        $OrderLines->save();

        Mail::to($customer->email )->send(new OrderShipped($OrderLines));
        return redirect('/order')->with('success', 'Заказ оформлен');

    }

    public function thank(){
        return view('order.thank');
    }
}
