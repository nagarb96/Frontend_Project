<?php
require_once("../config/config.php");

if (isset($_GET['id'])) {
    $id_number = $_GET['id'];

    // Fetch data for editing
    $sql = "SELECT * FROM registration WHERE id_number = :id_number";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_number', $id_number, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo "Record not found.";
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the submitted update form
        $updatedStudentName = $_POST['studentName'];
        $updatedDateOfBirth = $_POST['dateOfBirth'];
        $updatedMotherName = $_POST['motherName'];
        $updatedFatherName = $_POST['fatherName'];
        $updatedHomeAddress = $_POST['homeAddress'];
        $updatedHomePhone = $_POST['homePhone'];
        $updatedMotherCellPhone = $_POST['motherCellPhone'];
        $updatedMotherEmail = $_POST['motherEmail'];
        $updatedFatherCellPhone = $_POST['fatherCellPhone'];
        $updatedFatherEmail = $_POST['fatherEmail'];
        $updatedProposedStartDate = $_POST['proposedStartDate'];
        
        // Update the data in the database
        $updateSql = "UPDATE registration SET
                      studentName = :studentName,
                      dateOfBirth = :dateOfBirth,
                      motherName = :motherName,
                      fatherName = :fatherName,
                      homeAddress = :homeAddress,
                      homePhone = :homePhone,
                      motherCellPhone = :motherCellPhone,
                      motherEmail = :motherEmail,
                      fatherCellPhone = :fatherCellPhone,
                      fatherEmail = :fatherEmail,
                      proposedStartDate = :proposedStartDate
                      WHERE id_number = :id_number";
                      
        $updateStmt = $db->prepare($updateSql);
        $updateStmt->bindParam(':studentName', $updatedStudentName, PDO::PARAM_STR);
        $updateStmt->bindParam(':dateOfBirth', $updatedDateOfBirth, PDO::PARAM_STR);
        $updateStmt->bindParam(':motherName', $updatedMotherName, PDO::PARAM_STR);
        $updateStmt->bindParam(':fatherName', $updatedFatherName, PDO::PARAM_STR);
        $updateStmt->bindParam(':homeAddress', $updatedHomeAddress, PDO::PARAM_STR);
        $updateStmt->bindParam(':homePhone', $updatedHomePhone, PDO::PARAM_STR);
        $updateStmt->bindParam(':motherCellPhone', $updatedMotherCellPhone, PDO::PARAM_STR);
        $updateStmt->bindParam(':motherEmail', $updatedMotherEmail, PDO::PARAM_STR);
        $updateStmt->bindParam(':fatherCellPhone', $updatedFatherCellPhone, PDO::PARAM_STR);
        $updateStmt->bindParam(':fatherEmail', $updatedFatherEmail, PDO::PARAM_STR);
        $updateStmt->bindParam(':proposedStartDate', $updatedProposedStartDate, PDO::PARAM_STR);
        $updateStmt->bindParam(':id_number', $id_number, PDO::PARAM_STR);
        
        if ($updateStmt->execute()) {
          // The update was successful
          header("Location: preview.php?id=" . $id_number);
          exit; // Important to exit after redirection

      } else {
          // The update failed
          $errorMessage = "Update failed. Please try again.";
      }
    }
    
    }
  } else {
      echo "Invalid ID.";
      exit;
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Montessori Preschool Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 5% auto;
      padding: 20px;
      text-align: center;
      border: 1px solid white;
      border-radius: 10px;
      box-shadow: 2px 4px 10px gray;
;
    }
    h2 {
        color: red;
    }
    .form-row {
      display: flex;
      margin-bottom: 10px;
    }
    .form-label {
      flex: 1;
      text-align: left;
    }
    .form-input {
      flex: 1;
    }
    button {
      background-color: blue;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width:200px;
    }
  </style>
</head>
<body>
<?php
        $sql="select * from registration where id_number=:id_number";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id_number', $id_number,PDO::PARAM_STR);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        foreach($rows as $row)
        {
    ?>
  <div class="container">
    <h1>MONTESSORI. PRESCHOOL</h1>
    <p>4024 Wade St. Los Angeles, CA 90066</p>
    <h2>Update Application for Registration</h2>

    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
    <div class="form-row">
        <label class="form-label" for="studentName">Name of Student:</label>
        <input class="form-input" type="text" id="studentName" name="studentName"    value="<?php echo $row['studentName'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="dateOfBirth">Date of Birth:</label>
        <input class="form-input" type="date" id="dateOfBirth" name="dateOfBirth"    value="<?php echo $row['dateOfBirth'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherName">Name of Mother:</label>
        <input class="form-input" type="text" id="motherName" name="motherName"    value="<?php echo $row['motherName'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherName">Name of Father:</label>
        <input class="form-input" type="text" id="fatherName" name="fatherName"    value="<?php echo $row['fatherName'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="homeAddress">Home Address:</label>
        <textarea name="homeAddress" class="form-control" style="width:297px;"    required><?php echo $row['homeAddress'];?></textarea>
      </div>

      <div class="form-row">
        <label class="form-label" for="homePhone">Home Phone number:</label>
        <input class="form-input" type="number" id="homePhone" name="homePhone"    value="<?php echo $row['homePhone'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherCellPhone">Mother's cell phone:</label>
        <input class="form-input" type="number" id="motherCellPhone" name="motherCellPhone"    value="<?php echo $row['motherCellPhone'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherEmail">Mother's Email:</label>
        <input class="form-input" type="email" id="motherEmail" name="motherEmail"    value="<?php echo $row['motherEmail'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherCellPhone">Father's cell phone:</label>
        <input class="form-input" type="number" id="fatherCellPhone" name="fatherCellPhone"    value="<?php echo $row['fatherCellPhone'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherEmail">Father's Email:</label>
        <input class="form-input" type="email" id="fatherEmail" name="fatherEmail"    value="<?php echo $row['fatherEmail'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="proposedStartDate">Proposed starting date:</label>
        <input class="form-input" type="date" id="proposedStartDate" name="proposedStartDate"    value="<?php echo $row['proposedStartDate'];?>" required>
      </div>
      
      <div style="padding:10px; text-align:left;margin:30px 5px;">
        <input type="checkbox" checked="checked" name="declare" required>
        I / We the parents / guardians of ____________ hereby register him/ her to be enrolled at Montessori Preschool in the year 20<span>23</span>. I / We understand that the $50.00 reservation fee is non refundable and will apply towards registration fee at time of enrollment.    
      </div>

      <button name="submit">Update </button>
      <script>
  function validateForm() {
    var motherEmailInput = document.getElementById("motherEmail");
    var motherEmailValue = motherEmailInput.value.trim();

    var fatherEmailInput = document.getElementById("fatherEmail");
    var fatherEmailValue = fatherEmailInput.value.trim();

    // Check if the email addresses contain "@" and "."
    if (motherEmailValue.indexOf("@") === -1 || motherEmailValue.indexOf(".") === -1 ||
        fatherEmailValue.indexOf("@") === -1 || fatherEmailValue.indexOf(".") === -1) {
      alert("Please enter a valid email address.");
      return false; // Prevent form submission
    }

    return true; // Allow form submission
  }
</script>

<script>
function toggleEditMode() {
    var inputs = document.querySelectorAll('.form-input');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].readOnly = !inputs[i].readOnly;
    }
}

    </form>
    <p style="color:green;">Please complete the form and return with the payment.</p>
    <div>
  </div>
</div>
</div>
  </div>
  <?php
        }
  ?>

</body>
</html>
