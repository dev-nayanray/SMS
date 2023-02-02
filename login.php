 <?php include'header.php' ?>

  <?php
    if (isset($_POST['logbtn'])) {
        $un = $_POST['username'];
        $pass = $_POST['password'];

        if ('admin' === $un || 'Moksed' === $un ) {
            if ('12345' === $pass) {
                $msg = "Login Successfull";
                $_SESSION['user'] = $un;
                $_SESSION['login_status'] = true;

                setcookie("UserName", $un, time() + 20, '/');
                setcookie("status", $un, time() + 20, '/');
                // header("location:dashboard.php");
                header("refresh:1;url=admin/Pages/dashboard.php");
            } else {
                header("refresh:1;url=index.php");
            }
        } else {
            header("refresh:1;url=reg.php");

        }
    }
    ?>


 <?php
        if (!empty($msg)) {
            printf('<span style="color:green;">%1s</span>',$msg);
        }

        if (!empty($err)) {
            printf('<span style="color:red;">%1s</span>',$err);
        }
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rokto Bondhon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
	<!-- <div class="hero">
	 
			 Call Now:<a>+8801981308611 
			  <a href="#">thisisnayanray@gmail.com</a>
			 
		 
	</div> -->
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="asset/logo.png"></a>
		</div>
		<div class="menu">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="#">Affiliate organization</a>
				</li>
				<li>
					<a href="#">Blog</a>
				</li>
				<li>
					<a href="reg.php">Registration</a>
				</li>
				<li>
					<a href="login.php">Log In</a>
				</li>
			</ul>
		</div>
	</div>

 <div class="reg">
			  <h1>
			  	Log In 
			  </h1>

			<div class="rrig">
			<center>
					<form action="" method="post">
				<table>
					<tr>
						<td>E-mail:</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button name="logbtn">Log In</button>
						</td>
					</tr>
					<tr>
						<td colspan="2">Not A DONOR.?	<a href="#">Click here</a> to REGISTER.
 	 
</td>
					</tr>
				</table>
			</form> 
			</center>
			</div>
		 </div>  
 

	 <div class="footer">
		<div class="fl">
			  ©2023 Rakta Bandhu|| All Right reserved 
		</div>
		 <div class="fr">
		 	  Developed By :<a href="https://nayanray.com/">Nayan Ray</a> 
		 </div>
	</div>
</body>
</html>