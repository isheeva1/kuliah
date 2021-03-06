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
         $validator = Validator::make($req->all(),
            [
                "name" => "required|min:3",
                "email" => "unique:root,email|required",
                "password" => "required|min:5|alpha_num",
                "password_confirm" => "required_with:password|same:password",
                "picture" => "required|mimes:jpeg,png,jpg,bmp",
                "gender" => "required|in:male,female",
                "dob" => "required|date_format:Y-m-d",
                "address" => "required|min:10"
            ],
            [
                "required" =>"Please input :attribute",
                "min" => ":attribute minimal :min characters",
                "mimes" => ":attribute must be an image file",
                "alpha_num" => ":attribute must be alphanumeric"
            ]);

         public function update(Request $req){
            $validator= new Validator::make($req->all(),
            [
                "name" => "required|min:3",
                "email" => "unique|email|required",
                "picture" => "mimes:jpeg,png,jpg,bmp",
                "gender" => "required",
                "dob" => "date_format:Y-m-d|",
                "address" => "required|min:10"
            ],
            [
                "required" => "Please input :attribute",
                "min" =>  ":attribute minimal :min characters",
                "mimes" => ":attribute must be an image file"

            ]
         });
        
        public function updateUser(Request $req){
            $validator= new Validator::make($req->all(),
            [
                "name" => "required|min:3",
                "email" => "unique|email|required",
                "picture" => "mimes:jpeg,png,jpg,bmp",
                "gender" => "required",
                "dob" => "date_format:Y-m-d|",
            ],
            [
                "required" => "Please input :attribute",
                "min" =>  ":attribute minimal :min characters",
                "mimes" => ":attribute must be an image file"

            ]
         });

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
