<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(Request $request){
        return view('pages.backend.user');
    }
    public function edits($id){
        return view('pages.backend.user-edit');
    }
    public function details($id){
        return view('pages.backend.user-detail');
    }
}
