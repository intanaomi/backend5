<?php
	$koneksi = mysqli_connect('localhost','root','','backend');

	if(!$koneksi)
	{
		die("Koneksi dengan database gagal: ".mysql_connect_errno().mysqli_connect_error());
	}
?>