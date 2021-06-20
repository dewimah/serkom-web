<div class="content-wrapper">
    <section class="content">
        <?php foreach($datapaket as $paket) { ?>

        <form action="<?php echo base_url().'CPariwisata/update'; ?>"
        method="post">

         
       <div class="form-grup">
       <label>ID Paket</label>
       <input type="text" name="id" class="form-control" value="<?php echo $paket->id_paket ?>">
       </div>

       <div class="form-grup">
       <label>Destinasi</label></br>
       <?php 
       $datapaket = $this->db->get('paket');

       foreach ($datapaket->result_array() as $row)
       {
               $options[$row['id_paket']]=$row['destinasi'];
       }
       $jenis=set_value($paket->destinasi);
       echo form_dropdown('destinasi',$options,$jenis);
       ?>
      </div> 

       
      <div class="form-grup">
       <label>Kelas</label></br>
       <?php 
       $data = $this->db->get('paket');

       foreach ($data->result_array() as $row)
       {
               $options[$row['id_paket']]=$row['kelas'];
       }
       $km=set_value($paket->kelas);
       echo form_dropdown('kelas',$options,$km);
       ?>
      </div></br>
        
            </br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <?php } ?>
    </section>
</div>