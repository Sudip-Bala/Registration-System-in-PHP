<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
    <link rel="icon" href="image/Medicine.png" type="image/gif/png">
    <link rel="stylesheet" type="text/css" href="style.css" media="all">

</head>
<body>
<div>
        <a href="biodata.php"><button type="button" class="btn btn-primary btn-lg" >View Data</button></a>

        <h1>Human Resource Management System:</h1>

        <form class="" onsubmit="return validateForm()" action="./connection.php" method="POST">

        <label for="">Company Name:</label><br>
        <input id="Company_Name" type="text" name="Company_Name" value="" placeholder="Enter Compnay Name" required>
    <br>
    <br>
    <label for="">Department:</label><br>
        <input id="Department_Name" type="text" name="Department_Name" value="" placeholder="Enter Department Name" required><br><br>

        <label for="">Designation:</label><br>
        <input id="Designation_Name" type="text" name="Designation_Name" value="" placeholder="Enter Designation Name" required> <br><br>

        <label for="">Employee Address:</label><br><br>

        <input  id="Name" type="text" name="Name" value="" placeholder="Enter Employee Name" required> <br><br>
        <input id="Father_Name" type="text" name="Father_Name" value="" placeholder="Enter Employee Father Name" required> <br><br>
        <input id="Mother_name" type="text" name="Mother_name" value="" placeholder="Enter Employee Mother Name" required> <br><br>
        <input id="Location" type="text" name="Location" value="" placeholder="Enter Employee Location" required> <br><br>
        <input id="Number" type="number" name="Number" value="" placeholder="Enter Employee Phone Number" required> <br><br>
        <input id="Email" type="email" name="Email" value="" placeholder="Enter Employee Email Address" required> <br><br>

        <input id="submit" type="submit" name="submit" value="SUBMIT"><br>
</form>
</div>

</body>
</html>

