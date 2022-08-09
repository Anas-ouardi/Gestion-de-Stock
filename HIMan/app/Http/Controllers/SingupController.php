<?php

namespace App\Http\Controllers;

use App\Models\singup;
use Illuminate\Http\Request;

class SingupController extends Controller
{
    public function index(){

        $data = singup::all();

        
        view('main_log',['datas' => $data]);
    }

    public function stor(Request $request ){


        $res  = $request->validate(
            [
                'Entroprise_Name' => 'required|max:100',
                'User_Name' => 'required|max:50',
                'Email' => 'required',
                'Phone_Number' => 'required|integer',
                'password' => 'required'
            ] );


        $test = new singup();

        $test->Entroprise_Name = $request->input('Entroprise_Name');
        $test->User_Name = $request->input('User_Name');
        $test->Email = $request->input('Email');
        $test->Phone_Number = $request->input('Phone_Number');
        $test->password = $request->input('password');


        $test->save();



        return redirect()->route('index');
    }

    public function jjhh(){

        $data = singup::all();

        dd($data);

    }

    
}
