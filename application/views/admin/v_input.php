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
       <form method="post" action="<?php echo base_url().'CPariwisata/tambah_aksi';?>" enctype='multipart/form-data'>
       <div class="form-grup">
       <label>ID Paket</label>
       <input type="text" name="id" class="form-control">
       </div>

       <div class="form-grup">
       <label>Nama Paket</label>
       <input type="text" name="nama" class="form-control">
       </div>

       <div class="form-grup">
       <label>Jenis Paket</label>
       <input type="text" name="jenis" class="form-control">
       <?php   /*
       $datapaket = $this->db->get('paket_wisata');

       foreach ($datapaket->result_array() as $row)
       {
               $options[$row['kode']]=$row['jenis'];
       }
       $jenis=set_value('jenis_wisata');
       echo form_dropdown('jenis_wisata',$options,$jenis);
     
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
       <input type="file" name="file" class="form-control">
       </div>

       <div class="form-grup">
       <label>Fasilitas Paket</label>
       <?php echo form_textarea(['name'=>'fasilitas','rows'=>'10','cols'=>'20','id'=>'fasilitas','class'=>'form-control']);?>
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
        <button type="submit" class="btn btn-primary" name="upload">Simpan</button>
       </form>
      </div>
    </div>
  </div>
</div>
</div>