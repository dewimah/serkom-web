<div class="content-wrapper">
	<section class="content">
		<h4> Detail Data Mahasiswa</h4>

		<table class="table">
			<tr>
				<th> Nama </th>
				<td> <?php echo $detail-> nama ?></td>
</tr>

<tr>
				<th> Nomor induk </th>
				<td> <?php echo $detail-> nomorinduk ?></td>
</tr>
<tr>
				<th> tempat tanggal lahir </th>
				<td> <?php echo $detail-> ttl ?></td>
</tr>
<tr>
				<th> alamat </th>
				<td> <?php echo $detail-> alamat ?></td>
</tr>
<tr>
				<th> Nilai mTK </th>
				<td> <?php echo $detail-> nilaimtk ?></td>
</tr>
<tr>
				<th> Nilai B.Indo </th>
				<td> <?php echo $detail-> nilaiindo ?></td>
</tr>
<tr>
				<th> Nilai B.Ing </th>
				<td> <?php echo $detail-> nilaiing ?></td>
</tr>

<tr>
				<th> Nama Wali </th>
				<td> <?php echo $detail-> namawali ?></td>
</tr>
<tr>
<th> Foto </th>
				<td> 
					<img src="<?php echo base_url(); ?>assets/serkom/<?php echo $detail->foto ?>"
			width="90" height="110">
		</td>
</tr>
