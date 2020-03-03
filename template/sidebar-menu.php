<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left info">
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
    <li class=" treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Beranda</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-edit"></i> <span>Jurusan/Prodi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="index.php?go=tambah-jurusan"><i class="fa fa-circle-o"></i>Tambah Jurusan/Prodi</a></li>
        <li><a href="index.php?go=data-jurusan"><i class="fa fa-circle-o"></i>Data Jurusan</a></li>
      </ul>
    </li>
    <li class=" treeview">
      <a href="#">
        <i class="fa fa-edit"></i> <span>BUKU SOP</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="index.php?go=tambah-sop"><i class="fa fa-circle-o"></i>Tambah SOP</a></i>
        <li><a href="index.php?go=form-pilih-sop"><i class="fa fa-circle-o"></i>Data SOP</a></li>
      </ul>
    </li>
    <li>
      <a href="index.php?go=data-user">
        <i class="fa fa-dashboard"></i> <span>Data User</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Level</span>
      </a>
    </li>
  </ul>
</section>
<!-- /.sidebar -->