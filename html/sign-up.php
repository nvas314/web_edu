<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
  
	<script src="../assets/js/color-modes.js"></script>
	<link rel="icon" href="ico.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Sign up</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/auth.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
    <style>
        body {
            background-image: url('img/blue2.jpg');
            background-position: center;
        }
		a {
            color: #2596be;
            text-decoration: none;
        }
        a:hover {
            color: #78ad99; 
            text-decoration: underline;
        }
        a:visited {
            color: #2596be;
        }
    </style>
  </head>
<body>
<main>
  <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" style="height:575px;">
			<div class="card-header">
				<h3>Δημιουργία νέου λογαριασμού</h3>
			</div>
			<div class="card-body">
				<form action="control.php" method="post" name="register_form" onsubmit="return elegxos_null()">
				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="firstname" class="form-control" placeholder="Όνομα">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="lastname" class="form-control" placeholder="Επώνυμο">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" minlength="8" id="password" name="password" class="form-control" placeholder="Κωδικός Πρόσβασης">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" minlength="8" id="password2" name="password2" class="form-control" placeholder="Επιβεβαίωση Κωδικού">
					</div>
					<div class="row align-items-center show">
						<input type="checkbox" onclick="emfanish_kwdikou()">&nbsp;Εμφάνιση Κωδικού
					</div>
					<div class="form-group">
						<input type="submit" value="Εγγραφή" class="btn float-right login_btn">
					</div>
					<input type="hidden" name="form_name" value="register_form">
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Έχετε ήδη λογαριασμό;<a href="sign-in.php">Σύνδεση</a>
				</div>
			</div>
			<?php if (isset($_GET['msg2'])): ?>
				<p class="text-middle" style="text-align: center; font: size 20px; background: pink; border: 2px solid maroon; border-radius: 20px; color: #000; padding:1em">Username already exists! Use another username to create your account.</p>
			<?php endif; ?>
			<br>
			<a href="index.php" class="btn btn-outline-secondary" role="button" aria-pressed="true">Επιστροφή στην αρχική</a>
		</div>
	</div>
</div>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script >
	function emfanish_kwdikou() //show password
        {
			var x = document.getElementById("password");
			var y = document.getElementById("password2");
            if (x.type === "password" || y.type === "password2")
                {
                    x.type = "text";
					y.type = "text";
                }
                else
                {
                    x.type = "password";
					y.type = "password";
					
                }
        }
		
		function elegxos_null() {
			var fields = ["firstname", "lastname", "email", "password", "password2"];
			var fieldNames = {
				"firstname": "Όνομα",
				"lastname": "Επώνυμο",
				"email": "Email",
				"password": "Κωδικός",
				"password2": "Επιβεβαίωση Κωδικού"
			};

			for (var i = 0; i < fields.length; i++) {
				var field = fields[i];
				var value = document.forms["register_form"][field].value;
				if (value == "") {
					alert("Το πεδίο " + fieldNames[field] + " δεν μπορεί να είναι κενό.");
					return false;
				}
			}
			if (document.forms["register_form"]["password"].value != document.forms["register_form"]["password2"].value) 
			{
				alert("Ο κωδικός και η επιβεβαίωση κωδικού δεν ταιριάζουν.");
				return false;
			}

			return true;
		}

</script>
</body>
</html>
