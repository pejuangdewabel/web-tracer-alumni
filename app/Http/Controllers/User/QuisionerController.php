<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuisionerController extends Controller
{
    public function quisionerOne(Request $request){
        return view('pages.frontendDashboard.questionOne');
    }
    public function quisionerTwo(){
        return view('pages.frontendDashboard.questionTwo');
    }
    public function quisionerThree(){
        return view('pages.frontendDashboard.questionThree');
    }
    public function quisionerFour(){
        return view('pages.frontendDashboard.questionFour');
    }
}
