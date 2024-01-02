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
        return redirect('/register');
    }

    public function std_view(){
        $data=stdController::all();
        $std_Data=compact('data');
        return view('std_view')->with($std_Data);
    }

    public function delete($id){
        $user_data=stdController::find($id);
        if(!is_null($user_data)) {
            $user_data->delete();
            return redirect('/std_view');
        } else {
            return redirect('/std_view');
            
        }
    }

    public function edit($id){
        $user_data=stdController::find($id);
        return view('update')->with(['user_data' =>$user_data]);
    }

    public function update($id ,Request $request){
        $user=stdController::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();
        return redirect('std_view');
    }
}