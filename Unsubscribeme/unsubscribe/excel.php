
<?php
include('../Database Connection file/database.inc.php');
?>

<?php
$output = '';
if(isset($_POST["export_excel"]))
{
 $query = "SELECT * FROM contact_us ";
 $run = mysqli_query($con, $query);
 if(mysqli_num_rows($run) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Date</th>  
                         <th>Name</th>  
                         <th>Email</th>  
                         <th>Mobile</th>
                         <th>Comment</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($run))
  {
   $output .= '
    <tr>  
                         <td>'.$row["date"].'</td>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["mobile"].'</td>  
                         <td>'.$row["comment"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xlsx');
  echo $output;
 }
}
?>
