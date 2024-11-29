<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
ob_start();
$system = $conn->query("SELECT * FROM system_settings LIMIT 1")->fetch_array();
foreach ($system as $k => $v) {
    $_SESSION['system'][$k] = $v;
}
ob_end_flush();
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fee Payment System with Reminder</title>
<?php include('./header.php'); ?>
<?php 
if (isset($_SESSION['login_id']))
    header("location:index.php?page=home");
?>
</head>
<style>
	body {
		width: 100%;
	    height: calc(100%);
	    position: fixed;
	    top: 0;
	    left: 0;
	}
	main#main {
		width: 100%;
		height: calc(100%);
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#login-container {
		background: white;
		padding: 2rem;
		border-radius: 8px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		width: 100%;
		max-width: 400px;
		text-align: center;
	}
</style>

<body>
<main id="main">
    <div id="login-container">
        <center><img src="kit.png" style="width:50%; margin-bottom: 1rem;"></center>
        <h4 class="text-center"><b>Fee Payment System with Call Reminder</b></h4>
        <div id="login-center" class="row justify-content-center">
            <div class="col-md-12">
                <form id="login-form">
                    <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <center><button class="btn-sm btn-block btn-wave btn-primary">Login</button></center>
                </form>
            </div>
        </div>
    </div>
</main>

<style>
body {
   background-image: url('6.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: 100% 100%;
}
</style>
</body>
<script>
    $('#login-form').submit(function(e){
        e.preventDefault()
        $('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
        if($(this).find('.alert-danger').length > 0 )
            $(this).find('.alert-danger').remove();
        $.ajax({
            url:'ajax.php?action=login',
            method:'POST',
            data:$(this).serialize(),
            error:err=>{
                console.log(err)
                $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
            },
            success:function(resp){
                if(resp == 1){
                    location.href ='index.php?page=home';
                }else{
                    $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
                    $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
                }
            }
        })
    })
</script>	
</html>
