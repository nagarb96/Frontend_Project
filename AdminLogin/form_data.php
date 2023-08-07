<?php
$con=mysqli_connect('localhost','root','','userDetails');

// Establish your database connection
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "montessori_preschool";
            
            $connection = mysqli_connect($host, $username, $password, $database);
            

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <title>Database</title>
</head>
<body>
    <!-- Header -->
    <h1 class="text-center">Welcome to admin panel</h1>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">My Database</a>
                    <div class="navbar-nav">
                <a class="nav-link" href="export-excel.php">Download Excel</a>
                <a class="nav-link" href="export-pdf.php">Download PDF</a>
                    <form method="post">
                    <button class="btn btn-secondary" name="logout">Log out</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- Back button -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <a href="#" class="btn btn-primary" id="back-btn">Back</a>
      </div>
    </div>
  </div>
    <h1 class="text-center">Data Registration Table</h1>

    <div class="col-md-12">
        <table id="data-table" class="table">
            <thead>
                <tr>
                    <th>ID Number</th>
                    <th>Student Name</th>
                    <th>Date of Birth</th>
                    <th>Mother Name</th>
                    <th>Father Name</th>
                    <th>Address</th>
                    <th>Home Phone</th>
                    <th>Mother Cell Phone</th>
                    <th>Mother Email</th>
                    <th>Father Cell Phone</th>
                    <th>Father Email</th>
                    <th>Start Date</th>
                    <th>Form Fill Date</th>
                    <!-- Add more table columns as needed -->
                </tr>
            </thead>
        <tbody>
            
        </tbody>
    </div>
    <script>
    // Function to go back to the main view
    function goBack() {
      const montessoriData = document.getElementById('montessori-data');
      const dataTable = document.getElementById('data-table');
      montessoriData.classList.add('d-none');
      dataTable.classList.remove('d-none');
    }

    // ... (Existing JavaScript code remains the same) ...

    // Add event listener to the back button
    const backButton = document.getElementById('back-btn');
    backButton.addEventListener('click', () => {
      goBack();
    });
  </script>
</body>
</html>
