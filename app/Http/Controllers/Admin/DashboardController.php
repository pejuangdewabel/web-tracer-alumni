<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // $tangal = Carbon::now()->toTimeString();
        $users = User::where('roles','USER')->count();
        return view('pages.backend.dashboard',[
            'user' => $users
        ]);
    }
}
