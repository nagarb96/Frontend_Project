<?php include('database.inc.php');

if(isset($_POST['submit']))
{
   
   $email=$_POST['email'];
   

   $query="INSERT INTO contact_us (email) values ('$email')";
   $run=mysqli_query($con,$query);
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            outline: 0;
            font-family: 'Barlow', sans-serif;
        }

        body {
            background-color: #292929;
        }

        section {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .title
        {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 450px;
            background-color: #fff;
            position: relative;
            border-radius: 30px;
            padding: 10px;
        }

        input[type=email] {
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 30px;
            width: calc(100% - 130px);
            border: none;
        }

        button[type=submit] {
            position: absolute;
            top: 5px;
            right: 5px;
            bottom: 5px;
            border-radius: 30px;
            border:none;
            width: 100px;
            color: #fff;
            font-weight: bold;
            background-color: #00b7ff;
            font-size: 16px;
            transition: 0.5s all ease-in-out;
            cursor: pointer;
        }

        button[type=submit].done {
            width: calc(100% - 10px);
        }

    </style>
    <!--<script>
        function subscribeUs() {
            var btn = document.getElementById('subBtn');
            btn.classList.add('done');
            let timer = setTimeout(() => {
                btn.innerHTML = "Thank You for Subscribing!"
                clearInterval(timer);
            }, 600);
        }
    </script>-->
</head>
<body>
        


    <section>
        
        <form method="post">
            <input type="email" name="email" placeholder="Your E-mail Here" required />
            <button type="submit" name="submit" onclick="subscribeUs()" id="subBtn">Submit</button>
        </form>
    </section>
</body>
</html>