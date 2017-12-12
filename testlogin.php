<?php
	include("koneksi.php");
class testlogin
{
	public function login(){

	$user = "admin";
	$pass = "admin";
	$query=mysql_query("SELECT * FROM user_man WHERE username='$user' AND password='$pass'");
	$num=mysql_num_rows($query);
	$r=mysql_fetch_array($query);
	
	if($num >= 1){
		$result = "berhasil";
	}else{
		$result = "gagal";
	}
	return $result;
}
}
?>