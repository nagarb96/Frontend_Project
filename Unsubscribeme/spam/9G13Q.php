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
   
   
   


    $query="INSERT INTO Spam_non_health_care (checkbox,email) values ('$checkbox1','$email')";
    //$msg="qwerty";
    $run=mysqli_query($con,$query);
   
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Global Spam</title>
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
    
    @media only screen and (max-width: 600px) {
    .col-md-3{
        border-radius: 10px 10px 10px 10px;
    }
    
    
    .col-md-9{
        border-radius: 10px 10px 10px 10px;
    }
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
                  <h2 style="color:#fff">Global Spam</h2>
               </div>
            </div>
            <div class="col-md-9">
               <form method="post" id="frmContactus" action="thanksNHC.php">
					<div class="contact-form">
					  <div class="form-group">
						 <!-- Add Name in Foam 
						 <label class="control-label col-sm-2" for="name">Name:</label>
						 <div class="col-sm-10">          
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
						 </div>
					  </div>
					  --->
					  
					  
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="email">Email:</label>
						 <div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
						 </div>
						 
						 <div class="class="input-group mb-3"" style="margin:30px; width:50%;">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" oninput="this.className = ''" type="checkbox" name="checkbox[]" value="Too Many E-mails" >Too Many E-mails
                            </div>
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" oninput="this.className = ''" type="checkbox" name="checkbox[]" value="Never Subscribed" >Never Subscribed
                            </div>
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" oninput="this.className = ''" type="checkbox" name="checkbox[]" value="Not Interested Anymore" >Not Interested Anymore
                            </div>
                            
                            </div>
					  </div>
					  

					  
					  
					  <!-- Add Mobile Number and Comment in Foam
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="mobile">Mobile:</label>
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
						 </div>
					  </div>
					  
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="comment">Comment:</label>
						 <div class="col-sm-10">
							<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
						 </div>
					  </div>
					  -->
					  <div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
					           <!-- <span style="color:green;" class="msg"> <?php echo $msg ?> </span> -->
					
					        
						 </div>
					  </div>
				   </div>
			   </form>
            </div>
         </div>
      </div>
    
     
   </body>
</html>