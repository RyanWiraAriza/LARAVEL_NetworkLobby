<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Session;

class HalamanController_ extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //php artisan make:controller HalamanController --resource
    public function index()
    {
        //$data = contact::All();
        //$data = contact::orderby('id','asc')->get();
        $data = contact::orderby('id','asc')->paginate(3);
        return view("page/index")->with("data",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('page/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Session::flash('name',$request->name);
        Session::flash('telephone',$request->telephone);
        Session::flash('email',$request->email);
        Session::flash('instagram',$request->instagram);
        $request->validate([
            'name'=>'required',
            'telephone'=>'required|numeric',
            'email'=>'required',
            'instagram'=>'required'
        ],[
            'name.required'=>'Did you just forget your name? lol'
        ]);
        $data = [
            'name'=>$request->input('name'),
            'telephone'=>$request->input('telephone'),
            'email'=>$request->input('email'),
            'instagram'=>$request->input('instagram')
        ];
        contact::create($data);
        return redirect('/contact')->with('success','Data added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        /*$data = [
            'telephone'=>'081372007412',
            'contact'=>[
                'email'=>'ryan.dipura@binus.ac.id',
                'instagram'=>'ChessLunatic'
            ]
            ];*/
        $data = contact::where('id',$id)->first();
        return view("page/contact")->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = contact::where('id',$id)->first();
        return view('page.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'telephone'=>'required|numeric',
            'email'=>'required',
            'instagram'=>'required'
        ],[
            'name.required'=>'Did you just forget your name? lol'
        ]);
        $data = [
            'name'=>$request->input('name'),
            'telephone'=>$request->input('telephone'),
            'email'=>$request->input('email'),
            'instagram'=>$request->input('instagram')
        ];
        contact::where('id',$id)->update($data);
        return redirect('/contact')->with('success','Data updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        contact::where('id',$id)->delete();
        return redirect('/contact')->with('success','Data deleted succesfully');
    }
}
