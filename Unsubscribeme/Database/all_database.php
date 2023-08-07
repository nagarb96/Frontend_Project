<?php
include('../Database Connection file/database.inc.php');
?>


<!-- Password Protection -->

<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
  header("location: admin_login.php");
}
?>
<!-- Password Protection logout -->

<?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        header("location: admin_login.php");
    }
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
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <!-- Add Name of User -->

        <a class="navbar-brand" href="#">My Database</a>
        <button type="button" class="btn btn-light"><?php echo $_SESSION['AdminLoginId']?></button>

        <div class="navbar-nav">
          <a class="nav-link" href="export-excel.php"><img src="xls.png"></a>
          <!--<a class="nav-link" href="export-pdf.php">Download PDF</a>-->
          <form method="post">
          <button class="btn btn-secondary" name="logout">Log out</button>
          </form>
        </div>
      </div>
    </nav>
  </header>



  <!-- Main Content -->
  <div class="container mt-4">
    <div class="row">
      <!-- Left Side Navbar -->
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action bg-dark text-white" data-option="option1">Health Care 
                                            <?php
                                                $query = "SELECT email FROM Health_care ORDER BY email";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h6 class="text-warning"> Total Entries: '.$row.'</h6>';
                                            ?>
          </a>
          <a href="#" class="list-group-item list-group-item-action bg-dark text-white" data-option="option2">Non Health Care 
                                            <?php
                                                $query = "SELECT email FROM Non_health_care ORDER BY email";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h6 class="text-warning"> Total Entries: '.$row.'</h6>';
                                            ?>
          </a>
          <a href="#" class="list-group-item list-group-item-action bg-dark text-white" data-option="option3">Spam Health Care 
                                            <?php
                                                $query = "SELECT email FROM Spam_Health_care ORDER BY email";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h6 class="text-warning"> Total Entries: '.$row.'</h6>';
                                            ?>
          </a>
          <a href="#" class="list-group-item list-group-item-action bg-dark text-white" data-option="option4">Spam Non Health Care 
                                            <?php
                                                $query = "SELECT email FROM Spam_non_health_care ORDER BY email";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h6 class="text-warning"> Total Entries: '.$row.'</h6>';
                                            ?>
          </a>
        </div>
      </div>

      <!-- Right Side Content -->
      <div class="col-md-9">
         
        <!-- Table to show users-->
        <table id="data-table" class="table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Email</th>
              <th>Checkbox</th>
              <!-- Add more table columns as needed -->
            </tr>
          </thead>
          <tbody>
            <!-- Table rows will be dynamically populated based on the selected option -->
            
            <?php
            
            // Handle the selected option and fetch data accordingly
            if (isset($_GET['option'])) {
              $selectedOption = $_GET['option'];

              if ($selectedOption === 'option1') {
                $table = "Health_care";
              } elseif ($selectedOption === 'option2') {
                $table = "Non_health_care";
              } elseif ($selectedOption === 'option3') {
                $table = "Spam_Health_care";
              } elseif ($selectedOption === 'option4') {
                $table = "Spam_non_health_care";
              }

              // Fetch data from the selected table
              $query = "SELECT * FROM $table ORDER BY `date` desc";
              $result = mysqli_query($connection, $query);

              // Loop through the fetched data and display table rows
               while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['checkbox'] . "</td>";
                // Add more table cells as needed
                echo "</tr>";
              }
            }
        
            // Close the database connection
            mysqli_close($connection);
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="mt-5 bg-light bg-dark text-white">
    <div class="container py-3">
        <a class="dropdown-item text-center" href="https://eleadsolution.com/">www.eleadsolution.com</a>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    // Add an event listener to the left side navbar links
    const navLinks = document.querySelectorAll('.list-group-item');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        const selectedOption = link.dataset.option;
        updateTableData(selectedOption);
      });
    });

    // Function to update the table data based on the selected option
    function updateTableData(option) {
      const url = window.location.href.split('?')[0] + `?option=${option}`;
      window.location.href = url;
    }
  </script>
</body>
</html>
