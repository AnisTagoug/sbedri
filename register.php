<?php
require('resources/dbconnect.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="resources/styles.css">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function Validate() {
      var password = document.getElementById("psw").value;
      var confirmPassword = document.getElementById("psw-repeat").value;
      if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
      }
      return true;
    }
  </script>
  <style>
    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #4CAF50;
      color: white;
      opacity: 0.9;
    }
  </style>
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="about-section">
    <h1>Sign Up</h1>
  </div>
  <form action="resources/registerproc.php" method='POST'>
    <div class="container">
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label><br />
      <input type="text" placeholder="Enter Your Username" name="username" required><br />

      <label for="email"><b>Email</b></label><br />
      <input type="email" placeholder="Enter Email" name="email" required><br />

      <label for="psw"><b>Password</b></label><br />
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br />

      <label for="psw-repeat"><b>Repeat Password</b></label><br />
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br />
      <span id='message'></span>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="window.location.href='index.php'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" id="submit" class="signupbtn" onclick="return Validate()">Sign Up</button>
      </div>
    </div>
  </form>
</body>

</html>