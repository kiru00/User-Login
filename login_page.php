<?php
session_start();

if(isset($_SESSION['user_session']))
{
	header("Location: home.php");
}
?>
<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

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
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript">
$(document).ready(function(){
	$("#display_err").css('display', 'none', 'important');
	 $("#login").click(function(){	
	
		  username=$("#name").val();
		  epassword=$("#pword").val();
		  $.ajax({
		   type: "POST",
		   url: "login_submit.php",
			data: "name="+username+"&pswd="+epassword+"&type=login",
		   success: function(html){    
			if(html=='true')    {
			 window.location="home.php";
			}
			else    {
			$("#display_err").css('display', 'inline', 'important');
			 $("#display_err").html("Wrong username or password");
			}
		   },
		   beforeSend:function()
		   {
			$("#display_err").css('display', 'inline', 'important');
			$("#display_err").html("<img src='btn-ajax-loader.gif' /> Loading...")
		   }
		  });
		return false;
	});
});
</script>

<body>


<form action="home.php" id="loginform">


  <div class="container">
  
<h2>Login Form</h2>
  <div id="display_err" style="color:red"></div><br/>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="name" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="pword" name="psw" required>
        
    <button type="submit" id="login">Login</button>
<div class="clearfix"><br/></div>
<span><a class="btn btn-info pull-right" href="registration_page.php">If u dont have a login,Register Here</a></span>
  </div>


</form>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
