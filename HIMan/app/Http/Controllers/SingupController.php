<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singup;

use function Ramsey\Uuid\v1;

class SingupController extends Controller
{
    public function index(){

        return view("welcome");


    }


    public function main(){

        $data = singup::all();

        return view('main_log',['datas'=>$data,'title'=>"Main Log"]);
    }

    public function stor(Request $request ){


        $res  = $request->validate(
            [
                'Entroprise_Name' => 'required',
                'User_Name' => 'required',
                'Email' => 'required',
                'Phone_Number' => 'required',
                'password' => 'required'
            ] );


        $Singup_table = new singup();

        $Singup_table->Entroprise_Name = $request->input('Entroprise_Name');
        $Singup_table->User_Name = $request->input('User_Name');
        $Singup_table->Email = $request->input('Email');
        $Singup_table->Phone_Number = $request->input('Phone_Number');
        $Singup_table->password = $request->input('password');


        $Singup_table->save();



        return redirect()->route('main_log');
    }

    public function log_in(Request $request){
        


    }



    
}
