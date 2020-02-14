<div class="container-fluid">
  <div class="row">
    <div class="nav-side-menu">
      <img src="<?php echo base_url('assets/img/logo.png');?>" class="img-responsive" id="logo-header">
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

      <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
          <li>
            <a href="<?php echo base_url('home/homepage') ?>">
              <i class="fa fa-dashboard fa-lg"></i> Home
            </a>
          </li>

          <li data-toggle="collapse" data-target="#admin" class="collapsed">
            <a href="#"><i class="fa fa-globe fa-lg"></i>Admin <span class="caret"></span></a>
          </li>
          <ul class="sub-menu collapse" id="admin">
            <li><a href="<?php echo base_url('admin/add_data_admin') ?>">Input Admin</a></li>
          </ul>

          <li data-toggle="collapse" data-target="#karyawan" class="collapsed">
            <a href="#"><i class="fa fa-globe fa-lg"></i>Karyawan <span class="caret"></span></a>
          </li>
          <ul class="sub-menu collapse" id="karyawan">
            <li><a href="<?php echo base_url('karyawan/add_data_karyawan') ?>">Input Karyawan</a></li>
            <li>View Karyawan</li>
          </ul>

          <li data-toggle="collapse" data-target="#hutang" class="collapsed">
            <a href="#"><i class="fa fa-car fa-lg"></i> Hutangpiutang <span class="caret"></span></a>
          </li>
          <ul class="sub-menu collapse" id="hutang">
            <li><a href="<?php echo base_url('hutangpiutang/add_data_hutangpiutang') ?>">Input Hutangpiutang</a></li>

            <li><a href="<?php echo base_url('hutangpiutang/view_list') ?>">View Hutang</a></li>
          </ul>

          <li data-toggle="collapse" data-target="#service" class="collapsed">
            <a href="#"><i class="fa fa-globe fa-lg"></i>Barang <span class="caret"></span></a>
          </li>
          <ul class="sub-menu collapse" id="service">
            <li><a href="<?php echo base_url('barang/add_data_barang') ?>">Input Barang</a></li>
            <li><a href="<?php echo base_url('barang/view_list') ?>">View Barang</a></li>
          </ul>

          <li data-toggle="collapse" data-target="#new" class="collapsed">
            <a href="#"><i class="fa fa-car fa-lg"></i>Backup <span class="caret"></span></a>
          </li>
          <ul class="sub-menu collapse" id="new">
            <li>Backup </li>
            <li>Backup </li>
            <li>Backup </li>
            <li>Backup </li>
          </ul>






          <!-- <li>
            <a href="#">
              <i class="fa fa-user fa-lg"></i> Profile
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fa fa-users fa-lg"></i> Users
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
