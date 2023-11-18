<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id=01){
        $name = "Donal Trump";
        $age = "75";

        // Create associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];
        setcookie(
            $name='access_token',      
            $value='123-XYZ',            
            $expTime= 1,    //1 minute 
            $path='/',                  
            $domain=$_SERVER['SERVER_NAME'], 
            $secure=false,                
            $HTTPOnly=true                 
        );
        return response()->json($data, status:200)->cookie($name,$value,$expTime,$path,$domain,$secure,$HTTPOnly);
        
    }

    

   
}
