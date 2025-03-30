<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function dash (){
        return 'this will conatain the dash view';
    }

    public function contact (){
        return 'this will conatain the contact view';
    }

    public function profile (){
        return 'this will conatain the profile view';
    }
}
