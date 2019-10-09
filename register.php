<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Voornaam</label>
  	  <input type="text" name="voornaam" value="<?php echo $username; ?>">
  	</div>
    <div class="input-group">
  	  <label>Achternaam</label>
  	  <input type="text" name="achternaam" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Straat</label>
  	  <input type="text" name="straat">
  	</div>
  	<div class="input-group">
  	  <label>Huisnummer</label>
  	  <input type="text" name="huisnummer">
  	</div>
  	<div class="input-group">
  	  <label>Postcode</label>
  	  <input type="text" name="postcode">
  	</div>
    <div class="input-group">
  	  <label>Woonplaats</label>
  	  <input type="text" name="woonplaats">
  	</div>
    <div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email">
  	</div>
    <div class="input-group">
  	  <label>Telefoonnummer</label>
  	  <input type="text" name="telefoonnummer">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit</button>
  	</div>
  </form>
</body>
</html>
