<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: login_page.php");
}

include_once 'db_connect.php';

?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">

<style>
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 0% 25% 0 25%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
 <div class="container">
  <div class="row">
<div class="col-md-6"><span class="glyphicon glyphicon-user"><span></div>
<div class="col-md-6"><span class="glyphicon glyphicon-user"><span></div>
</div>
<h2>Home page</h2>
Logged In As <h3><?php echo $_SESSION['user_name']?></h3>
  <a class="btn btn-danger" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
</div>
<script src="bootstrap.min.js"></script>

</body>
</html>
