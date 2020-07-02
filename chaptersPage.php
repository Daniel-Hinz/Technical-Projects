<!DOCTYPE html>
<html lang="en">
<title>Greek Database</title>
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

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Greek Database</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Kent State</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Greek Life Chapters.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <button type="button"><a href="newChapterPage.php">Create A New Chapter</a></button>
  </div>
  
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
    //echo "Connected successfully";
    
    $sql = "SELECT chapter_name, chapter_location FROM Chapter ORDER BY chapter_name ASC";

    
        
    //$newresult = $conn->query($sql);
    $testResult = mysqli_query($conn, $sql);
    ?>

<table style="background-color: #FAA77E ;">
            <tr>
                <th>Chapter</th>
                <th>Location</th>
            </tr>

            <?php while ($row1 = mysqli_fetch_array($testResult)):;?>
            <tr>
                    <td><?php echo $row1[0];?></td>
                    <td><?php echo $row1[1];?></td>
                   
            </tr>
            <?php endwhile;?>

        </table>

  



  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want to join Greek Life? Fill out the form to receive updates and news. We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>


<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>

