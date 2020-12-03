<?php

require 'configdb.php';

if(ISSET($_POST['submit'])){
  $UserNAME = $_POST['UserNAME'];
  $UserPassword = $POST['UserPassword'];
  $FNAME = $_POST['FNAME'];
  $LNAME = $_POST['LNAME'];
  $LICENSE_NUMBER = $_POST['LICENSE_NUMBER'];
  $PHONE_NUMBER = $_POST['PHONE_NUMBER'];
  $EMAIL_ID = $_POST['EMAIL_ID'];
  $STREET = $_POST['STREET'];
  $CITY = $_POST['CITY'];
  $STATE_NAME = $_POST['STATE_NAME'];
  $ZIPCODE = $_POST['ZIPCODE'];



  mysqli_query($conn, "INSERT INTO `client` (UserNAME,UserPassword,FNAME,LNAME, LICENSE_NUMBER, PHONE_NUMBER, EMAIL_ID,STREET, CITY,STATE_NAME, ZIPCODE) VALUES('$UserNAME','$UserPassword','$FNAME', '$LNAME', '$LICENSE_NUMBER', '$PHONE_NUMBER','$EMAIL_ID', '$STREET', '$CITY','$STATE_NAME','$ZIPCODE')") or die(mysqli_error($conn));

          header ("Location:  home.php");



}

?>
