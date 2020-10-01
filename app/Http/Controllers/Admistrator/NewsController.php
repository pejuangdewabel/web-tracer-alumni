<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{     
    public function index()
    {        
        return view('pages.backend.berita');
    }   
    public function edits($id){
        return view('pages.backend.berita-edit');
    }
     public function details($id){
        return view('pages.backend.berita-detail');
    }
}
