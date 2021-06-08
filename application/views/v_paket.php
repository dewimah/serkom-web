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
        <th>Nama Paket </th>
        <th>Jenis Paket </th>
        <th>Harga Paket </th>
        <th>Fasilitas Paket </th>
        <th>Status Paket</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    foreach ($datapaket as $data) :?>
    <tr>
        <td><?php echo $data->id_paket?></td>
        <td><?php echo $data->nama_paket?></td>
        <td><?php echo $data->jenis_paket?></td>
        <td><?php echo $data->harga_paket?></td>
        <td><?php echo $data->fasilitas_paket?></td>
        <td><?php echo $data->status_paket?></td>
        <td><?php echo anchor('CPariwisata/detail/'.$data->id_paket,'<div class="btn btn-success btn-sm">
        <i class="fa fa-search-plus"></i></div>')?></td>
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
       <label>Nama Paket</label>
       <input type="text"  name="nama" class="form-control <?php echo form_error('nama')? 'is-invalid':''?>">
       <div class="invalid-feedback">
       <?php echo form_error('nama')?>
       </div>
       </div>

       <div class="form-grup">
       <label>Jenis Paket (Foreign Key)</label></br>
       <?php   
       $datapaket = $this->db->get('jenis_wisata');

       foreach ($datapaket->result_array() as $row)
       {
               $options[$row['kode']]=$row['jenis'];
       }
       $jenis=set_value('jenis_wisata');
       echo form_dropdown('jenis_wisata',$options,$jenis);
     /*
        foreach ($datapaket->result_array() as $row)
        {
          global $options;
          $options[$row['kode']]=$row['jenis'];
        }
	      $jenis=set_value('jenis_wisata');
       echo form_dropdown('jenis_wisata',$options,$jenis);*/?>
      </div> 

       <div class="form-grup">
       <label>Harga Paket</label>
       <input type="text" name="harga" class="form-control">
       </div>

       <div class="form-grup">
       <label>Foto Paket</label>
       <input class="form-control-file" type="file" name="foto_paket" class="form-control">
       </div>

       <div class="form-grup">
       <label>Fasilitas Paket</label>
       <?php echo form_textarea(['name'=>'fasilitas','rows'=>'5','cols'=>'8','id'=>'fasilitas','class'=>'form-control']);?>
       </div>

       <div class="form-grup">
       <label>Status Paket</label>
       <?php  
       $options=array(
       'Ada'=>'Tersedia',
       'Tidak'=>'Tidak Tersedia' ,
       );
       echo form_dropdown('status',$options,'','class="form-control"');?>
      </div>    

       </div>

       <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
       <?php echo form_close();?> 
       
       
      </div>
    </div>
  </div>
</div>
</div>