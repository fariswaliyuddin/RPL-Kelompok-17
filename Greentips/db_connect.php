<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "database_user";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	function register($username,$password,$email)
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_user values ('','$username','$password','$email')");
		return $insert;
	}

	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('email', $data_user['email'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $data_user['email'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $data_user['email'];
		$_SESSION['is_login'] = TRUE;
	}
} 


?>