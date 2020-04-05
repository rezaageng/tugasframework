<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?=$judul?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><?=$judul?></li>
            <li class="breadcrumb-item active"><a href="#"><?=$halaman?></a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?=$halaman?></h3>
          </div>
          <div class="card-body">
            <ol>
              <li>
                Download Codeigniter <a href="https://codeigniter.com/download">disini.</a> Kemudian pilih versi yang akan digunakan, disini saya menggunakan Codeigniter 3
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/ci.png" alt="Codeigniter"></<img>
              </li>
              <li>Extrack file yang sudah di download dan pindahkan ke folder htdocs dan rename sesuai keinginan anda</li>
              <li>Buka folder codeigniter menggunakan code editor, disini saya memakai visual studio code</li>
              <li>
                Download Template AdminLTE <a href="https://adminlte.io/">disini.</a> Kemudian pilih versi yang akan digunakan, disini saya menggunakan AdminLTE versi 3
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/ad.png" alt="adminLTE"></<img>
              </li>
              <li>kemudian Extract file Admin LTE nya di dalam folder asset nya codeigiter  htdocs\tugas\framework\assets.</li>
              <li>
                buka file config yang ada di folder config  htdocs\tugas\framework\application\config, setting base urlnya sesuai dengan nama project
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/conf.png"></<img>
              </li>
              <li>
                buatlah sebuah file  dengan nama Template.php di dalam libraries htdocs\tugas\framework\application\libraries, berikut ini code nya:
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/lib.png"></<img>
              </li>
              <li>
                kemudian buka lah file autoload.php yang berada di folder config  htdocs\tugas\framework\application\config, kemudian daftarkan library template yang sudah kita buat dengan cara mengisi array  libraries nya, seperti ini
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/atl.png"></<img>
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/help.png"></<img>
              </li>
              <li>
                kemudian Copy file index.html yang ada di dalam folder AdminLTE htdocs\tugas\framework\assets\AdminLTE\index.html ke folder view dan ubah namanya menjadi index.php htdocs\tugas\framework\application\views\index.php Selanjutnya buka file index.php yang sudah dipindahkan tersebut kemudian tambahkan base_url() di bawah setiap linknya
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/bas.png"></<img>
              </li>
              <li>Pisahkan Antara Header, sidebar, container, dan footer</li>
              <li>
                Buat controller lalu buat kode seperti dibawah
                <img class="rounded mx-auto d-block mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/ctrl.png"></<img>
              </li>
              <li>Hapus Layout yang tidak perlu</li>
              <li>Kemudian isikan tutorial ini pada web</li>
              <li>selesai</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

