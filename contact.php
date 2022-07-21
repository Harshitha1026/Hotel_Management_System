<?php
include_once 'admin/include/class.user.php'; 
$user=new User(); 
if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->contacts($fullname, $email, $feedback);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('Feedback sent Succesfully');
         </script>";
    }
       
}  


?>







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

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    
    <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 400px;
        }
        
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }
        .row{
            width: 80%;
            height: 85vh;
            border-radius: 10px;

            margin-top: 5%;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(0, 0, 0, 0.7);;
        }
        .val{
            margin-top: 14%;
        }
        table{
            margin: 0% auto 3% auto;
        }
        input, textArea{
            width: 300px;
            outline: none;
            border-radius: 3px;
        }
        p,label{
            color: wheat;
        }
        td{
            padding: 45px;
        }
        


    </style>
    
    
</head>

<body>
    <div class="container">
        <div class="row">
            <div style="width:100%; height: 20vh;background-color: white;border-top-left-radius: 10px;border-top-right-radius: 10px">
                <p style="font-size:25px;font-weight: bold;color:#ffbb2b;text-align: center;padding-top: 40px; ">Contact Us</p>
            </div>
            <table>
               
                <tr>
                    <td class="contact">
                        
                      <div class="val">
                          <h4>Contact:</h4>
                          <p>Harshitha B V</p>
                          <p>harshitha123@gmail.com</p>
                          <p>(+91)8861826144</p>
                          
                      </div>
                       
                       <div class="val">
                           <h4>Address :</h4>
                           <p>2275, Tumkur Rd,<br>Yeshwanthpur Industrial Area, Phase 1,<br> Yeswanthpur, Bengaluru,<br> Karnataka 560022</p>
                       </div>
                    </td>
                    <td class="form">
                        <form action="" method="post" name="reg">
                            <div class="val">
                                <label for="fullname">Full Name:</label><br>
                                <input type="text" class="input" name="fullname" placeholder="example: Jhon Wiki" required>
                            </div>
                            <div class="val">
                                <label for="email">Email-ID:</label><br>
                                <input type="email" class="input" name="email" placeholder="exmple: abc@gmail.com" required>
                            </div>
                            <div class="val">
                                <label for="feedback">Feedback/Query:</label><br>
                                <textarea class="input" name="feedback" placeholder="feedback" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn" name="submit" value="contact" onclick="return(submitreg());" style="background-color:#ffbb2b ">Submit</button>

                        <br>
                        <!-- <div id="click_here">
                             <a href="../admin.php">Back to Admin Panel</a>
                         </div>-->
                    </td>
                </tr>
            </table>
        </div>
      
        
        
        
        
       


    </div>
    
    
    
    
    





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>