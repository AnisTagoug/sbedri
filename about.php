<?php
require('resources/dbconnect.php');
$about_active = "active";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="register.css"> -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resources/styles.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 25%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            opacity: 0.9;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="about-section">
        <h1>About Us</h1>
    </div>
    <h2 style="text-align:center">Our Team</h2>
    <div class="row" style="text-align:center">
        <div class="column">
            <div class="card">
                <img src="img/team1.jpg" alt="Iheb" style="width:100%">
                <div class="container">
                    <h2>Iheb Barrah</h2>
                    <p class="title">HTML and Design</p>
                    <p>Iheb.barrah@gmail.com</p>
                    <p><a class="button" href="mailto:Iheb.barrah@gmail.com">Contact</a></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/team2.jpg" alt="Anis" style="width:100%">
                <div class="container">
                    <h2>Anis Tagoug</h2>
                    <p class="title">Database</p>
                    <p>AnisTagoug@gmail.com</p>
                    <p><a class="button" href="mailto:#">Contact</a></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/team3.jpg" alt="Islem" style="width:100%">
                <div class="container">
                    <h2>Islem Gharbi</h2>
                    <p class="title">Art</p>
                    <p>#</p>
                    <p><a class="button" href="mailto:#">Contact</a></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/team4.jpg" alt="Aziz" style="width:100%">
                <div class="container">
                    <h2>Mohamed Aziz Cherif</h2>
                    <p class="title">Presentation</p>
                    <p>#</p>
                    <p><a class="button" href="mailto:#">Contact</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="about-section">
        <p style="font-size: 20px; font-family:Arial, Helvetica, sans-serif;"><img src="img/p.png" alt="" width="150" height="50"></p>
    </footer>
</body>

</html>