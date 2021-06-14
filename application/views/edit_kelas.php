<div class="content-wrapper">
    <section class="content">
        <?php foreach($kelas as $paket) { ?>

        <form action="<?php echo base_url().'CPariwisata/updateKelas'; ?>"
        method="post">

        <div class="form-grup">
        <label>ID Kelas</label>
       <input type="text" name="id" class="form-control" value="<?php echo $paket->id_kelas ?>">
       </div>

        <div class="form-grup">
        <label>Nama Kelas</label>
       <input type="text" name="nama" class="form-control" value="<?php echo $paket->nama_kelas?>">
        </div>
        
        <div class="form-grup">
        <label>Harga Kelas</label>
       <input type="text" name="harga" class="form-control" value="<?php echo $paket->harga_kelas ?>">
        </div>

        <div class="form-grup">
        <label>Fasilitas</label>
       <input type="text" name="fasilitas" class="form-control" value="<?php echo $paket->fasilitas ?>">
        </div>
        
            </br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <?php } ?>
    </section>
</div>