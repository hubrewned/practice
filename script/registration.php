<?php
require_once('db.php');

	if(isset($_POST)) {
		$login = ($_POST['login']);
		$password = (md5($_POST['password']));
		$email = ($_POST['email']);
			if(($login!='') && ($password != '') && ($email != '')) {
				$query = ("INSERT INTO user (login, password, email) VALUES ('".$login."' ,'". $password."', '".$email."')");
				$result  = mysql_query($query) or die ('error insert');
				header("Location: ../index.php");
			}  else {
				echo "error";
			}

	}
