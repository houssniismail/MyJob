<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('Register');
    }
    public function register(Request $request){
        // dd($request->name,$request->email,$request->password);
      $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $Alldata =$request->all();
        $check = $this->create($Alldata);
        return redirect('dashboard');
    }
    public function create(array $data){
        return User::create([
          'name'=>$data['name'],
          'email'=>$data['email'],
          'password'=>Hash::make($data['password']),
        ]);
    }
}
