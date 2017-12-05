<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class brandController extends Controller
{
    public function updatebrand(Request $req){
    	$validator = Validator:make($req->all(),
    		[
    			"brandName" => "required|unique|"
    		],
    		[
    			"required" => "Please input :attribute"
    		]);
    }
}
