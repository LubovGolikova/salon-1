<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allservices = Service::all();
        return view('admin.allAdmin',compact('allservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:3|max:150',
            'description'=>'required',
        ]);
        if($validator->fails()){
            return redirect('/admin/services/create')->withErrors($validator)->withInput();
        }
        $services = new Service();
        $services->name = $request->name;
        $services->description = $request->description;
        $services->time = $request->time;
        $services->price = $request->price;
        $services->path = $request->path;
        $services->user_id = Auth::user()->id;
        $services->save();
        return redirect('/admin/services/create')->with('success', 'Данные сохранены');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service =Service::find($id);
        return view('admin.editAdmin',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:3|max:150',
            'description'=>'required',
        ]);
        if($validator->fails()){
            return redirect('/admin/services/create')->withErrors($validator)->withInput();
        }
        $services = Service::find($id);
        $services->name = $request->name;
        $services->description = $request->description;
        $services->time = $request->time;
        $services->price = $request->price;
        $services->path = $request->path;
        $services->user_id = Auth::user()->id;
        $services->save();
        return redirect('/admin/services')->with('success', 'Данные сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return back();
    }
}
