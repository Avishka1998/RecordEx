<style media="screen">
			*{
				padding: 0;
				margin: 0;
				text-decoration: none;
				list-style: none;
				box-sizing: border-box;
			}

			header{
				font-family: sans-serif;
			}

			nav{
				padding-left: 20px;
				background:white;
				height: 40px;
				width: 100%;
				position: fixed;
			}

			nav ul{
				float: right;
				margin-right: 20px;
				position:sticky;
			}

			nav ul li{
				display: inline-block;
				line-height: 40px;
				margin: 0 5px;
			}

			nav ul li a{
				color:black;
				font-size: 15px;
				padding: 12px 13px;
				text-transform: uppercase;
				font-weight: bold;
			}

			nav ul li a:hover{
				background: #9c9595;
				color:white;
				transition: 0.5s;
			}

			header::after{
				content: ' ';
				display: table;
				clear: both;
			}

			a.logo{
				line-height: 40px;
			}

		</style>
		<header>
		<nav>
				<a class="logo" href="Homee.php"><img src="img/logo3.png" width="205" height="40"></a>
			<ul>
				<li><a href="Homee.php" id="homeenav">Home</a></li>
				<li><a href="Homee.php#contact">Contact</a></li>
				<li><a href="Homee.php#about">About</a></li>
				<li><a href="sign_up.php" id="signupnav">SignUp</a></li>
				<li><a href="login.php" id="loginnav">LogIn</a></li>
			</ul>
		</nav>
		</header>
