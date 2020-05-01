<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
		$mahasiswa = DB::table('mahasiswa')->get();
		return view ('dashboard', ['mahasiswa'=>$mahasiswa]);
		//return $nama;
	}
	//public function index2(){
	//	$dosen = DB::table('mahasiswa')->get();
	//	return view ('index2', ['mahasiswa'=>$dosen]);
		//return $nama;
	//}
	
	public function tambah(){
		return view ('tambah');
	}
	
	public function store(Request $request){
		DB::table('mahasiswa')->insert([
			'id'			=> $request->id,
			'nim' 			=> $request->nim,
			'nama' 			=> $request->nama,
			'jeniskelamin' 	=> $request->jeniskelamin,
			'programstudi' 	=> $request->programstudi,
			'tempatlahir'	=> $request->tempatlahir,
			'tanggallahir'	=> $request->tanggallahir,
			'tahunmasuk'	=> $request->tahunmasuk,
			'kelas'			=> $request->kelas,
			'pembimbing'	=> $request->pembimbing,
			

		]);
		return redirect('/dashboard');
	}
	
	public function edit($id){
		$mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
		return view('edit',['mahasiswa' => $mahasiswa]); 
	}

	public function update(Request $request){
        DB::table('mahasiswa')->where('id',$request->id)->update([ 
      
			'nim' 			=> $request->nim,
			'nama' 			=> $request->nama,
			'jeniskelamin' 	=> $request->jeniskelamin,
			'programstudi' 	=> $request->programstudi,
			'tempatlahir'	=> $request->tempatlahir,
			'tanggallahir'	=> $request->tanggallahir,
			'tahunmasuk'	=> $request->tahunmasuk,
			'kelas'			=> $request->kelas,
			'pembimbing'	=> $request->pembimbing,
			
        ]); 
       	return redirect('/dashboard');
    }

	public function hapus($id){
		DB::table('mahasiswa')->where('id',$id)->delete();
		return redirect('/dashboard');
	}  

}
