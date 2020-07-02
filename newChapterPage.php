<!DOCTYPE html>
<html lang="en">
<title>New Chapter</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="tableStyelsheet.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Greek<br>Database</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="homepage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="eventsPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Events</a> 
    <a href="chaptersPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Chapters</a> 
    <a href="membersPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">All Members</a> 
    <a href="accountsPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Accounts</a> 
    <!-- <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a> -->
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Kent State</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>New Chapter</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>



    
<!-- <form action="newChapterCreatedPage.php" method="post">
Name: <input type="text" name="name"><br>
ID: <input type="text" name="id"><br>
Location: <input type="text" name="loc"><br>
Account Number: <input type="text" name="account_num"><br>
Balance: <input type="text" name="balance"><br>
<input type="submit">
</form> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GreekDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>

<!-- Contact -->
<div class="w3-container" id="contact" style="margin-top:75px">
    <form action="newChapterCreatedPage.php" target="_blank" method="post">
      <div class="w3-section">
        <label>Chapter Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Chapter ID</label>
        <input class="w3-input w3-border" type="text" name="id" required>
      </div>
      <div class="w3-section">
        <label>Chapter Location</label>
        <input class="w3-input w3-border" type="text" name="loc" required>
      </div>
      <div class="w3-section">
        <label>Chapter Account Number</label>
        <input class="w3-input w3-border" type="text" name="account_num" required>
      </div>
      <div class="w3-section">
        <label>Chapter Account Balance</label>
        <input class="w3-input w3-border" type="text" name="balance" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Create Chapter</button>
    </form>  
  </div>

<br/>
<button type="button"><a href="homepage.php">Home</a></button>


</body>
</html>