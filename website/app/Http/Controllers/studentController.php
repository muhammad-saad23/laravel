<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdController;
class studentcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function register(){
        return view('register');
    }
    public function create(Request $request){
        // print_r($request->all());
        // return view('registration');
        $std_data=new stdController();
        $std_data->email=$request['email'];
        $std_data->name=$request['name'];
        $std_data->password=$request['password'];
        $std_data->save();
        return redirect('/regsiter');
    }

    public function std_view(){
        $data=stdController::all();
        $std_Data=compact('data');
        return view('std_view')->with($std_Data);
    }
}