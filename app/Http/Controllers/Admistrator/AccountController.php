<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function setting(){
        return view('pages.backend.setting-akun');
    }
    public function changePassword(){
        return view('pages.backend.ubah-password');
    }
}
