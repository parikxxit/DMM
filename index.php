<!DOCTYPE HTML>
<html>
	<head>
		<title>Youth Foundation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--BOOTSTRAP
		<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-heartbeat"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1><strong>Innovation Group</strong></h1>
								<p>Project DMM</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="about-us.php">Explore Digital NITB/MANIT</a></li>
								</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Login Signup -->
							<article id="intro">
								<h2 class="major">Patients Signup/Login</h2>
									<iframe src="../regisration_form/register.php" width="500px" height="600px"></iframe>

							</article>

						<!-- BMI -->
							<article id="BMI">
								<h2 class="major">Calculate your BMI</h2>
								<div align="center">
								<form method="post" action="bmi.php">
								<p>
								<label>Enter you height(in meters):
								<input name="height" type="text" size="10" maxlength="10" />
								</label><br />



								<br />

								<label>Weight (Kilograms):
								<input name="weight" type="text" size="10" maxlength="10" />
								</label><br />
								<br />
								</p>


								<p>
								<input type="submit" name="Submit" value="Calculate BMI" />
								</p>


								<p>
								<input type="submit" name="Submit" value="calculate your BMI" />
								</p>


								</form>
								</div>
							</article>

						<!-- Find hospital  -->
							<article id="about">
								<h2 class="major">Find a Docter</h2>
									<div id="getdoc">
											<input type="button" onclick="LoadMe();" value="Jalandhar" class="special" />
									</div>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; YF Tech.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		<!--Ajaxing the map-->
			<script src="assets/js/ajaxmap.js"></script>
</body>
</html>
