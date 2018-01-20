@extends('layouts.master3')
@section('pilihan3')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
      <div class="page-header">
        <center><h1>Data Table</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>cita-cita</th>
                <th>Hobi</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1201</td>
                <td>Wenti</td>
                <td>Bandung</td>
                <td>2001-03-27</td>
                <td>Rancamanyar</td>
                <td>Polwan</td>
                <td>Basket</td>
                <td><?php
$image=glob("gambar/1.png");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>4532</td>
                <td>Rima</td>
                <td>Pangandaran</td>
                <td>2000-12-16</td>
                <td>Kota Baru</td>
                <td>pramugari</td>
                <td>Main</td>
                <td><?php
$image=glob("gambar/2.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

</body>
</html>

@endsection