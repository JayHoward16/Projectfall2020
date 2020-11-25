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
  <a class="navbar-brand" href="#">J & M Rentals</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navb" class="navbar-collapse collapse hide">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/JayHoward16/Projectfall2020/blob/main/README.md">About us</a>
      </li>
    
    </ul>

    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fa-user"></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fa-sign-in-alt"></span> Login</a>
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
        </style>
      <div class="card">
           <a  href="rentalcar1.php">
      <img src="images/civic.jpg" id="car">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
          debitis a. Atque ipsum minus rerum consequatur, officiis doloremque
          ullam soluta ex consectetur inventore facilis nam optio sunt cum unde
          repudiandae.
        </p>
         </a>
       
    
               
      </div>
      <div class="card">
      <img src="images/civic.jpg" id="car">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
          debitis a. Atque ipsum minus rerum consequatur, officiis doloremque
          ullam soluta ex consectetur inventore facilis nam optio sunt cum unde
          repudiandae.
        </p>
          
        <input  type="submit" formaction='/rentalcar1.php' value="Rent" class="button">

      </div>
      <div class="card">
      <img src="images/civic.jpg" id="car">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
          debitis a. Atque ipsum minus rerum consequatur, officiis doloremque
          ullam soluta ex consectetur inventore facilis nam optio sunt cum unde
          repudiandae.
        </p>
          
          
        <input type="submit" formaction='/rentalcar1.php' value="Rent" class="button">
      </div>
    </div>


    <br>

     <div class="center">
      <div class="card">
      <img src="images/civic.jpg" id="car">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
          debitis a. Atque ipsum minus rerum consequatur, officiis doloremque
          ullam soluta ex consectetur inventore facilis nam optio sunt cum unde
          repudiandae.
        </p>
        <input type="submit" name="submit" value="Rent" class="button">
      </div>
      <div class="card">
      <img src="images/civic.jpg" id="car">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
          debitis a. Atque ipsum minus rerum consequatur, officiis doloremque
          ullam soluta ex consectetur inventore facilis nam optio sunt cum unde
          repudiandae.
        </p>
        <input type="submit" name="submit" value="Rent" class="button">

      </div>
      <div class="card">
      <img src="images/civic.jpg" id="car">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto,
          debitis a. Atque ipsum minus rerum consequatur, officiis doloremque
          ullam soluta ex consectetur inventore facilis nam optio sunt cum unde.
        </p>
        <input type="submit" name="submit" value="Rent" class="button">
      </div>
    </div>



</body>
</html>