<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
		$users = DB::table('users')->get();
		return view ('users', ['users'=>$users]);
		//return $nama;
	}
	//public function index2(){
	//	$dosen = DB::table('users')->get();
	//	return view ('index2', ['users'=>$dosen]);
		//return $nama;
	//}
	
	public function tambah(){
		return view ('tambahusers');
	}
	
	public function store(Request $request){
		DB::table('users')->insert([
			'id'			=> $request->id,
			'name' 			=> $request->name,
			'email' 		=> $request->email,
			'password' 		=> $request->password,
			
			
			

		]);
		return redirect('/users');
	}
	
	public function edit($id){
		$users = DB::table('users')->where('id', $id)->get();
		return view('editusers',['users' => $users]); 
	}

	public function update(Request $request){
        DB::table('users')->where('email',$request->email)->update([ 
			
			'id'			=> $request->id,
			'name'			=>$request->name,
			'password' 		=> Hash::make($request['password']),
			'email' 		=> $request->email,

        ]); 
       	return redirect('/users');
    }

	public function hapus($id){
		DB::table('users')->where('id',$id)->delete();
		return redirect('/users');
	}  

}
