@extends('layout.app')


@section('content')
<section class="content-header">
      <h1>
        DATA MAHASISWA
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
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <h3>Data Mahasiswa</h3>
    <a href="/dashboard/tambah" class="btn btn-sm btn-info btn-flat pull-left">+ Tambah Mahasiswa Baru</a>

    <br/>
    <br/>

    <table border = "1" class="table table-hover">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Masuk</th>
            <th>Kelas</th>
            <th>Pembimbing</th>
            

            <th>Opsi</th>
        </tr>
        @foreach($mahasiswa as $p)
        <tr>
            <td>{{ $p->nim }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jeniskelamin }}</td>
            <td>{{ $p->tempatlahir }}</td>
            <td>{{ $p->tanggallahir }}</td>
            <td>{{ $p->tahunmasuk }}</td>
            <td>{{ $p->kelas }}</td>
            <td>{{ $p->pembimbing }}</td>
            <td>
                <a href="/dashboard/edit/{{ $p->id }}"class="btn btn-info">Edit</a>|<a href="/dashboard/hapus/{{ $p->id }}"class="btn btn-danger">Hapus</a>
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