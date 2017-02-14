
<?php
$q = intval($_GET['q']);
#echo $q;

$servername = "localhost";
$username = "keshav";
$password = "iamcrazy1";
$dbname = "mydb";

$con = new mysqli($servername, $username, $password, $dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

#mysqli_select_db($con,"ajax_demo");
$sql="SELECT department FROM student WHERE year = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<label>Select Your Department:<br><br>";
echo "<select id=\"dept\" name=\"checkdept\" onchange=\"showUser(this.value,'txtHint1','Fetch1.php?q=')\" required><option value=\"\" disabled selected>Select your Department</option>";
while($row = mysqli_fetch_array($result)) {

    echo "<option value=\"" . $row['department'] . "\">" . $row['department'] . "</option>";
}
echo "</select>";
echo "</label>";

mysqli_close($con);
?>