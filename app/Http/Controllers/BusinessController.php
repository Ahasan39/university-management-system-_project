<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function business(){
        $name = "Imam";
        $email = "imam@gmail.com";
        
        $sports = array(
                    array('id'=>1,'name'=>'Cricket'),
                    array('id'=>2, 'name'=>'Football'),
                    array('id'=>3, 'name'=>'Tennis')
                );
        $show = false;
        return view('business',compact('n','m','name','email','sports','show'));
        //return view('business',['first'=>$n, 'second'=>$m, 'myname'=>$name,])

    }
}
