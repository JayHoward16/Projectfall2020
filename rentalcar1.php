<?php
	
require 'configdb.php';
 

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <h1>J & M Rentals</h1>
    <p>Hello there!!</p>

    <div class="car">
    <img width="940" height="427" src="images/civic.jpg">
    
    <input type="submit" name="Rent1" value="Rent Me" class="button">
    </div>
<div class="container-fluid text-center bg-grey">
   <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
          <img src="images/sideview.jpg" alt="Lights">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
      </div>
    <div class="col-sm-4">
      <div class="thumbnail">
          <img src="images/rearpic.jpg" alt="Nature" >
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
          <img src="images/interiorfront.jpg" alt="Fjords">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        
    </div>
  </div>

     <div class="primary-content">
      <section class="form-section">
        <form action="" class="reservation-form">
          <h1>Reservation Form</h1>

          <h3>Rental Informations</h3>
          <div class="reservation-infos ">
            <label for="">Pick Up Date</label>
            <input type="date" name="pick-date" id="pick-date">
          </div>

          <div class="reservation-infos">
            <label for="">Return date</label>
            <input type="date" name="return-date" id="return-date">
          </div>

    


          <h3>Driver's Informations</h3>
          <div class="driver-infos">
            <div class="reservation-infos">
              <label for="">First Name</label>
              <input type="text" name="first-name" id="first-name">
            </div>
            <div class="reservation-infos">
              <label for="">Last Name</label>
              <input type="text" name="last-name" id="last-name">
            </div>
            <div class="reservation-infos">
              <label for="">Address</label>
              <input type="text" name="address" id="address">
            </div>
            <div class="reservation-infos">
              <label for="">Country</label>
              <input type="text" name="country" id="country">
            </div>
            <div class="reservation-infos">
              <label for="">City</label>
              <input type="text" name="city" id="city">
            </div>
            <div class="reservation-infos">
              <label for="">Phone</label>
              <input type="tel" name="phone" id="phone">
            </div>
            <div class="reservation-infos">
              <label for="">Email</label>
              <input type="email" name="email" id="email">
            </div>
        
            <div class="reservation-infos">
              <button>Rent</button>
            </div>
          </div>



</body>
</html>