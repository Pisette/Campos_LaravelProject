<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{


    public function controll($grade = "Enter grade")
    {
        $employee = array(
            array("name" => "John", "age" => 25, "dept" => "IT"),
            array("name" => "Maria", "age" => 26, "dept" => "HM"),
            array("name" => "Ahmed", "age" => 27, "dept" => "EDUC"),
            array("name" => "Rey", "age" => 25, "dept" => "IT"),
            array("name" => "Ashley", "age" => 26, "dept" => "HM"),
            array("name" => "Elisha", "age" => 27, "dept" => "EDUC"),
            array("name" => "Kemuel", "age" => 25, "dept" => "IT"),
            array("name" => "Melyssa", "age" => 26, "dept" => "HM"),
            array("name" => "Bea", "age" => 27, "dept" => "EDUC"),
            array("name" => "Shella", "age" => 27, "dept" => "EDUC")
        );


        return view('controll')->with('employee', $employee)
            ->with('grade', $grade);
    }

    public function test (){
        return view('employeelist');
    }
}
