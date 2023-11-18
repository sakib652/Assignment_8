<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){

        $name = "Donald Trump";
        $age = "75";

        $data = [
            "Id"=>$id,
            "Name"=>$name,
            "Age"=>$age
        ];
    
        //Cookie
        $cookieName = "access_token";
        $cookieValue = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response()->json($data)->withCookie($cookieName,$cookieValue,$minutes,$path,$domain,$secure,$httpOnly)->setStatusCode(200);
    }    
}


