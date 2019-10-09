<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $voornaam = mysqli_real_escape_string($db, $_POST['voornaam']);
  $achternaam = mysqli_real_escape_string($db, $_POST['achternaam']);
  $straat = mysqli_real_escape_string($db, $_POST['straat']);
  $huisnummer = mysqli_real_escape_string($db, $_POST['huisnummer']);
  $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
  $woonplaats = mysqli_real_escape_string($db, $_POST['woonplaats']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $telefoonnummer = mysqli_real_escape_string($db, $_POST['telefoonnummer']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array




  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$woonplaats = md5($woonplaats);//encrypt the password before saving in the database
    $straat = md5($straat);

  	$query = "INSERT INTO users (voornaam, achternaam, straat, huisnummer, postcode, woonplaats, email, telefoonnummer)
  			  VALUES('$voornaam', '$achternaam','$straat','$huisnummer','$postcode','$woonplaats','$email', '$telefoonnummer')";
  	mysqli_query($db, $query);

  }
}



?>
