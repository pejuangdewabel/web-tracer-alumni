<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('pages.frontendUser.berita');
    }
    public function detail(Request $request){
        return view('pages.frontendUser.detailBerita');
    }
}