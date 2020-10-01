<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function setting(){
        return view('pages.frontendDashboard.setting-account');
    }   
    public function changePassword(){
        return view('pages.frontendDashboard.setting-password');
    }
    public function success(){
        return view('pages.frontendDashboard.success-pages');
    }
}
