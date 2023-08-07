<?php
include('database.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Unsubscriber list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="card mt-2 mb-2">
    <div class="card-header text-center">
      <h4>User Database</h4>
      <form method="post" action="excel.php" >
        <button type="submit" class="btn btn-primary" name="export_excel" value="Export to Excel" >Export Database</button>
      </form>
    </div>
  </div>
</div>  
  
<?php 



    $query="SELECT * FROM Spam_non_health_care ORDER BY `date` desc";
    $run=mysqli_query($con,$query);
    
?>
  <div class="container mt-3">
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Email</th>
        <th>Checkbox</th>
      </tr>
    </thead>
    <tbody>
        <?php
        
        if(mysqli_num_rows($run) > 0)
    {
        //echo"show";
        while($row = mysqli_fetch_array($run))
        {
    
        ?>
      <tr>
        <td><?php echo $row['date']; ?></td>
                <!-- <td><?php echo $row['name']; ?></td> -->
        
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['checkbox']; ?></td>
                <!-- <td><?php echo $row['mobile']; ?></td> -->
                <!-- <td><?php echo $row['comment']; ?></td> -->
      </tr>
      <?php
        }
    }
    else
        {
       ?>
       <tr>
       <td colspan="4" class="text-center">No Records Found</td>
       </tr>
       <?php
   }

      ?>
      
    </tbody>
  </table>
  
</div>

</body>
</html>
