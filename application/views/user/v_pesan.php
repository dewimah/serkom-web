<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pilih Paket</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<section class="content" href="CUser/struk">
  <table class="table">
    <tr>
    <th>ID Paket </th>
        <th>Tujuan </th>
        <th>Alamat </th>
        <th>Kelas </th>
        <th>Harga </th>
        <th>Fasilitas</th>
        <th>Keterangan</th>
    </tr>
    <?php
    foreach ($datapaket as $data) :?>
    <tr>
    <td><?php echo $data->id_paket?></td>
        <td><?php echo $data->nama_wisata?></td>
        <td><?php echo $data->alamat_wisata?></td>
        <td><?php echo $data->nama_kelas?></td>
        <td><?php echo $data->harga_kelas?></td>
        <td><?php echo $data->fasilitas?></td>
        <td><?php echo anchor('CUser/struk/'.$data->id_paket,'<div class="btn btn-primary">Pesan</div>')?></td>
</tr>
<?php endforeach;?>
</table>
</section>
<!-- Button trigger modal -->