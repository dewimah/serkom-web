<div class="content-wrapper">
    <section class="content">
        <?php foreach($datapaket as $paket) { ?>

        <form action="<?php echo base_url().'CPariwisata/update'; ?>"
        method="post">

        <div class="form-grup">
        <label>Nama Paket</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $paket->id_paket ?>">
       <input type="text" name="nama" class="form-control" value="<?php echo $paket->nama_paket ?>">
       </div>

       <div class="form-grup">
        <label>Jenis Paket</label></br>
        <?php   
       $datapaket = $this->db->get('jenis_wisata');

       foreach ($datapaket->result_array() as $row)
       {
               $options[$row['kode']]=$row['jenis'];
       }
       $jenis=set_value('jenis_wisata');
       echo form_dropdown('jenis_wisata',$options,$jenis);?>
       </div>
       

        <div class="form-grup">
        <label>Harga Paket</label>
       <input type="text" name="harga" class="form-control" value="<?php echo $paket->harga_paket ?>">
        </div>
        
        <div class="form-grup">
        <label>Foto Paket</label>
       <input type="file" name="jenis" class="form-control" value="<?php echo $paket->foto_paket ?>">
        </div>

        <div class="form-grup">
        <label>Fasilitas Paket</label>
       <input type="text" name="fasilitas" class="form-control" value="<?php echo $paket->fasilitas_paket ?>">
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
        
            </br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <?php } ?>
    </section>
</div>