<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function create( )
	{
		return view("myprofile/create");
    }
    public function edit($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "Phantakan" ,
            "lastname" => "Adam",
            "email" => "Phantakan.adam@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/edit" , compact('profile','others') );
    }
    public function show($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "Phantakan" ,
            "lastname" => "Adam",
            "email" => "phantakan@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/show" , compact('profile','others') );
    }
    public function gallery(){
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat =url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");

    return view("test/index", compact("ant","bird","cat","god","spider") );
}
    public function ant()
    {
        $ant = url("images/ant.jpg");
    
    return view("test/ant", compact("ant") );
    }
    public function bird()
    {
    $bird = url("images/bird.jpg");
    
    return view("test/bird", compact("bird") );
    }
}
