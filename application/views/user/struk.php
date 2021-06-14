<div class="content-wrapper">
    <section class="content">
        <form action="<?php echo base_url().'CUser/datamasuk'; ?>"
        method="post">

        <div class="form-grup">
        <label>ID Transportasi</label>
       <input type="text" name="nama" class="form-control"  value="<?php echo $paket->nama_paket ?>">
       </div>

        <div class="form-grup">
        <label>Tanggal Pemesanan</label>
       <input type="text" name="harga" class="form-control" value="<?php echo $paket->harga_paket ?>">
        </div>

        <div class="form-grup">
        <label>Jumlah Penumpang</label>
       <input type="text" name="fasilitas" class="form-control" value="<?php echo $paket->fasilitas_paket ?>">
        </div>

        <div class="form-grup">
        <label>Tanggal Berangkat</label>
       <input type="text" name="tujuan" class="form-control">
        </div>

        <div class="form-grup">
        <label>Tanggal Kembali</label>
       <input type="text" name="email" class="form-control">
        </div>

        

            </br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </section>
</div>