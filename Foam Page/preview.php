<?php require_once("config.php");$id_number=$_GET['id'];
$id_number=$_GET['id'];
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
      margin: 1.5% auto;
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
    .btndiv{
        display:flex;
        justify-content: center;
    }
    .btndiv button{
        justify-content: center;
    }
    .edit {background-color: #f1c232;} /* Blue */

    .printbtn{
        background-color: #008CBA; /* blue */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
}
.container2{
  position:relative;
  display:block;

}
.cover{
  width:100%;
  height:100%;
  background:transparent;
  position:absolute;
  z-index:2;
  top:0;
  left:0;
  display:none;

}

.container2.disable-checkbox .cover{
  display:block;
}

@page { size: auto;  margin: 5px; margin-right: -70px; margin-left: -70px;}

@media print{
    a[href]:after {
        content: none !important;
    }
}
@media print {
        #printbtn,#edit {
        display: none !important;
    }
    .main-heading
    {
      font-size:30px !important;
    }
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
  
  <div class="btndiv">
    <!-- <button class="button edit" id="edit" href="update_form.php">Edit Form</button> -->
    <button class="button" id="printbtn" onclick="window.print()">Print</button>
  </div>

  <div class="container">
    <h1>MONTESSORI. PRESCHOOL</h1>
    <p>4024 Wade St. Los Angeles, CA 90066</p>
    <h2>Application for Registration</h2>
    <h3 style="color:green;">Registration Successful</h3>

    <form action="form_action.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <label class="form-label">Identity Number</label>
        <input class="form-input" type="text" id="studentName" name="studentName"  readonly value="<?php echo $row['id_number'];?>"  required>
      </div>
      <div class="form-row">
        <label class="form-label" for="studentName">Name of Student:</label>
        <input class="form-input" type="text" id="studentName" name="studentName"  readonly value="<?php echo $row['studentName'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="dateOfBirth">Date of Birth:</label>
        <input class="form-input" type="date" id="dateOfBirth" name="dateOfBirth"  readonly value="<?php echo $row['dateOfBirth'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherName">Name of Mother:</label>
        <input class="form-input" type="text" id="motherName" name="motherName"  readonly value="<?php echo $row['motherName'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherName">Name of Father:</label>
        <input class="form-input" type="text" id="fatherName" name="fatherName"  readonly value="<?php echo $row['fatherName'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="homeAddress">Home Address:</label>
        <textarea name="homeAddress" class="form-control" style="width:297px;"  readonly required><?php echo $row['homeAddress'];?></textarea>
      </div>

      <div class="form-row">
        <label class="form-label" for="homePhone">Home Phone number:</label>
        <input class="form-input" type="number" id="homePhone" name="homePhone"  readonly value="<?php echo $row['homePhone'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherCellPhone">Mother's cell phone:</label>
        <input class="form-input" type="number" id="motherCellPhone" name="motherCellPhone"  readonly value="<?php echo $row['motherCellPhone'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="motherEmail">Mother's Email:</label>
        <input class="form-input" type="email" id="motherEmail" name="motherEmail"  readonly value="<?php echo $row['motherEmail'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherCellPhone">Father's cell phone:</label>
        <input class="form-input" type="number" id="fatherCellPhone" name="fatherCellPhone"  readonly value="<?php echo $row['fatherCellPhone'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="fatherEmail">Father's Email:</label>
        <input class="form-input" type="email" id="fatherEmail" name="fatherEmail"  readonly value="<?php echo $row['fatherEmail'];?>" required>
      </div>

      <div class="form-row">
        <label class="form-label" for="proposedStartDate">Proposed starting date:</label>
        <input class="form-input" type="date" id="proposedStartDate" name="proposedStartDate"  readonly value="<?php echo $row['proposedStartDate'];?>" required>
      </div>
  

  <div class="container2 disable-checkbox" style="padding:10px; text-align:left;margin:30px 5px;">
  <div class="cover"></div>
  <input type="checkbox" checked="checked"/> I / We the parents / guardians of <strong><?php echo $row['fatherName'];?></strong> hereby register him/ her to be enrolled at Montessori Preschool in the year 20<span>23</span>. I / We understand that the $50.00 reservation fee is non refundable and will apply towards registration fee at time of enrollment.
</div>
      <div class="form-row">
        <label class="form-label" for="parentSignature">Signature of parents:</label>
        <p>______________________</p>
      </div>

      <div class="form-row">
        <label class="form-label" for="parentSignatureDate">Date:</label>
        <p><?php echo $row['parentSignatureDate'];?></p>
      </div>


      
    </form>
    <?php } ?>
    <div>
        
  </div>
</div>
</div>
</div>
</body>
</html>
