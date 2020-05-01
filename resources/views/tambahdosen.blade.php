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
    <h3>Data Dosen</h3>
    <a href="/dosen" class="btn btn-sm btn-info btn-flat pull-left">Kembali</a>

    <br/>
    <br/>

    <form action="/dosen/store" method="post">
        {{ csrf_field() }}
        <table class="table no-margin">
            
            <tr>
                <td>Nama Dosen</td>
                <td>:</td>
                <td><input type="text" name="nama_dosen" required="required"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name = "jeniskelamindosen" required="required">
                    <option value="">-PILIH-</option>
                    <option value = "Laki-laki">Laki-laki</option>
                    <option value = "Perempuan">Perempuan</option>
                    </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="Alamat" required="required"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="Email" required="required"></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td><input type="number" name="hp" required="required"></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" svalue="Simpan Data"></td>
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