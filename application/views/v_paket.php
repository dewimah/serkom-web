<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Jasa Biro Pariwisata</h1>
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
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Paket Wisata Baru</button>
  <table class="table">
    <tr>
        <th>ID Paket </th>
        <th>Tujuan </th>
        <th>Alamat </th>
        <th>Kelas </th>
        <th>Harga </th>
        <th>Fasilitas</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    foreach ($datapaket as $data) :?>
    <tr>
        <td><?php echo $data->id_paket?></td>
        <td><?php echo $data->nama_wisata?></td>
        <td><?php echo $data->alamat_wisata?></td>
        <td><?php echo $data->nama_kelas?></td>
        <td><?php echo $data->harga_kelas?></td>
        <td><?php echo $data->fasilitas?></td>
        <td onclick="javascript: return confirm('Yakin hapus Data ini?')">
        <?php echo anchor('CPariwisata/hapus/'.$data->id_paket,
        '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></td>');?>
        <td><?php echo anchor('CPariwisata/edit/'.$data->id_paket,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></td>')?>
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
      <?php echo form_open_multipart('CPariwisata/tambah_aksi');?>
       <!--<form method="post" action="<?php echo base_url().'CPariwisata/tambah_aksi';?>">--->
       
       <div class="form-grup">
       <label>ID Paket</label>
       <input type="text" name="id" class="form-control">
       </div>

       <div class="form-grup">
       <label>Destinasi</label></br>
       <?php 
       $datapaket = $this->db->get('destinasi');

       foreach ($datapaket->result_array() as $row)
       {
               $options[$row['id_wisata']]=$row['nama_wisata'];
       }
       $jenis=set_value('destinasi');
       echo form_dropdown('destinasi',$options,$jenis);
       ?>
      </div> 

       
      <div class="form-grup">
       <label>Kelas</label></br>
       <?php 
       $data = $this->db->get('kelas');

       foreach ($data->result_array() as $row)
       {
               $options[$row['id_kelas']]=$row['nama_kelas'];
       }
       $km=set_value('kelas');
       echo form_dropdown('kelas',$options,$km);
       ?>
      </div></br>

       <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
       <?php echo form_close();?> 
       
       
      </div>
    </div>
  </div>
</div>
</div>