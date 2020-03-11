<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
          <div class="pull-left info">
          </div>
     </div>
     <!-- search form -->
     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
          <li class="<?= ($_GET['go'] == 'beranda') ? "active" : "" ?>">
               <a href="index.php?go=beranda">
                    <i class="fa fa-dashboard"></i> <span>Beranda</span>
               </a>
          </li>
          <li class="<?= (strpos($_GET['go'], 'jurusan')) ? "active" : "" ?>">
               <a href="index.php?go=data-jurusan">
                    <i class="fa fa-edit"></i> <span>Jurusan/Prodi</span>
               </a>
          </li>
          <li class="<?= (strpos($_GET['go'], 'sop')) ? "active" : "" ?>">
               <a href="index.php?go=form-pilih-sop">
                    <i class="fa fa-edit"></i> <span>Buku SOP</span>
               </a>
          </li>
          <?php
          if ($_SESSION['user']['id_level'] < 3) :
          ?>
          <li class="<?= (strpos($_GET['go'], 'user')) ? "active" : "" ?>">
               <a href="index.php?go=data-user">
                    <i class="fa fa-dashboard"></i> <span>Data User</span>
               </a>
          </li>
          <?php
          endif;
          ?>
          <!-- <li>
               <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Level</span>
               </a>
          </li> -->
     </ul>
</section>
<!-- /.sidebar -->