<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">

  <table class="table">
    <tr>
				<th>Id Siswa </th>
        <th>Nomor Induk </th>
				<th>Nama </th>
        <th>Tempat Tanggal Lahir </th>
        <th>Alamat </th>
				<th>Nilai MTK </th>
				<th>Nilai Bahasa Indonesia </th>
				<th>Nilai bahasa Inggris </th>
				<th>Nilai Akhir </th>
        <th>Nama Wali</th>
				<th>Foto</th>
				<th>Status</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
		
		
    foreach ($datasiswa as $data) :?>
    <tr>
				<td><?php echo $data->id_siswa?></td>
        <td><?php echo $data->nomorinduk?></td>
        <td><?php echo $data->nama?></td>
        <td><?php echo $data->ttl?></td>
        <td><?php echo $data->alamat?></td>
				<td><?php echo $data->nilaimtk?></td>
				<td><?php echo $data->nilaiindo?></td>
				<td><?php echo $data->nilaiing?></td>
        <td><?php echo ($data->nilaimtk + $data->nilaiindo + $data->nilaiing)/3?></td>
				<td><?php echo $data->namawali?></td>
				<td><?php echo $data->foto?></td>
				<td><?php echo $data->status?></td>
        <td onclick="javascript: return confirm('Yakin hapus Data ini?')">
        <?php echo anchor('CSiswa/hapus/'.$data->id_siswa,
        '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></td>');?>
        <td><?php echo anchor('CSiswa/edit/'.$data->id_siswa,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></td>')?>
				<td><?php echo anchor('CSiswa/detail/'.$data->id_siswa,'<div class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></td>')?> 
			</tr>
<?php endforeach;?>
</table>
</section>
<!-- Button trigger modal -->

