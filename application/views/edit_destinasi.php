<div class="content-wrapper">
    <section class="content">
        <?php foreach($destinasi as $paket) { ?>

        <form action="<?php echo base_url().'CPariwisata/updateDestinasi'; ?>"
        method="post">

        <div class="form-grup">
        <label>ID Wisata</label>
       <input type="text" name="id" class="form-control" value="<?php echo $paket->id_wisata ?>">
       </div>

        <div class="form-grup">
        <label>Nama Wisata</label>
       <input type="text" name="nama" class="form-control" value="<?php echo $paket->nama_wisata?>">
        </div>
        
        <div class="form-grup">
        <label>Alamat Wisata</label>
       <input type="text" name="alamat" class="form-control" value="<?php echo $paket->alamat_wisata ?>">
        </div>
        
            </br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <?php } ?>
    </section>
</div>