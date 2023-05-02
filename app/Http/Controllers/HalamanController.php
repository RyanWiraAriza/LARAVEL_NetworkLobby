<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class HalamanController extends Controller
{
    //
    function index(){
        $data = contact::orderby('id','asc')->paginate(3);
        return view("page/index")->with("data",$data);
    }
    function contact($id){
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
    function create(){
        //
    }
    function delete(){
        
    }
}
