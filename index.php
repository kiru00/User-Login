<?php
session_start();

if(isset($_SESSION['user_session']))
{
	header("Location: home.php");
}else{
    header("Location: login_page.php");
}
