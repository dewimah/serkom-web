<div class="content-wrapper">
    <section class="content">
        <?php foreach($datasiswa as $siswa) { ?>

        <form action="<?php echo base_url().'CSiswa/update'; ?>"
        method="post">

		<div class="form-grup">
        <label>id Siswa</label>
       <input type="text" name="id" class="form-control" value="<?php echo $siswa->id_siswa ?>">
       </div>

        <div class="form-grup">
        <label>Nomor induk</label>
       <input type="text" name="noin" class="form-control" value="<?php echo $siswa->nomorinduk ?>">
       </div>

        <div class="form-grup">
        <label>Nama</label>
       <input type="text" name="nama" class="form-control" value="<?php echo $siswa->nama?>">
        </div>
        
        <div class="form-grup">
        <label>Tempat Tanggal Lahir</label>
       <input type="text" name="ttl" class="form-control" value="<?php echo $siswa->ttl ?>">
        </div>

        <div class="form-grup">
        <label>Alamat</label>
       <input type="text" name="alamat" class="form-control" value="<?php echo $siswa->alamat ?>">
        </div>

		<div class="form-grup">
        <label>nilai MTK</label>
       <input type="text" name="mtk" class="form-control" value="<?php echo $siswa->nilaimtk ?>">
        </div>

		<div class="form-grup">
        <label>nilai Indo</label>
       <input type="text" name="indo" class="form-control" value="<?php echo $siswa->nilaiindo ?>">
        </div>

		<div class="form-grup">
        <label>nilai inggris</label>
       <input type="text" name="ing" class="form-control" value="<?php echo $siswa->nilaiing ?>">
        </div>

		<div class="form-grup">
        <label>nama Wali</label>
       <input type="text" name="wali" class="form-control" value="<?php echo $siswa->namawali ?>">
        </div>

		<div class="form-grup">
       <label>Foto</label></br>
       <input type="file" name="foto" class="form-control" value="<?php echo $siswa->foto ?>">
       </div>

		<div class="form-grup">
        <label>Status</label>
       <input type="text" name="status" class="form-control" value="<?php echo $siswa->status ?>">
        </div>
        
            </br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <?php } ?>
    </section>
</div>
