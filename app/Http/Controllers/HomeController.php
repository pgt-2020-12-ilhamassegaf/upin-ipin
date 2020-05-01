<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function template()
    {
        return view('dashboard');
    }
    public function index2()
    {
        return view('index');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    public function dashboard()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view ('dashboard', ['mahasiswa'=>$mahasiswa]);
    }
}
