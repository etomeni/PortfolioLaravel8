<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function new_project(Request $request) {
        return view('dashboard.new_project');
    }
}
