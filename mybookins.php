<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
            <title>Mybookings</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="mybooking.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          </head>
    <body bgcolor="#E4E4E4">
        <form method="post" action="mtbookings.php">


    
    <div class="container">
        <img src=".\Im\User_Avatar-05-128.png">
        <h1>HOTEL SABA</h1>
        
		<?php
			 //retrieve data
							   ?>
  
        
        
        
        <?php
        //if($_SESSION["uname"])
           //if(!isset($_SESSION["uname"]))
      
        if($_SESSION["uname"] = $uname)
        {
          
               echo  $_SESSION['uname'];
          echo '<a href="logout.php">LOGout</a>';
         
        }
        else
        {
         echo '<a href="login.html">LOGIN</a>';
        }   
    
        ?>
        
        
        <br>
        <br>
        <br></div>
  
    
        
    
        <div class="navbar">
            <a href="home.php"> HOME</a>
            <a href="events.html"> EVENTS </a>
                  <a href="events.html"> BOOKROOM </a>

        <a href="gallery.html"> GALLERY</a>
     
            <a href="about.html"> ABOUT</a>
                </div><br><br>
            
            
            
            
            
            
                   <?php
session_start();
$link = mysqli_connect("localhost", "root", "", "hotel");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM bookroom where unmae='$uname'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        echo "<table>";
            echo "<tr>";
                echo "<th>username</th>";
                echo "<th>checkin</th>";
                echo "<th>checkout</th>";
                 echo "<th>rooms</th>";
                
            echo "</tr>";
              while($row = mysqli_fetch_array($result))
              {
            echo "<tr>";
                echo "<td>" . $row['uname'] . "</td>";
                echo "<td>" . $row['checkin'] . "</td>";
                echo "<td>" . $row['checkout']. "</td>";
                echo "<td>" . $row['rooms']. "</td>";
                  
              }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
      
      
                   <div class="details">
            <table  class="table3" border="0" style="top:180px;position:fixed:">
                
                <tr><td> <div class="m1"  style="background:	#282828;border-radius:6px;"><a href="mybookings.php" style="color:white">MYBOOKINGS</a></div></td></tr>
                <tr><td><div class="m1"  style="background:	#282828;border-radius:6px;"> <a href="chefs.php" style="color:white;">CHEFSINFO</a></div></td></tr>
                
                <tr><td><div class="m1"  style="background:	#282828;border-radius:6px;"><a href="viewfeeback.html" style="color:white">VIEW FEEDBACK</a></div> </td></tr>
                
                  <tr><td> <div class="m1"  style="background:#000000;border-radius:6px;">
                    
                    
                    
         <?php
         if(isset($_SESSION["uname"]))
        {
          ?>
        <a href="givefeedback.php" style="color:white">GIVEFEEDBACK</a>
        <?php
         }
        else
        {
        ?>
        <a href="login.html" style="color:white">GIVEFEEDBACK</a>
        <?php
        }
        ?>
                    
     
                       </table>
        </div>
        

  
         <div class="logos">
            <table  class="table1" border="0">
                
                <tr><td><h5 style="color:black"><center>FOLLOW</center></h5></td></tr>
                <tr><td> <a href="https://www.facebook.com/"><img src="./logos/facebook.png" ></a></td></tr>
                <tr><td><a href="https://www.instagram.com/"><img src="./logos/insta.png"></a> </td></tr>
                <tr><td> <a href="https://twitter.com/login?lang=en"><img src="./logos/twitter.png"></a></td></tr>
                <tr><td><a href="https://www.youtube.com/"><img src="./logos/youtube.png"></a> </td></tr></table>
        </div>
    
                    
                    
        <div class="footer">
            <h5> 2k18 VeeTechnology-ALLRIGHTS RESERVED....!</h5>
        </div>
        
        

        


        </form>

 </body>
 </html>
