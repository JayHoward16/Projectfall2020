<?php
include 'configdb.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>J & M Rentals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="">J & M Rentals</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navb" class="navbar-collapse collapse hide">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/JayHoward16/Projectfall2020/blob/main/README.md">About us</a>
      </li>

    </ul>

    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="registrationform.php"><span class="fas fa-user"></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginjm.php"><span class="fas fa-sign-in-alt"></span> Login</a>
      </li>
    </ul>
  </div>
</nav>



    <h1 id="title">Car Rental for Professionals</h1>




        <div class="center">
                <style>
        .button {
          border: 1px solid #010619;
          border-radius: 10px;
          padding: 10px 25px;
          background: none;
          margin: 5px 0;
        }

        #car {
          width: 70%;
        }

        @media only screen and (max-width: 1000px) {
        #car {
          width: 100%;
          }
        }

        #title {
          text-align: center;
        }

          span {
          color: #2e3131;
          font-weight: 700;
        }
        </style>
      <div class="card">
           <a  href="rentalcar1.php">
      <img src="images/civic.jpg" id="car">
        <p>
          <span>2020 Honda Civic</span>
            <p>32 mpg</p>
            <p>4 Door Hatchback</p>
            <p>Medium Size Vechicle</p>
            <span>$32 per day</span>
        </p>
         </a>

      </div>
      <div class="card">
      <a  href="rentalcar2.php">
      <img src="audi/audi.jpg" id="car">
        <p>
          <span>2020 Audi A5</span>
            <p>27 mpg</p>
            <p>4 Door Hatchback</p>
            <p>Medium Size Vechicle</p>
            <span>$60 per day</span>
        </p>

        <!-- <input type="submit" formaction='/rentalcar1.php' value="Rent" class="button"> -->

      </div>
      <div class="card">
      <a href="rentalcar3.php">
      <img src="toyota/toyota.jpg" id="car">
        <p>
          <span>2020 Toyota Camry</span>
            <p>26 mpg</p>
            <p>4 Door Sedan</p>
            <p>Medium Size Vechicle</p>
            <span>$30 per day</span>
        </p>


        <!-- <input type="submit" formaction='/rentalcar1.php' value="Rent" class="button"> -->
      </div>
    </div>


    <br>

     <div class="center">
      <div class="card">
      <a href="rentalcar4.php">
      <img src="jeep/jeep.jpg" id="car">
        <p>
          <span>2020 Jeep Sahara</span>
            <p>20 mpg</p>
            <p>Off road vechicle</p>
            <p>Large Size Vechicle</p>
            <span>$25 per day</span>
        </p>
        <!-- <input type="submit" name="submit" value="Rent" class="button"> -->
      </div>
      <div class="card">
      <a href="rentalcar5.php">
      <img src="ford/ford.jpg" id="car">
        <p>
          <span>2020 Ford Explorer</span>
            <p>24 mpg</p>
            <p>4 Door SUV</p>
            <p>Large Size Vechicle</p>
            <span>$33 per day</span>
        </p>
        <!-- <input type="submit" name="submit" value="Rent" class="button"> -->

      </div>
      <div class="card">
      <a href="rentalcar6.php">
      <img src="nissan/nissan.png" id="car">
      <br>
        <p>
          <span>2020 Nissan Maxima<span>
            <p>24 mpg</p>
            <p>4 Door Sedan</p>
            <p>Medium Size Vechicle</p>
            <span>$37 per day</span>
        </p>
        <!-- <input type="submit" name="submit" value="Rent" class="button"> -->
      </div>
    </div>



</body>
</html>
