<?php

if(isset($_POST['tambah'])){
	
	
	include ('koneksidata.php');
	
	
	$nama		    = $_POST['nama'];	
	$makanan	    = $_POST['makanan'];	
	$minuman		= $_POST['minuman'];	
	$penutup	    = $_POST['penutup'];
	$status        	= $_POST['status'];
	
	
	$input = mysqli_query($koneksi,"insert into pesanan VALUES('$nama', '$makanan', '$minuman', '$penutup','$status')");
    
	
	//jika query input sukses
	if($input){
		
        echo "<script> alert ('Pesanan Berhasil Ditambahkan'); location = 'halamancustomer.php';</script>";
		
	}else{
		
		echo "<script> alert ('Pesanan Tidak Berhasil Ditambahkan!'); location = 'halamancustomer.php';</script>";
		
	}

}else{	
    
	echo '<script>window.history.back()</script>';

}
?>