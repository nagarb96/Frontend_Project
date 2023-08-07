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
      margin-top: 30px;
      width:200px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>MONTESSORI. PRESCHOOL</h1>
    <p>4024 Wade St. Los Angeles, CA 90066</p>
    <h2>Application for Registration</h2>
    <form action="form_action.php" method="POST" enctype="multipart/form-data">
      <div class="form-row">
        <label class="form-label" for="studentName">Name of Student:</label>
        <input class="form-input" type="text" id="studentName" name="studentName" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="dateOfBirth">Date of Birth:</label>
        <input class="form-input" type="date" id="dateOfBirth" name="dateOfBirth" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherName">Name of Mother:</label>
        <input class="form-input" type="text" id="motherName" name="motherName" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherName">Name of Father:</label>
        <input class="form-input" type="text" id="fatherName" name="fatherName" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="homeAddress">Home Address:</label>
        <input class="form-input" type="text" id="homeAddress" name="homeAddress" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="homePhone">Home Phone number:</label>
        <input class="form-input" type="text" id="homePhone" name="homePhone" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherCellPhone">Mother's cell phone:</label>
        <input class="form-input" type="text" id="motherCellPhone" name="motherCellPhone" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherEmail">Mother's Email:</label>
        <input class="form-input" type="email" id="motherEmail" name="motherEmail" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherCellPhone">Father's cell phone:</label>
        <input class="form-input" type="text" id="fatherCellPhone" name="fatherCellPhone" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherEmail">Father's Email:</label>
        <input class="form-input" type="email" id="fatherEmail" name="fatherEmail" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="proposedStartDate">Proposed starting date:</label>
        <input class="form-input" type="date" id="proposedStartDate" name="proposedStartDate" required>
      </div>
      
      <button name="submit">Update</button>
    </form>
    <p style="color:green;">Please complete the form and return with the payment.</p>
    <div>
  </div>
</div>
</div>
  </div>
</body>
</html>
