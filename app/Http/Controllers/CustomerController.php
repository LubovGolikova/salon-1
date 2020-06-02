<?php

namespace App\Http\Controllers;

use App\OrderLines;
use App\Service;
use Illuminate\Http\Request;
use Validator;
use App\Customer;
class CustomerController extends Controller
{
    public function index(){
        return view('order.newOrder');
    }
    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:3|max:150',
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
        return redirect('/order')->with('success', 'Заказ оформлен');

    }
}
