<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pemesanan Biro Pariwisata</h1>
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
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Pesanan</button>
  <table class="table">
    <tr>
        <th>ID Pemesanan </th>
        <th>ID Transportasi </th>
        <th>Tanggal Pesan </th>
        <th>Jumlah Penumpang </th>
        <th>Tanggal Berangkat </th>
        <th>Tanggal Kembali </th>
        <th>Total Biaya </th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    foreach ($pesan as $data) :?>
    <tr>
        <td><?php echo $data->id_pemesanan?></td>
        <td><?php echo $data->id_transportasi?></td>
        <td><?php echo $data->tanggal_pemesanan?></td>
        <td><?php echo $data->jml_penumpang?></td>
        <td><?php echo $data->tgl_berangkat?></td>
        <td><?php echo $data->tgl_kembali?></td>
        <td><?php echo $data->total_biaya?></td>
        <td onclick="javascript: return confirm('Yakin hapus Data ini?')">
        <?php echo anchor('CPariwisata/hapuspesan/'.$data->id_pemesanan,
        '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></td>');?>
        <td><?php echo anchor('CPariwisata/editpesan/'.$data->id_pemesanan,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></td>')?>
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
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Pemesanan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('CPariwisata/tambahPemesanan');?>
       
       
       <div class="form-grup">
       <label>ID Pemesanan</label>
       <input type="text" name="id_pemesanan" class="form-control">
       </div>

       <div class="form-grup">
       <label>ID Transportasi</label>
       <input type="text" name="id_transportasi" class="form-control">
       </div>

       <div class="form-grup">
       <label>Tanggal Pesan</label></br>
       <input type="text" name="tgl_pesanan" class="form-control">
      </div> 

       
      <div class="form-grup">
       <label>Jumlah Penumpang</label></br>
       <input type="text" name="jml_penumpang" class="form-control">
      </div></br>

      <div class="form-grup">
       <label>Tanggal Berangkat</label></br>
       <input type="text" name="tgl_berangkat" class="form-control">
      </div></br>

      <div class="form-grup">
       <label>Tanggal Kembali</label></br>
       <input type="text" name="tgl_kembali" class="form-control">
      </div></br>

      <div class="form-grup">
       <label>Total Biaya</label></br>
       <input type="text" name="total_biaya" class="form-control">
      </div></br>
       <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
       <?php echo form_close();?> 
       
       
      </div>
    </div>
  </div>
</div>
</div>