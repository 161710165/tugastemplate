@extends('layouts.master')
@section('pilihan1')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<?php
$image=glob("gambar/3.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
<?php
}
	?>
	</center>

<center><h1>Assalamualaikum</h1></center>
<center><h1>Selamat Datang Di Web DORAEMON</h1></center>
</body>
</html>
@endsection