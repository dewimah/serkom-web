<div class="content-wrapper">
<section class="content">
<h4><strong>DETAIL DATA</strong></h4>

<table class="table">
        <tr>
        <th>ID Paket </th>
        <td><?php echo $detail->id_paket?></td>
        </tr>
        <tr>
        <th>Nama Paket </th>
        <td><?php echo $detail->nama_paket?></td>
        </tr>
        <tr>
        <th>Jenis Paket </th>
        <td><?php echo $detail->jenis_paket?></td>
        </tr>
        <tr>
        <th>Harga Paket </th>
        <td><?php echo $detail->harga_paket?></td>
        </tr>
        <tr>
        <th>Foto Paket </th>
        <td>
        <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto_paket;?>" width="90" height="110">
        </td>
        </tr>
        <tr>
        <th>Fasilitas Paket </th>
        <td><?php echo $detail->fasilitas_paket?></td>
        </tr>
        <tr>
        <th>Status Paket </th>
        <td><?php echo $detail->status_paket?></td>
        </tr>
</table>
</div>