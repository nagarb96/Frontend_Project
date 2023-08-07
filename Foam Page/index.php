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
  <div class="container">
    <h1>MONTESSORI. PRESCHOOL</h1>
    <p>4024 Wade St. Los Angeles, CA 90066</p>
    <h2>Application for Registration</h2>
    <form action="form_action.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
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
        <textarea name="homeAddress" type="text" class="form-control" style="width:300px;" required></textarea>
      </div>

      <div class="form-row">
        <label class="form-label" for="homePhone">Home Phone number:</label>
        <input class="form-input" type="number" id="homePhone" name="homePhone" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherCellPhone">Mother's cell phone:</label>
        <input class="form-input" type="number" id="motherCellPhone" name="motherCellPhone" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherEmail">Mother's Email:</label>
        <input class="form-input" type="email" id="motherEmail" name="motherEmail" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherCellPhone">Father's cell phone:</label>
        <input class="form-input" type="number" id="fatherCellPhone" name="fatherCellPhone" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherEmail">Father's Email:</label>
        <input class="form-input" type="email" id="fatherEmail" name="fatherEmail" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="proposedStartDate">Proposed starting date:</label>
        <input class="form-input" type="date" id="proposedStartDate" name="proposedStartDate" required>
      </div>
      
      <div style="padding:10px; text-align:left;margin:30px 5px;">
        <input type="checkbox" name="declare" required>
        I / We the parents / guardians of ____________ hereby register him/ her to be enrolled at Montessori Preschool in the year 20<span>23</span>. I / We understand that the $50.00 reservation fee is non refundable and will apply towards registration fee at time of enrollment.    
      </div>

      <button name="submit">Submit </button>
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
    </form>
    <p style="color:green;">Please complete the form and return with the payment.</p>
    <div>
  </div>
</div>
</div>
  </div>
  

</body>
</html>
