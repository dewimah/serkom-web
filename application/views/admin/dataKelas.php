<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Destinasi Biro Pariwisata</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Destinasi Wisata</button>
  <table class="table">
    <tr>
        <th>ID Wisata </th>
        <th>Nama Wisata </th>
        <th>Alamat Wisata </th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    foreach ($destinasi as $data) :?>
    <tr>
        <td><?php echo $data->id_wisata?></td>
        <td><?php echo $data->nama_wisata?></td>
        <td><?php echo $data->alamat_wisata?></td>
        <td onclick="javascript: return confirm('Yakin hapus Data ini?')">
        <?php echo anchor('CPariwisata/hapusDestinasi/'.$data->id_wisata,
        '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></td>');?>
        <td><?php echo anchor('CPariwisata/editDestinasi/'.$data->id_wisata,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></td>')?>
</tr>
<?php endforeach;?>
</table>
</section>
<!-- Button trigger modal -->
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Paket Wisata</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('CPariwisata/tambahDestinasi');?>
       
       
       <div class="form-grup">
       <label>ID Paket</label>
       <input type="text" name="id" class="form-control">
       </div>

       <div class="form-grup">
       <label>Nama Wisata</label></br>
       <input type="text" name="nama" class="form-control">
      </div> 

       
      <div class="form-grup">
       <label>Alamat Wisata</label></br>
       <input type="text" name="alamat" class="form-control">
      </div></br>

       <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
       <?php echo form_close();?> 
       
       
      </div>
    </div>
  </div>
</div>
</div>