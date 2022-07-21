<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 

$id=$_GET['id'];
//$sql="DELETE * FROM rooms WHERE room_id='$id'";
// $query=mysqli_query($user->db, $sql);

//$row = mysqli_fetch_array($query);
 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    
    
    $result=$user->delete_room($id);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('Deleted succefully');
         </script>";
    }
    else
    {
        echo "<script type='text/javascript'>
              alert('Try again!!');
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
  <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>

    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        

      <div class="well">
            <h2>DELETE</h2>
            <form action="" method="post" name="room_category">
              
                <div class="form-group">
                    <label for="phone" style="font-size: 20px;">Are you sure want to delete this booking?</label>
                </div>
                 
               
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" >Yes</button>

               <br>
                <div id="click_here">
                    <a href="admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>
        
        



    </div>
    
    
    
    
    






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</body>

</html>