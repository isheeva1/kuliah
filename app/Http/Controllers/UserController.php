<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\User;
use App\Role;



class UserController extends Controller
{
    // 
    public function index(){
        $newUser = Role::all();
        return view('register', ['newUser' => $newUser]);
    }

    public function insert(Request $req){
         /*$validator = Validator::make($req->all(),
            [
                "name" => "required|min:3",
                "email" => "unique:root,email",
                "password" => "required|min:5",
                "gender" => "in:male,female",
                "dob" => "required",
                "address" => "required|min:10"
            ],
            [
                "required" =>"Please input :attribute",
                "min" => ":attribute minimal :min character"
            ]);
        
        if($validator->fails())
            return redirect()->back()->withErrors($validator);
        */
        $newUser = new User();
        $newUser->name = $req->name;
        $newUser->email = $req->email;
        $newUser->password = $req->password;
        $newUser->gender = $req->gender;
        $newUser->address = $req->address;
        $newUser->dob = $req->dob;
        $newUser->save();
        $newUser = User::All();
        return view('register')->with('users',$newUser);

}
