<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuisionerController extends Controller
{
    public function index(Request $request){
        return view('pages.backend.kuisioner');
    }
    public function edits($id){
        return view('pages.backend.kuisioner-edit');
    }
}
