<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function index(Request $request){
        return view('pages.backend.responden');
    }
    public function details($id){
        return view('pages.backend.responden-detail');
    }
}
