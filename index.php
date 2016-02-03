<?php
 session_start();
 $_SESSION['id']=1;
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="bb.css">	<!--//included bb.css file-->
</head>
<body>
                                       <!--//included php header file-->
    <?php  
        
           include'header.php';
         
     ?>   



    <div class="middle" id="h_id1">	<!--//middle tag.css, left position-->
    <p>CHOOSE YOUR BEST RESORT</p><hr></hr>
    <img src="1.jpg" alt="2.jpg">
    <img src="2.jpg" alt="4.jpg">
    <img src="3.jpg" alt="5.jpg">
    <img src="4.jpg" alt="5.jpg">
    <img src="5.jpg" alt="4.jpg">
    <img src="6.jpg" alt="5.jpg">
    <img src="7.jpg" alt="5.jpg">
    <img src="8.jpg" alt="5.jpg">
    <img src="9.jpg" alt="5.jpg"> 
    </div>



   <div class="middle1" id="h_id2"> 	<!--//middle1 tag.css, right position-->
      <h1>BOOKING FOR YOUR DAYS</h1>
    <table>
    <tr><td>
    NAME</td><td><input type="text" name="f1" value="" size="40"></td></tr>
    <tr><td>ADDRESS</td><td><textarea row="10" cols="40">
            </textarea></td></tr>
    <tr><td>COUNTRY</td><td><input type="text" name="f1" value="" size="40"></td></tr>
    <tr><td>PACKAGES</td><td><input type="checkbox" name="f1" value="7days">3days-4 nights
            <input type="checkbox" name="f1" value="4days">2days-3nights
            <input type="checkbox" name="f1" value="3days">1day-2nights</td></tr>
    <tr><td>PRICE</td><td><input type="text" name="f1" value=""size="40"></td></tr>
    <tr><td>OTHER_SERVICES</td><td><select >
                                   <option value="" >SELECT   
                                   <option value="restraunt">RESTRAUNT
                                   <option value="LAUNDARY">LAUNDARY
                                    <option value="FITNESS CENTER">FITNESS CENTER
                                    <option value="SPA">FAMILY SALOON & SPA</td></tr>
    <tr><td><input type="button" value="submit"></td><td><input type="reset"value="reset"></td></tr>  
    </table><hr></hr>
 <h2>ABOUT US</h2>        
<p>
   An ideal location for a tropical beach holiday, wedding or romantic honeymoon, Cerf Island     Resort boutique hotel is a luxury vacation hideaway in the heart of the Indian Ocean. Nestled into the hillside and bordered by a marine nature reserve, Cerf Island Resort is a beautiful retreat for today’s discerning traveller.Situated at the entrance of the St. Anne Marine Park, Cerf Island Resort offers 24 private and luxurious Villas, within a naturally elegant 5 stars resort. - The resort is designed to deliver a true Creole experience facilitated by incorporating the Seychellois architecture and design while preserving the natural surroundings.   The friendly and courteous management and staff aim to deliver a high standard of service to ensure your comfort and pleasure giving you a unique and memorable visit.
</p>
    </div>
   
   <?php include 'footer.php';?>			<!--//included php footer file-->
     


</body>
</html>
