<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function index(){
        return view('pages.frontendUser.pengumuman');
    }
    public function detail(Request $request){
        return view('pages.frontendUser.detailPengumuman');
    }
}
