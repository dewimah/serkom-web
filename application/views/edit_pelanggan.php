<div class="content-wrapper">
    <section class="content">
        <?php foreach($pelanggan as $paket) { ?>

        <form action="<?php echo base_url().'CPariwisata/updatePelanggan'; ?>"
        method="post">

        <div class="form-grup">
        <label>ID Pelanggan</label>
       <input type="text" name="id" class="form-control" value="<?php echo $paket->id ?>">
       </div>

        <div class="form-grup">
        <label>Email Pelanggan</label>
       <input type="text" name="email" class="form-control" value="<?php echo $paket->email?>">
        </div>
        
        <div class="form-grup">
        <label>Nama Pelanggan</label>
       <input type="text" name="nama" class="form-control" value="<?php echo $paket->nama ?>">
        </div>

        <div class="form-grup">
        <label>No Telepon</label>
       <input type="text" name="no" class="form-control" value="<?php echo $paket->no_telp ?>">
        </div>
        
            </br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <?php } ?>
    </section>
</div>