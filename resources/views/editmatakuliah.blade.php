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
          <h3 class="box-title">Edit Matakuliah</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
    
          <a href="/matakuliah" class="btn btn-sm btn-info btn-flat pull-left"><- Kembali</a>
          <br/>
          <br/>

    @foreach($matakuliah as $p)  
    <form action="/matakuliah/update" method="post">  
        {{ csrf_field() }}   
        <input type="hidden" name="id" value="{{ $p->id }}"><br/>
        <table class="table no-margin">
            <tr>
                <td>Kode Matakuliah</td>
                <td >:</td>
                <td><input type="varchar" required="required" name="kd_mk" value="{{ $p->kd_mk }}"></td>
            </tr>
            <tr>
                <td>Nama Matakuliah</td>
                <td>:</td>
                <td><input type="text" required="required" name="nama_mk" value="{{ $p->nama_mk }}"></td>
            </tr>
           
              
            <tr>
                <td>Jumlah SKS</td>
                <td>:</td>
                <td><input type="number" required="required" name="sks" value="{{ $p->sks }}"></td>
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