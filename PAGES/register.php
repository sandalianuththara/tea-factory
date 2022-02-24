<!DOCTYPE html>

<?php

include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>
<html lang="en">

<head>
	<title>Web App Full</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
	<link rel="stylesheet" type="text/css" href="../resource/css/style.css">
	<link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
	<link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">
	<link rel="stylesheet" type="text/css" href="../vendors/css/grid/3cols.css">

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

	<style>
		html {
			background: radial-gradient(rgba(0, 0, 0, 0.86), rgba(255, 255, 255, 0.31)), url(../resource/img/mikesh-kaos-dUV3oohJzE8-unsplash.jpg);
			background-position: bottom;
			background-size: cover;
		}

		.eye ion-icon {
			position: absolute;
			right: 2%;
			bottom: 26%;

	</style>
</head>

<!-- ---------------------------------------------------------------------- -->


<!-- ---------------------------------------------------------------------- -->


<body>

	<section class="section-form">
		<div class="row">
			<h3>Create User Account</h3>
		</div>

		<div class="row">
			<form method="post" action="register.php" class="contact-form">
				<?php echo display_error(); ?>
				<div class="row">
					<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>>
						<input type="text" name="username" id="userid" placeholder="Username" value="<?php echo $username; ?>" required>
					</div>
					<?php if (isset($name_error)): ?>
					<span><?php echo $name_error; ?></span>
					<?php endif ?>
				</div>

				<div class="row">
					<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?>>
						<input type="email" name="email" id="email" placeholder="Email Address" value="<?php echo $email; ?>" required>
						<?php if (isset($email_error)): ?>
						<span><?php echo $email_error; ?></span>
						<?php endif ?>
					</div>
				</div>

				<div class="row wrppreg">
					<input type="password" name="password" id="password" placeholder="Password" required>
					<div class="eye">
						<ion-icon id="eye-pass" name="eye-sharp"></ion-icon>
					</div>

				</div>
				<div class="row">
					<input type="submit" name="register" id="submit" value="START">
				</div>
				<div class="row">
					<a href="login.php"><input type="button" name="create" id="create" value="ALREADY HAVE AN ACCOUNT"></a>
				</div>

			</form>
		</div>
	</section>

	<section class=""></section>
	<div class="empty"></div>
	<!-- ------------------------------------------------------------------------------------->
	<?php include("../PUBLICS/footer.php"); ?>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
<script>
	const togglePassword = document.querySelector('#eye-pass');
	const password = document.querySelector('#password');

	togglePassword.addEventListener('click', function(e) {

		// toggle the type attribute
		const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
		password.setAttribute('type', type);

		// toggle the eye slash icon
		if (togglePassword.name != "eye-sharp") {
			togglePassword.name = 'eye-sharp';
			togglePassword.style = "color: #555 !important;"
		} else {
			togglePassword.name = 'eye-off-sharp';
			togglePassword.style = "color: white !important;"
		}

	});

</script>

</html>