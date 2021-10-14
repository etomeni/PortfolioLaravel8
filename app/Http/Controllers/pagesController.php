<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\contacts;

class pagesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function projects() {
        return view('projects');
    }
    public function resume() {
        return view('resume');
    }
    public function getContact() {
        return view('contact');
    }
    public function postContact(Request $request) {
        
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5'
        ]);

        $contact = new contacts();
        $contact->name =$request->name;
        $contact->email =$request->email;
        $contact->message =$request->message;
        $contact->save();

        return view('contact');
    }
   
    public function login() {
        return view('login');
    }
    
    public function loginAuth(Request $request) {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard.index');
        }
        return back()->withErrors([
            'errorMessage' => 'Wrong email or password!'
        ]);
    }

    public function logoutAuth(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('see_login');
    }

}
 