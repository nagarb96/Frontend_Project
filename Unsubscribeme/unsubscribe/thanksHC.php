<?php
include('../Database Connection file/database.inc.php');
?>

<?php
 //$msg="";

if(isset($_POST['submit']))
{
   $checkbox=$_POST['checkbox'];
   $checkbox1=implode(",",$checkbox);
   
   $email=$_POST['email'];
   
   
   


    $query="INSERT INTO Health_care (checkbox,email) values ('$checkbox1','$email')";
    //$msg="qwerty";
    $run=mysqli_query($con,$query);
   
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Unsubscribe</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
      

<!--	  <link href="style.css" rel="stylesheet">  -->
<style>
    body{
    background-color: #dcdcdc;
    }
    .contact{
    padding: 4%;
    height: 400px;
    }
    .col-md-3{
    background: #25274d;
    padding: 4%;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
    }
    .col-md-3{
        
    }
    
    .contact-info{
    margin-top:10%;
    }
    .contact-info img{
    margin-bottom: 15%;
    }
    .contact-info h2{
    margin-bottom: 10%;
    }
    .col-md-9{
    background: #fff;
    padding: 3%;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    }
    .contact-form label{
    font-weight:600;
    }
    .contact-form button{
    background: #25274d;
    color: #fff;
    font-weight: 600;
    width: 25%;
    }
    .contact-form button:focus{
    box-shadow:none;
    } 
    .msg {
  animation: hideAnimation 0s ease-in 5s;
  animation-fill-mode: forwards;
}

    @keyframes hideAnimation {
    to {
    visibility: hidden;
    width: 0;
    height: 0;
  }
}
</style>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container contact">
         <div class="row">
            <div class="col-md-3">
               <div class="contact-info">
                  <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                  <a href="9C6Z4.php" style="text-decoration:none;"><h2 style="color:#fff">Global Unsubscribe</h2></a>
               </div>
            </div>
            <div class="col-md-9">
                
               
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 
					 <h5>Sorry to see you go!</h5>
                     <h5>You've succesfully unsubscribed!</h5>  
                     
                     <br>
					 <br>
					 <br>
					 <br>
					 <br>
					
					
            </div>
         </div>
      </div>
    
     
   </body>
</html>
    
 
  </body>
</html>
