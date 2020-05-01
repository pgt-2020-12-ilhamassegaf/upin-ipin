@extends('layout.app')


@section('content')
<section class="content-header">
      <h1>
        POLTEK-GT
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
<body>
<div class="box">
<div class="box-header with-border">
          <h3 class="box-title">Edit Mahasiswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
    
          <a href="/dashboard" class="btn btn-sm btn-info btn-flat pull-left"><- Kembali</a>
          <br/>
          <br/>

    @foreach($mahasiswa as $p)  
    <form action="/dashboard/update" method="post">  
        {{ csrf_field() }}   
        <input type="hidden" name="id" value="{{ $p->id }}"><br/>
        <table class="table no-margin">
            <tr>
                <td>NIM</td>
                <td >:</td>
                <td><input type="number" required="required" name="nim" value="{{ $p->nim }}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" required="required" name="nama" value="{{ $p->nama }}"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name = "jeniskelamin" required="required">
                    <option value="">-PILIH-</option>
                    <option value = "Laki-laki">Laki-laki</option>
                    <option value = "Perempuan">Perempuan</option>
                    </select></td>
            </tr>
              <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td><select name = "programstudi" required="required">
                    <option value="">-PILIH-</option>
                    <option value = "Teknik Mesin">Teknik Mesin</option>
                    <option value = "Teknik Elektronika">Teknik Elektronika</option>
                    <option value = "Teknologi Industri">Teknologi Industri</option>
                    </select></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" required="required" name="tempatlahir" value="{{ $p->tempatlahir }}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="varchar" required="required" name="tanggallahir" value="{{ $p->tanggallahir }}"></td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="number" required="required" name="tahunmasuk" value="{{ $p->tahunmasuk }}"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" required="required" name="kelas" value="{{ $p->kelas }}"></td>
            </tr>
            <tr>
                <td>Pembimbing</td>
                <td>:</td>
                <td><input type="text" required="required" name="pembimbing" value="{{ $p->pembimbing }}"></td>
            </tr>
          
            <tr>
                <td><input type="submit" class="btn btn-primary" value="Simpan Data"></td>
            </tr>
        </table>   
    </form> 
    @endforeach 
    </div>
</body>
@endsection