<?php require_once("../config/config.php"); ?>

<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
  header("location: admin_login.php");
}
?>

<?php
    if(isset($_POST['logout']))
    {
      session_destroy();
      header("location:admin_login.php");
    }
?>

<?php
// Check if a search term has been submitted
if (isset($_GET['search']) && !empty($_GET['search'])) {
  $searchTerm = mysqli_real_escape_string($connection, $_GET['search']);
  $query = "SELECT * FROM registration
            WHERE 
              id_number LIKE '%$searchTerm%' OR
              studentName LIKE '%$searchTerm%' OR
              motherName LIKE '%$searchTerm%' OR
              fatherName LIKE '%$searchTerm%' OR
              homeAddress LIKE '%$searchTerm%' OR
              homePhone LIKE '%$searchTerm%' OR
              motherCellPhone LIKE '%$searchTerm%' OR
              motherEmail LIKE '%$searchTerm%' OR
              fatherCellPhone LIKE '%$searchTerm%' OR
              fatherEmail LIKE '%$searchTerm%' OR
              proposedStartDate LIKE '%$searchTerm%' OR
              parentSignatureDate LIKE '%$searchTerm%'";
  $result = mysqli_query($connection, $query);
} else {
  // Use the default query to fetch all data
  $query = "SELECT * FROM registration ORDER BY id_number DESC";
  $result = mysqli_query($connection, $query);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <title>Database</title>
  <style>
    /* Add custom CSS to style the table container */
    .table-container {
      width: 100%; /* Make the container full width */
      overflow-x: auto; /* Enable horizontal scrolling */
      white-space: nowrap; /* Prevent table cells from wrapping */
    }
    .navbar-brand {
      padding-left:-35px;
    }
  </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Waitlist Registration Records</a>
                    <div class="navbar-nav">
                <!-- <a class="nav-link" href="export-excel.php">Download Excel</a>
                <a class="nav-link" href="export-pdf.php">Download PDF</a> -->
                    <form method="post">
                    <button class="btn btn-secondary" name="logout">Log out</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
<br> 


<h1 class="text-center"></h1>
<div class="container-fluid">
  <div class="row">
<div class="col-md-4">
  </div>
<div class="col-md-4">
    <form method="GET" action="">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" name="search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </form>
</div>
<div class="container-fluid">

<div class="col-md-4">
  </div>
  </div></div>
    <div class="col-md-12 table-container">
        <table id="data-table" class="table">
            <thead>
                <tr>
                    <th>Unique ID</th>
                    <th>Student Name</th>
                    <th>Date of Birth</th>
                    <th>Mother's Name</th>
                    <th>Father's Name</th>
                    <th>Address</th>
                    <th>Home Phone</th>
                    <th>Mother's Cell Phone</th>
                    <th>Mother's Email</th>
                    <th>Father's Cell Phone</th>
                    <th>Father's Email</th>
                    <th>Proposed Start Date</th>
                    <th>Submission Date</th>
                    <!-- Add more table columns as needed -->
                </tr>
            </thead>
        <tbody>
        <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id_number']}</td>";
        echo "<td>{$row['studentName']}</td>";
        echo "<td>{$row['dateOfBirth']}</td>";
        echo "<td>{$row['motherName']}</td>";
        echo "<td>{$row['fatherName']}</td>";
        echo "<td>{$row['homeAddress']}</td>";
        echo "<td>{$row['homePhone']}</td>";
        echo "<td>{$row['motherCellPhone']}</td>";
        echo "<td>{$row['motherEmail']}</td>";
        echo "<td>{$row['fatherCellPhone']}</td>";
        echo "<td>{$row['fatherEmail']}</td>";
        echo "<td>{$row['proposedStartDate']}</td>";
        echo "<td>{$row['parentSignatureDate']}</td>";
        echo '<td><a href="preview.php?id=' . $row['id_number'] . '" class="btn btn-warning">View</a></td>';

        // Add more table data cells if needed
        echo "</tr>";
        
    }
    ?>
        </tbody>
    </div>
  </div>
    <script>
  // Function to toggle the visibility of more options
  function toggleMoreOptions() {
    const moreOptionsDropdown = document.querySelector('.dropdown-menu');
    moreOptionsDropdown.classList.toggle('show');
  }

  // Add event listener to the "More" button
  const moreButton = document.querySelector('.dropdown-toggle');
  moreButton.addEventListener('click', () => {
    toggleMoreOptions();
  });

  // Function to hide more options when clicking outside
  window.addEventListener('click', (event) => {
    if (!moreButton.contains(event.target)) {
      const moreOptionsDropdown = document.querySelector('.dropdown-menu');
      if (moreOptionsDropdown.classList.contains('show')) {
        moreOptionsDropdown.classList.remove('show');
      }
    }
  });
</script>

</body>
</html>
