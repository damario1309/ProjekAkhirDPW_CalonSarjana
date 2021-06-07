<?php

	include_once("function/koneksi.php");
	include_once("function/helper.php");
	
	$level = "pengunjung";
	$status = "on";
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$tanggal = $_POST['tanggal'];
	$kelamin = $_POST['kelamin'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];
	
	unset($_POST['password']);
	unset($_POST['re_password']);
	$dataForm = http_build_query($_POST);
	
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
	
	if(empty($nama_lengkap) || empty($email) || empty($alamat) || empty($password)){
		header("location: ".base_url."?page=register&notif=require&$dataForm");
	}elseif($password != $re_password){
		header("location: ".base_url."?page=register&notif=password&$dataForm");
	}elseif(mysqli_num_rows($query) == 1){
		header("location: ".base_url."?page=register&notif=email&$dataForm");
	}
	else{
		$password = md5($password);
		mysqli_query($koneksi, "INSERT INTO user (level, nama, email, alamat, tanggal, kelamin, password, status)
										VALUES ('$level', '$nama_lengkap', '$email', '$alamat', '$tanggal', '$kelamin', '$password', '$status')");												

		header("location: ".base_url."?page=login");
	}