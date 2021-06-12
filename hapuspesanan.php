<?php
if(isset($_GET['nama'])){
	include('koneksidata.php');
	$nama = $_GET['nama'];
	$cek = mysqli_query($koneksi,"SELECT nama FROM pesanan WHERE 
 nama='$nama'") or die(mysqli_error());
if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		
		$del = mysqli_query($koneksi,"DELETE FROM pesanan WHERE 
 nama='$nama'");
		if($del){
		echo "<script>window.location = 'daftarpesananedit.php';</script>";	
		}else{
	echo 'FAILED! ';	
		echo '<a href="daftarpesananedit.php">go back</a>';
	}
}
	
}else{
	echo '<script>window.history.back()</script>';	
}
?>