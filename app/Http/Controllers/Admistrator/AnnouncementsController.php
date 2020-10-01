<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.backend.pengumuman');
    }

    public function details($id){
        return view('pages.backend.pengumuman-detail');
    }

    public function edits($id){
        return view('pages.backend.pengumuman-edit');
    }

}
