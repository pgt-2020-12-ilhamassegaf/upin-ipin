@extends('layout.app')


@section('content')
<section class="content-header">
      <h1>
        POLTEK GT
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Coding Class</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <h3>Data</h3>
    <a href="/matakuliah/tambahmatakuliah" class="btn btn-sm btn-info btn-flat pull-left">+ Tambah matakuliah Baru</a>

    <br/>
    <br/>

    <table border = "1" class="table table-hover">
        <tr>
           
            <th>NIM</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah UTS</th>
            <th>Jumlah SKS</th>
              

            <th>Opsi</th>
        </tr>
        @foreach($matakuliah as $p)
        <tr>
            
            <td>{{ $p->nim }}</td>
            <td>{{ $p->kd_mk }}</td>
            <td>{{ $p->nama_mk }}</td>
            <td>{{ $p->sks }}</td>
            
            
            <td>
                <a href="/matakuliah/editmatakuliah/{{ $p->id }}"class="btn btn-info">Edit</a>|<a href="/matakuliah/hapusmatakuliah/{{ $p->id }}"class="btn btn-danger">Hapus</a>
            </td>
          
        </tr>
        @endforeach
    </table> 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection