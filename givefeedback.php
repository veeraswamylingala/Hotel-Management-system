
<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
            <title>events</title>
<link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}
.rating table.rate
{
    margin-left: 400px;
}



/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
           .rating input[type="submit"]
{
	padding: 8px 15px;
    background: #000000;
    color: #ffff;
    border: 20px;;
    margin-top: 20px;
    margin-bottom: 0px;
    text-decoration: none;
    font-size: 16px;
    cursor: poniter;
    margin-bottom:px;
     font-family: "Times New Roman", Times, serif;

}

           </style>
          </head>
    
<body>    



        <div class="navbar" style="height:90px;margin-top:0px;background:#000000;margin-left:0px;">
        <img src=".\Im\User_Avatar-05-128.png" style="margin-left:-1100px;  height:80px;
    width:80px;">
        <h1 style=" color: bisque;
    margin-top: -60px;margin-left:-750px;" >HOTEL SABA</h1>
            <div class="right" style="margin-top:-45px;margin-left:760px;">
               
            <a href="home.php"> HOME &ensp;</a>
            <a href="events.php"> EVENTS &nbsp;&nbsp;</a>
          
            <?php
            if(isset($_SESSION["uname"]))
        { 
            ?>
    
            <a href="bookroom.php">BOOKROOM &nbsp;&nbsp;</a>
            <?php
            }
        else
        {   
            ?>
              <a href="login.html">BOOKROOM &nbsp;&nbsp;</a>
        <?php
        }   
    
        ?>
                  

        <a href="gallery.php"> GALLERY&nbsp; &nbsp;</a>
     
            <a href="about.php"> ABOUT &nbsp;&nbsp;</a>
    
        
        
        
        <?php
    
       $uname=isset($_POST['uname']); 
        //if($_SESSION["uname"] = $uname)
            if(isset($_SESSION["uname"]))
        { 
        
         echo '<a href="logout.php"><input type="button" value="LOGOUT" style="color:white;padding: 6px 15px;
    background:#000000;margin-top:-8px;"></a>'; 
        }
        else
        {
         echo '<a href="login.html"><input type="button" value="LOGIN" style="color:white;padding: 6px 15px;
    background:#000000;margin-top:-8px;"></a>';
        }   
    
        ?>
    
         
                </div>
        </div><br><br>
    

           

         
   
		
        
	
    
                  <div class="details">
            <table  class="table3" border="0" style="top:0px;position:fixed;margin-top:200px;">
             
                <tr><td> <div class="m1"  style="background:#000000;border-radius:6px;">
                       
         <?php
         if(isset($_SESSION["uname"]))
        {
          ?>
        <a href="mybookings.php" style="color:white">MYBOOKINGS</a>
        <?php
         }
        else
        {
        ?>
        <a href="login.html" style="color:white">MYBOOKINGS</a>
        <?php
        }
        ?>
                         </div></td></tr>
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"> <a href="chefs.php" style="color:white;">CHEFSINFO</a></div></td></tr>
                
                <tr><td><div class="m1"  style="background:#000000;border-radius:6px;"><a href="viewfeedback.php" style="color:white">VIEW FEEDBACK</a></div> </td></tr>
                
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


    <div class="logos" >
            <table  class="table1" border="0" style="margin-left:30px;margin-top:-80px;">
            
                
                <tr><td><h5 style="color:black;font-style:bold;background:red;"><center>
              <?php
    
       $uname=isset($_POST['uname']); 
        //if($_SESSION["uname"] = $uname)
            if(isset($_SESSION["uname"]))
        {
               ?>
                    <h5 style="color:white;background:red;font-size:14px;">
          
                        <?php  echo $_SESSION['uname'];?></h5>
            <?php
        }
                    ?></center></h5></td></tr>
                
                
                <tr><td><h5 style="color:black"><center>FOLLOW</center></h5></td></tr>
                <tr><td> <a href="https://www.facebook.com/"><img src="./logos/facebook.png" ></a></td></tr>
                <tr><td><a href="https://www.instagram.com/"><img src="./logos/insta.png"></a> </td></tr>
                <tr><td> <a href="https://twitter.com/login?lang=en"><img src="./logos/twitter.png"></a></td></tr>
                <tr><td><a href="https://www.youtube.com/"><img src="./logos/youtube.png"></a> </td></tr></table>
        </div>
    <div style="position:;">
        <img src="Im/thank.gif" style="height:400px;width:500px;margin-left:100px;margin-top:-200px;">
   
        
        
         <div class="rating" style="margin-top:-300px;margin-left:200px;">
        <table class="rate">
        <tr>    <td>
                <h2 style="color:black;text-align:center;margin-left:100px;">GIVE FEEDBACK</h2>
                
            </td></tr>
            <tr><td><h4>Give your rating hear:</h4></td>
                <td>
                    
<fieldset class="rating">
    
    <input type="radio" id="star5" name="rating" value="5" onclick="postToController();"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4.5"  onclick="postToController();"/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4"onclick="postToController();" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3.5" onclick="postToController();"/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3"onclick="postToController();" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2.5" onclick="postToController();"/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" onclick="postToController();"/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1.5"onclick="postToController();" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" onclick="postToController();"/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="0.5"onclick="postToController();" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset></td></tr>
            <tr><td><h4>Comment</h4></td><td><textarea name='comment'></textarea></td></tr></table>
            <a href="viewfeedback.php" style="margin-left: 550px;" onclick="execute()"> 
                <input type="submit" value="submit" id="comment"></a>
        </div>
   
                    
      
        
            <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

            
		 </body>
         </html>