<?php
require_once('db_connect.php');

session_start();
$uname = trim($_POST['name']);
$type = trim($_POST['type']);
$password = str_replace(' ','',$_POST['pswd']);
if($type =='login'){

$qry = "SELECT uid, username FROM users WHERE username='".$uname."' AND password='".md5($password)."'";

$result=mysqli_query($conn,$qry);
$num_rows = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);
if($num_rows == 1) {

     $_SESSION['user_session'] = $row['uid'];
$_SESSION['user_name'] = $row['username'];
		echo 'true';
	}
else {
	echo 'false';
}

}else {

$qry = "SELECT uid, username FROM users WHERE username='".$uname."'";

$result=mysqli_query($conn,$qry);
$num_rows = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);
if($num_rows == 0) {
         $qryinsert = "insert into users set username='".$uname."', password='".md5($password)."'";
         mysqli_query($conn,$qryinsert);
		echo 'true';
	}
else {
	echo 'false';
}

}
mysqli_close($conn);
?>
