<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dosenController extends Controller
{
    public function index(){
		$dosen = DB::table('dosen')->get();
		return view ('dosen', ['dosen'=>$dosen]);
		//return $nama;
	}
	//public function index2(){
	//	$dosen = DB::table('dosen')->get();
	//	return view ('index2', ['dosen'=>$dosen]);
		//return $nama;
	//}
	
	public function tambah(){
		return view ('tambahdosen');
	}
	
	public function store(Request $request){
		DB::table('dosen')->insert([
			
			'nama_dosen' 			=> $request->nama_dosen,
			'jeniskelamindosen' 	=> $request->jeniskelamindosen,
			'alamat' 				=> $request->alamat,
			'email'					=> $request->email,
			'hp'					=> $request->hp,
			

		]);
		return redirect('/dosen');
	}
	
	public function edit($id){
		$dosen = DB::table('dosen')->where('id', $id)->get();
		return view('editdosen',['dosen' => $dosen]); 
	}

	public function update(Request $request){
        DB::table('dosen')->where('id',$request->id)->update([ 
      
			
			'nama_dosen' 			=> $request->nama_dosen,
			'jeniskelamindosen' 	=> $request->jeniskelamindosen,
			'alamat' 				=> $request->alamat,
			'email'					=> $request->email,
			'hp'					=> $request->hp,
        ]); 
       	return redirect('/dosen');
    }

	public function hapus($id){
		DB::table('dosen')->where('id',$id)->delete();
		return redirect('/dosen');
	}  

}
