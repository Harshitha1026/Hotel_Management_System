<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    
    <style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
        td a{
            text-decoration: none;
            color: wheat;
        }
		
    </style>
    
    
</head>

<body>
    <div class="container">
      
      
        <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Check Availability</a></li>
                    <li><a href="Destination.html">Destination</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                
            </div>
        </nav>

     
        <div class="jumbotron">
        <div class="w3-content w3-section">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/1.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/2.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/3.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/4.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/5.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/6.jpg" style="width:100%; height:450px;">
        </div>    
        </div>
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well" >
              <h4><strong style="color: #ffbb2b">About</strong></h4><br>
              <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels</p>
              <br>
              <p>Prior to the Internet, travelers could write, telephone the hotel directly, or use a travel agent to make a reservation. Nowadays, online travel agents have pictures of hotels and rooms, information on prices and deals, and even information on local resorts. Many also allow reviews of the traveler to be recorded with the online travel agent.</p>
              <br>
              <p>Online hotel reservations are also helpful for making last minute travel arrangements. Hotels may drop the price of a room if some rooms are still available. There are several websites that specialize in searches for deals on rooms.</p>
              
            </div>  
        </div>
        <!--<div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
              <h4><strong>Contact Us</strong></h4><hr>
              Deeksha G Salian (7760492130)<br>
              Deepthi K (7259039423)<br>

            </div>
            <div class="col-md-4"></div>
            
        </div>-->
        <footer class="table"> 
            <table>
                <tr>
                    <td><a href="contact.php">Contact Us</a></td>
                    <td>Magazine</td>
                    <td>Connections</td>
                    <td rowspan="4"> <span style="font-size:18px;">Subscribe</span><br>
                        <i style="font-size:12px;">Discover the latest stories <br>and inspirations from our world, <br>right in your inbox.</i>
                        <form><input type="email"  value="" placeholder="Enter your E-mail" style=" opacity: 0.7; margin-bottom: 1%;border-top: none;border-left: none;border-right: none;"><br>
                            <input  type="button" id="subscribe" value="Subscribe" ></form></td>
                    
                </tr>
                <tr>
                    <td>Terms of use</td>
                    <td>Accessibility</td>
                    <td>Aviation</td>
                </tr>
                <tr>
                    <td>Privacy policy</td>
                    <td>News and Media</td>
                    <td>SAATHI</td>
                </tr>
                <tr>
                    <td>Careers</td>
                    <td>Press room</td>
                    <td>NIDHI</td>
                </tr>
                
            </table>
                <!--<nav>  
                    <a href="#"><b>About us</b></a>
                    <a href="#"><b>Privacy policy</b></a>
                    <a href="#"><b>Newsletter</b></a>
                    <a href="#"><b>Sitemap</b></a>
                </nav>-->
                <p class='par' >FOLLOW US ON:</p> 
                <div class='b'>
                <button  class="x"><a href="https://twitter.com/i/flow/signup?"><i class="fa fa-twitter" style="font-size:25px;color:lightslategray;background-color: white;"></i></a></button>
                <button class="x"><a href="https://www.google.com/"><i class="fa fa-google" style="font-size:25px;color:brown;background-color:white; "></i></a></button>
                <button  class="x"><a href="https://www.facebook.com/"><i class="fa fa-facebook-f" style="font-size:25px;color:blue;background-color: white;"></i></a></button>
                <button class="x"><a href="#"><i class="fa fa-wifi" style="font-size:25px;color:orange;background-color: white"></i></button>
                <button class="x"><a href="https://www.youtube.com/"><i class="fa fa-youtube" style="font-size:25px;color:red;background-color: white"></i></a></button>
                 </div>

                <p class ='par' style="top: 10%;margin-top: 3%;font-size: 10px;  ">Copyright &COPY 2019  Hotels and Resorts  All rights reserved </p>  
         </footer>  



    </div>
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>