<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index(){
		$nilai = DB::table('nilai')->get();
		return view ('nilai', ['nilai'=>$nilai]);
		//return $nama;
	}
	//public function index2(){
	//	$dosen = DB::table('nilai')->get();
	//	return view ('index2', ['nilai'=>$dosen]);
		//return $nama;
	//}
	
	public function tambah(){
		return view ('tambahnilai');
	}
	
	public function store(Request $request){
		DB::table('nilai')->insert([
			'id'			=> $request->id,
			'nim' 			=> $request->nim,
			'nama' 			=> $request->nama,
			'uts' 			=> $request->uts,
			'uas' 			=> $request->uas,
			'tugas'			=> $request->tugas,
			'kuis'			=> $request->kuis,
			'nama_mk'		=> $request->nama_mk,
			
			

		]);
		return redirect('/nilai');
	}
	
	public function edit($id){
		$nilai = DB::table('nilai')->where('id', $id)->get();
		return view('editnilai',['nilai' => $nilai]); 
	}

	public function update(Request $request){
        DB::table('nilai')->where('id',$request->id)->update([ 
      
			'id'			=> $request->id,
			'nim' 			=> $request->nim,
			'nama' 			=> $request->nama,
			'uts' 			=> $request->uts,
			'uas' 			=> $request->uas,
			'tugas'			=> $request->tugas,
			'kuis'			=> $request->kuis,
			'nama_mk'		=> $request->nama_mk,

        ]); 
       	return redirect('/nilai');
    }

	public function hapus($id){
		DB::table('nilai')->where('id',$id)->delete();
		return redirect('/nilai');
	}  

}
