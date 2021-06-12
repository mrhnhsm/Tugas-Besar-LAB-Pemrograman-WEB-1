<?php

if(isset($_POST['simpan']))
{
    include('koneksidata.php');
    $nama		    = $_POST['nama'];	
	$makanan	    = $_POST['makanan'];	
	$minuman		= $_POST['minuman'];	
	$penutup	    = $_POST['penutup'];
	$status      	= $_POST['status'];
    $update         =mysqli_query($koneksi, "update pesanan set
    makanan =   '$makanan',
    minuman =   '$minuman',
    penutup    =   '$penutup',
    status   =   '$status'
    where nama =   '$nama'")or die(mysqli_error($koneksi));
    
    if($update)
    {
        echo "<h2>data berhasil di update</h2>";
        echo "<script>window.location = 'daftarpesananedit.php'</script>";
    }
    
    else
    {
        echo "<h2>gagal menyimpan data</h2>";
        echo "<a href ='editpesanan.php ?nama =" .$nama."'>kembali</a>";
    }
}

else{
    echo "<script>window.history.back()</script>";
}
?>