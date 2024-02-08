<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="human_resource";

$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (isset($_POST['submit'])) {
    $Company_Name=$_POST['Company_Name'];
    $Department_Name=$_POST['Department_Name'];
    $Designation_Name=$_POST['Designation_Name'];
    $Name=$_POST['Name'];
    $Father_Name=$_POST['Father_Name'];
    $Mother_name=$_POST['Mother_name'];
    $Location=$_POST['Location'];
    $Number=$_POST['Number'];
    $Email=$_POST['Email'];


    $sql = "INSERT INTO hrm_system(
        Company_Name,Department_Name,Designation_Name,Name,Father_Name,Mother_name,Location,Number,Email) values('$Company_Name', '$Department_Name', '$Designation_Name', '$Name', '$Father_Name', '$Mother_name', '$Location', '$Number', '$Email')";

$query= mysqli_query($conn, $sql);

if($query) {
?>
<script type="text/javascript">
    alert('Successfully Registerd');
    </script>
<?php

}

}
?>