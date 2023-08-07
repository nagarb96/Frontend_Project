<?php
include('Database Connection file/database.inc.php');
?>

<?php

// Handle the selected option

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

  // Create an Excel file
  require_once 'vendor/autoload.php'; // Require the PHPExcel library

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $spreadsheet = new Spreadsheet();
  $sheet = $spreadsheet->getActiveSheet();

  // Set headers
  $sheet->setCellValue('A1', 'ID');
  $sheet->setCellValue('B1', 'Name');
  $sheet->setCellValue('C1', 'Email');

  // Fill in data
  $row = 2;
  while ($data = mysqli_fetch_assoc($result)) {
    $sheet->setCellValue('A' . $row, $data['id']);
    $sheet->setCellValue('B' . $row, $data['name']);
    $sheet->setCellValue('C' . $row, $data['email']);
    $row++;
  }

  // Set headers for download
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename="data.xlsx"');

  // Save the Excel file to output
  $writer = new Xlsx($spreadsheet);
  $writer->save('php://output');
}

// Close the database connection
mysqli_close($connection);
?>
