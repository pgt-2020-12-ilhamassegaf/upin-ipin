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
    <h3>matakuliah Mahasiswa</h3>
    <a href="/matakuliah" class="btn btn-sm btn-info btn-flat pull-left">Kembali</a>

    <br/>
    <br/>

   
    <form action="/matakuliah/store" method="post">
        {{ csrf_field() }}
        <table  class="table table-hover">
        <tr>
                <td>Kode Matakuliah</td>
                <td >:</td>
                <td><input type="varchar" required="required" name="kd_mk" ></td>
            </tr>
            <tr>
                <td>Nama Matakuliah</td>
                <td>:</td>
                <td><input type="text" required="required" name="nama_mk" ></td>
            </tr>
           
              
            <tr>
                <td>Jumlah SKS</td>
                <td>:</td>
                <td><input type="number" required="required" name="sks" ></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" value="Simpan Data"></td>
            </tr>
        </table>
    </form> 

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