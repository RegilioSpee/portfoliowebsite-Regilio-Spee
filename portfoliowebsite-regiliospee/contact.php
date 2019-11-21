<?php
require 'navbar-footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio | Contact</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
<header>
<div class="logo"><a href="index.php">D://Regilio_Spee</a></div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="projecten.php">Projecten</a></li>
          <li><a href="overmij.php">Over mij</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
    </header>
    <br>
    <div class="contact-title">
      <h1>Regilio Spee</h1>
      <h2>Neem contact met mij op</h2>
</div>
<div class="contact-form">
  <form id="contact-form" method="post" action="contact-form-handler.php">
    <input name="name" type="text" class="form-control" placeholder="Jouw naam..." required>
    <br>
    <input name="email" type="email" class="form-control" placeholder="Jouw email..." required>
    <br>
    <textarea name="message" class="form-control" placeholder="Bericht" row="4" required></textarea>
    <br>
    <input type="submit" class="form-control submit" value="Verstuur bericht">
</form>
</div>
</body>
</html>