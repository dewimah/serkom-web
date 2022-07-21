<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Admin</h1>
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
        <th>Nama </th>
		<th>Email </th>
        <th>Password </th>
		<th>Telepon </th>
        
    </tr>
    <?php
    foreach ($user as $data) :?>
    <tr>
      
        <td><?php echo $data->nama?></td>
		<td><?php echo $data->email?></td>
        <td><?php echo $data->password?></td>
		<td><?php echo $data->no_telp?></td>
      
</tr>
<?php endforeach;?>
</table>
</section>
<!-- Button trigger modal -->
 

      </div>
    </div>
  </div>
</div>
</div>
