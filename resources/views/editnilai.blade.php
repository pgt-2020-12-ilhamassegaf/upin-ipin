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
    
<body>
<div class="box">
<div class="box-header with-border">
          <h3 class="box-title">Edit Nilai</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
    
          <a href="/nilai" class="btn btn-sm btn-info btn-flat pull-left"><- Kembali</a>
          <br/>
          <br/>

    @foreach($nilai as $p)  
    <form action="/nilai/update" method="post">  
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
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" required="required" name="uts" value="{{ $p->uts }}"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" required="required" name="uas" value="{{ $p->uas }}"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" required="required" name="tugas" value="{{ $p->tugas }}"></td>
            </tr>
            <tr>
                <td>Nilai Kuis</td>
                <td>:</td>
                <td><input type="number" required="required" name="kuis" value="{{ $p->kuis }}"></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" required="required" name="nama_mk" value="{{ $p->nama_mk }}"></td>
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