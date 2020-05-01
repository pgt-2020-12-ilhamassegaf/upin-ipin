<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    public function index(){
		$matakuliah = DB::table('matakuliah')->get();
		return view ('matakuliah', ['matakuliah'=>$matakuliah]);
		//return $nama;
	}
	//public function index2(){
	//	$dosen = DB::table('matakuliah')->get();
	//	return view ('index2', ['matakuliah'=>$dosen]);
		//return $nama;
	//}
	
	public function tambah(){
		return view ('tambahmatakuliah');
	}
	
	public function store(Request $request){
		DB::table('matakuliah')->insert([
			'id'			=> $request->id,
			'kd_mk' 		=> $request->kd_mk,
			'nama_mk' 		=> $request->nama_mk,
			'sks' 			=> $request->sks,
			
			
			

		]);
		return redirect('/matakuliah');
	}
	
	public function edit($id){
		$matakuliah = DB::table('matakuliah')->where('id', $id)->get();
		return view('editmatakuliah',['matakuliah' => $matakuliah]); 
	}

	public function update(Request $request){
        DB::table('matakuliah')->where('id',$request->id)->update([ 
      
			'id'			=> $request->id,
			'kd_mk' 		=> $request->kd_mk,
			'nama_mk' 		=> $request->nama_mk,
			'sks' 			=> $request->sks,
			
        ]); 
       	return redirect('/matakuliah');
    }

	public function hapus($id){
		DB::table('matakuliah')->where('id',$id)->delete();
		return redirect('/matakuliah');
	}  

}
