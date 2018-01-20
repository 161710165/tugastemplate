@extends('layouts.master2')
@section('pilihan2')
<!DOCTYPE html>
<html>
<head>
	<title>Foto</title>
</head>

<body>
<center><h2>DORAEMON</h2>
<?php
$image=glob("gambar/3.jpg");
$gg=glob("gambar/1.png");
$ww=glob("gambar/2.png");
$aa=glob("gambar/4.png");
$zz=glob("gambar/5.png");
$app=glob("gambar/6.jpg");
for($i=0;$i<count($image);$i++)
for($i=0;$i<count($gg);$i++)
for($i=0;$i<count($zz);$i++)	
for($i=0;$i<count($app);$i++)	

{
	$single_image = $image[$i];
	$double = $gg[$i];
	$three = $ww[$i];
	$four = $aa[$i];
	$five = $zz[$i];
	$six = $app[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<img src="<?php echo $three;?>" width="360" heigth="260"/?>
	<img src="<?php echo $four;?>" width="360" heigth="260"/?>
	<img src="<?php echo $five;?>" width="360" heigth="260"/?>
	<img src="<?php echo $six;?>" width="360" heigth="260"/?>
	<?php
}
	?>
</center>
</body>
</html>
@endsection