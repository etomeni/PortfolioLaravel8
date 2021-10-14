<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index(Request $request) {
        return view('dashboard.index');
    }

    public function home(Request $request) {
        return view('dashboard.home');
    }

    public function new_project(Request $request) {
        return view('dashboard.new_project');
    }
    
}
