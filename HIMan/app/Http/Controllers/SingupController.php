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
                'Entroprise_Name' => 'required|max:70',
                'User_Name' => 'required|max:70',
                'Email' => 'required|max:90',
                'Phone_Number' => 'required|min:6',
                'password' => 'required|min:8|alphaNum',
                're_password'=>'required|min:8|alphaNum'
            ] );

        $request->file('Avatar')->storeAs('public/users_avatar',$request->file('Avatar')->getClientOriginalName());

        $Singup_table = new singup();

        $Singup_table->Entroprise_Name = $request->input('Entroprise_Name');
        $Singup_table->src ='public/users_avatar/'.$request->file('Avatar')->getClientOriginalName();
        $Singup_table->User_Name = $request->input('User_Name');
        $Singup_table->Email = $request->input('Email');
        $Singup_table->Phone_Number = $request->input('Phone_Number');
        $Singup_table->password = $request->input('password');
        
        $Singup_table->save();

        return redirect()->route('main_log');
    }

    public function log_in(Request $request){

        $data = singup::all();

        $res  = $request->validate(
            [
                'log'=>'required',
                'pass'=>'required|min:8|alphaNum'
            ] );

        foreach($data as $x){

            if($request->input('log')===$x['Email'] and $request->input('pass')===$x['password']){
                return view("user_interface",['user_id'=>$x['id'],'title'=>'USER']);
                        // return redirect()->route('user_interface',['id'=>$x['id']]);// dir view noxan 
            }
            else{
                 return redirect()->route('singin');
                // return view('Singin',['title'=>'Singin','massage'=>'the password or the email is wrong']);
            }
        }
        
    }

    // public function user_interface($id){

    //     return view("user_interface",['user_id'=>$id,'title'=>'USER']);
    // }
 
}
