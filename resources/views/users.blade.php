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
        <h3>Data User</h3>
    <a href="/users/tambahusers" class="btn btn-sm btn-info btn-flat pull-left">+ Tambah User Baru</a>

    <br/>
    <br/>

    <table border = "1" class="table table-hover">
        <tr>
           
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
          

            <th>Opsi</th>
        </tr>
        @foreach($users as $p)
        <tr>
            
            <td>{{ $p->name }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->password }}</td>
            
            
            <td>
                <a href="/users/editusers/{{ $p->id }}"class="btn btn-info">Edit</a>|<a href="/users/hapususers/{{ $p->id }}"class="btn btn-danger">Hapus</a>
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