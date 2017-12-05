<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class sneakellsController extends Controller
{
    //
    public function insertShoes(Request $req){
         $validator = Validator::make($req->all(),
            [
                "name" => "required|min:3|unique",
                "brand" => "required",
                "picture" => "image|mimes",
                "descript" => "required",
                "price" => "numeric|min:1000",
                "disc" => "required|min:0|max:100",
                "stock" => "required|min:0|max:100"
            ],
            [
                "required" =>"Please input :attribute",
                "min" => ":attribute minimal :min",
                "image" => "The :attribute must be an image",
                "max" => ":attribute maximum :max"
            ]);
}

	public function updateShoes(Request $req){
		$validator = Validator::make($req->all(),
			[
				"name" => "required|min:3|unique",
                "brand" => "required",
                "picture" => "image|mimes",
                "descript" => "required",
                "price" => "numeric|min:1000",
                "disc" => "required|min:0|max:100",
                "stock" => "required|min:0|max:100"
			],
			[
				 "required" =>"Please input :attribute",
                "min" => ":attribute minimal :min",
                "image" => "The :attribute must be an image",
                "max" => ":attribute maximum :max"
			]

	);
	}


