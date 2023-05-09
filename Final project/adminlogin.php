
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
 
    <title>onlinEdu</title>
    <link href="css/stlogin.css" rel="stylesheet"/>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <script>
        $(document).ready(function () {

$('.menu').click(function() {
    $('.overlay').toggleClass('anim');
    $(this).addClass('open')
});

$('.open').click(function(){
    $('.overlay').toggleClass('reverse-animation');
})
});
        </script>
</head>
<body>
    <div class="BG">
        <nav>
          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>
          <ul>
            <li><a class="active" href="index.html">Home</a></li>
            
            <li><a href="#">Register</a>
                <ul>
                    <li><a href="register.html">As Student</a></li>
                    <li><a href="tregister.html">As Teacher</a></li>
                </ul>
            </li>

            <li><a href="stlogin.html">Login</a></li>

            <li><a href="#">Classes</a>
                <ul>
                    <li><a href="#">Grade 10</a>
                        <ul>
                            <li><a href="mathteacher.html">Maths</a></li>
                            <li><a href="scienceteacher.html">Science</a></li>
                            <li><a href="englishteacher.html">English</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Grade 11</a>
                        <ul>
                            <li><a href="mathteacher.html">Maths</a></li>
                            <li><a href="scienceteacher.html">Science</a></li>
                            <li><a href="englishteacher.html">English</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Revision</a>
                        <ul>
                            <li><a href="mathteacher.html">Maths</a></li>
                            <li><a href="scienceteacher.html">Science</a></li>
                            <li><a href="englishteacher.html">English</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li><a href="aboutus.html">About</a></li>

            <li><a href="contactus.html">Contact</a></li>
          </ul>
        </nav>
    
      </div>
<div class="container" class="text-container">
    <Center>
        <img src="image/logoa.png" width="10%" height="10%">
        <hr>
</Center>
<br>
<form action="php/admin.php" method="POST">
    <div class="main">
		<div class="login">
			<center><h1 class="heading">Admin Login</h1></center>

			<div class="input">
				<label for="username">Username</label>
				<input type="text" id="username" autocomplete="false" name="email" required>
			</div>

			<div class="input">
				<label for="password">Password</label>
				<input type="password" id="password" autocomplete="false" name="password1" required>
			</div>

			<div class="divider"></div>

			
            <button class="login-btn" name="login"><h3>Log In</h3></button>


		</div>
	</div>

    
    </form>


</div>







<footer class="footer-distributed">

    <div class="footer-left">

        <h3><span>onlinEdu</span></h3>

        <p class="footer-links">
            <a href="index.html" class="link-1">Home</a>
            
            <a href="aboutus.html">About</a>
            
            <a href="contactus.html">Contact</a>

            <a href="adminlogin.php">Admin Only</a>
        </p>

        <p class="footer-company-name">onlinEdu © 2022</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Baddegama</span> Galle,Sri Lanka</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+94 677 567 234</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">onlinedu@company.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>
  
</body>
</html>
<?php
	session_start();
	session_destroy();
	header('location:index.php')
?>