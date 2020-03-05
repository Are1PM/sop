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
    <li class="<?= ($_GET['go'] == 'data-jurusan') ? "active" : "" ?>">
      <a href="index.php?go=data-jurusan">
        <i class="fa fa-edit"></i> <span>Jurusan/Prodi</span>
      </a>

    </li>
    <li class="<?= ($_GET['go'] == 'form-pilih-sop') ? "active" : "" ?>">
      <a href="index.php?go=form-pilih-sop">
        <i class="fa fa-edit"></i> <span>BUKU SOP</span>
      </a>
    </li>
    <li class="<?= ($_GET['go'] == 'data-user') ? "active" : "" ?>">
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