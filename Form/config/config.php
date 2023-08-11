<?php 
define('DBNAME','montessori_Preschool');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Your page is connected with database successfully..";
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}
?>

<?php
// Establish your database connection
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "montessori_preschool";
            
            $connection = mysqli_connect($host, $username, $password, $database);
            
            // Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
?>