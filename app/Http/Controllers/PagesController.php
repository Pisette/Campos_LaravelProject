<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function ContactUs (){
        return view('contactus');
    }

    public function AboutUs (){
        return view('aboutus');
    }

    public function Dashboard (){
        $students = array(
            array("name" => "John", "age" => 15, "course" => "GEE1"),
            array("name" => "Maria", "age" => 16, "course" => "Elective1"),
            array("name" => "Ahmed", "age" => 17, "course" => "MS102"));
     
    
    return view('dashboard')-> with('students', $students);
      
    }

    


}
