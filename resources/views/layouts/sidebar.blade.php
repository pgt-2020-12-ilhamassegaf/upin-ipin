<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('adminlte/dist/img/user2-160x160 (2).jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="dashboard"><i class="fa fa-circle-o"></i> Data Mahasiswa</a></li>
            <li><a href="/dosen"><i class="fa fa-circle-o"></i> Data Dosen</a></li>
            <li><a href="/nilai"><i class="fa fa-circle-o"></i> Nilai Mahasiswa</a></li>
            <li><a href="/matakuliah"><i class="fa fa-circle-o"></i> Data Matakuliah</a></li>
            <li><a href="/users"><i class="fa fa-circle-o"></i> Data User</a></li>

          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
