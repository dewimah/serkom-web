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
<h3><center>Paket Wisata Jalan Setapak</center></h3><br>
  <table class="table">
    <tr>
    <th>ID Paket </th>
        <th>Tujuan </th>
        <th>Alamat </th>
        <th>Kelas </th>
        <th>Harga </th>
        <th>Fasilitas</th>
        <th>Jumlah Pesan</th>
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
       <td><input type="number" name="quantity" id="<?php echo $data->id_paket;?>" value="1" 
       class="quantity form-control"></div></td>
        <td><button class="add_cart btn btn-success btn-block" data-id_paket="<?php echo $data->id_paket;?>" 
        data-nama_wisata="<?php echo $data->nama_wisata;?>" data-alamat_wisata="<?php echo $data->alamat_wisata;?>"  
        data-nama_kelas="<?php echo $data->nama_kelas;?>"  data-harga_kelas="<?php echo $data->harga_kelas;?>"
        data-fasilitas="<?php echo $data->fasilitas;?>">
        Add To Cart</button></td>
</tr>
<?php endforeach;?>
</table>
</section>
<!-- Button trigger modal -->
 
        </div>
        <div class="col-md-4">
            <h4>Keranjang Pesanan Anda</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tujuan</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Harga</th>
                        <th>Fasilitas</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                <tr><th>
				<?php
				echo form_open('cart/submit');
				?>
				<button class="submit_cart btn btn-success btn-block"> Submit </button>
				</form>
				</th></tr>

            </table>
        </div>
    </div>
</div>
 
<script type="text/javascript" src="<?php echo base_url().'assets/cart/js/jquery-3.6.0.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/cart/js/bootstrap.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var id_paket    = $(this).data("id_paket");
            var nama_wisata  = $(this).data("nama_wisata");
            var alamat_wisata = $(this).data("alamat_wisata");
            var nama_kelas  = $(this).data("nama_kelas");
            var harga_kelas = $(this).data("harga_kelas");
            var fasilitas = $(this).data("fasilitas");
            var quantity     = $('#' + id_paket).val();
            $.ajax({
                url : "<?php echo base_url('cart/add_to_cart');?>",
                method : "POST",
                data : {id_paket: id_paket, nama_wisata: nama_wisata, alamat_wisata: alamat_wisata, nama_kelas: nama_kelas, harga_kelas: harga_kelas, fasilitas: fasilitas,
                quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
 
        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url('cart/load_cart');?>");
 
        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>cart/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>
</body>
</html>