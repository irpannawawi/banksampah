<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bank Sampah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('admin'); ?>">Home |<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('tambah_nasabah'); ?>">Tambah Nasabah |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('input_sampah'); ?>">Input Sampah |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('tarik_tunai'); ?>">Tarik Tunai |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link belum-siap" href="#">Statistik |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('nasabah'); ?>">Nasabah |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('ganti_harga'); ?>">Ganti Harga |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('transfer'); ?>">Transfer |</a>
      </li>
    </ul> 
    <a class="btn btn-danger my-2 my-sm-0 " href="<?php echo site_url('admin/logout'); ?>">Logout</a>
    
  </div>
</nav>

  <script type="text/javascript">
    $('.belum-siap').click(function(){
      alert('fitur belum siap');
    });
  </script>