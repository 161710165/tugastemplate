@extends('layouts.master6')
@section('pilihan6')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Persahabatan. <span class="text-muted">.</span></h2>
          <p class="lead">Sahabat selalu menghiburmu disaat kau sedih,walaupun dengan cara yang bodoh ,untuk hanya melihat kau tertawa</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/1.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"> <span class="text-muted"></span></h2>
          <p class="lead">Janganlah bersedih,waktu mengambil seorang sahabat,dan waktu akan menggantikannya dengan sahabat yang lain.Berdamailah dengan waktu,karena waktu akan membutuhkan dan menyembuhkanya.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/17.jpg");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> <span class="text-muted"> </span></h2>
          <p class="lead">Sahabat yang baik adalah orang yang sangat kita percayai dan membuat kita tenang bersamanya.Dia menjadi tempat berbagi kelelahan,berbagi kesedihan dan tidak pernah menjual rahasia dari kita.
.</p>
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/18.jpg");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection