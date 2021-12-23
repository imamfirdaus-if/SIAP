<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <!--Menu Keuangan-->
      <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('home'); ?>">
          <i class="fa fa-money"></i>
          <span>Data Keuangan</span>
        </a>
        <ul>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Laporan BAZNAS</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Laporan PPH21</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Pembukuan Mesjid</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Pembukuan RTQ</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Pembukuan Asrama</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Pembangunan Mesjid</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Laporan Pemasukan</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Rekap Celengan</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'home') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('home'); ?>">
              <i class="fa fa-circle"></i>
              <span>Rekap Kalender</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'kota') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('Kota'); ?>">
              <i class="fa fa-circle"></i>
              <span>Tempat Tugas</span>
            </a>
        </ul>
      </li>

      <!--Menu Data Binaan-->
      <li <?php if ($page == 'pegawai') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-users"></i>
          <span>Data Binaan</span>
        </a>
        <ul>
          <li <?php if ($page == 'posisi') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('Posisi'); ?>">
              <i class="fa fa-circle"></i>
              <span>Data Mustahik</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'kota') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('Kota'); ?>">
              <i class="fa fa-circle"></i>
              <span>Data Mudzaki</span>
            </a>
        </ul>
      </li>

      <!--Menu Data Inventaris-->
      <li <?php if ($page == 'pegawai') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-cube"></i>
          <span>Data Inventaris</span>
        </a>
      </li>

      <!--Menu Pegawai-->
      <li <?php if ($page == 'pegawai') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-users"></i>
          <span>Data Pengurus</span>
        </a>
        <ul>
          <li <?php if ($page == 'posisi') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('Posisi'); ?>">
              <i class="fa fa-circle"></i>
              <span>Data Posisi</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'kota') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('Kota'); ?>">
              <i class="fa fa-circle"></i>
              <span>Tempat Tugas</span>
            </a>
        </ul>
      </li>

      <!--Menu Surat-->
      <li <?php if ($page == 'pegawai') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-envelope-o"></i>
          <span>Pengarsipan Surat</span>
        </a>
        <ul>
          <li <?php if ($page == 'posisi') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('Posisi'); ?>">
              <i class="fa fa-circle"></i>
              <span>Surat Masuk</span>
            </a>
          </li>
          <br>
          <li <?php if ($page == 'kota') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('Kota'); ?>">
              <i class="fa fa-circle"></i>
              <span>Surat keluar</span>
            </a>
        </ul>
      </li>

      <!--Menu Data Inventaris-->
      <li <?php if ($page == 'pegawai') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-cube"></i>
          <span>Datra Program</span>
        </a>
      </li>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>