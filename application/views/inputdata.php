<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Input Data Siswa Baru</title>
  </head>
  <body>
 
    <!--<form  action="" enctype="multipart/form-data">
      <div class="modal-body">-->
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('CAdmin/tambah_aksi');?>
       <form method="post" action="<?php echo base_url().'CAdmin/tambah_aksi';?>">
       <h4 class="modal-title" id="exampleModalLabel">Form Input Data Mahasiswa</h4>
</br>

       <div class="form-grup">
       <label>ID Siswa</label>
       <input type="text" name="id" class="form-control">
       </div>

			 
       <div class="form-grup">
       <label>Nomor Induk</label>
       <input type="text" name="noin" class="form-control">
       </div>
			 
       <div class="form-grup">
       <label>Nama</label>
       <input type="text" name="nama" class="form-control">
       </div>
       
			 <div class="form-grup">
       <label>Tempat Tanggal Lahir</label>
       <input type="text" name="ttl" class="form-control">
       </div>

			<div class="form-grup">
       <label>Alamat</label>
       <input type="text" name="alamat" class="form-control">
       </div>

			<div class="form-grup">
       <label>Nilai Matematika</label>
       <input type="text" name="mtk" class="form-control">
       </div>
	   
			<div class="form-grup">
       <label>Nilai Bahasa Indonesia</label>
       <input type="text" name="indo" class="form-control">
       </div>
	   
			<div class="form-grup">
       <label>Nilai Bahasa Inggris</label>
       <input type="text" name="ing" class="form-control">
       </div>

			 <div class="form-grup">
       <label>Nama Wali Siswa</label>
       <input type="text" name="wali" class="form-control">
       </div>

	   <div class="form-grup">
       <label>Foto</label></br>
       <input type="file" name="foto" class="form-control">
       </div>

	   <div class="form-grup">
       <label>Status</label>
       <input type="text" name="status"value="0" class="form-control">
       </div>

       <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" value="upload" class="btn btn-primary">Simpan</button>
       <?php echo form_close();?> 
       
       </form>
      </div>
    </div>
  </div>
</div>
</div>
</html>
