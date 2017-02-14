<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = trim($_GET['q']);
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
$sql="SELECT name FROM student WHERE department = '".$q."'";
#echo $sql;
$result = mysqli_query($con,$sql);

echo "<label>Select Your Name:<br><br> ";
echo "<select id=\"name\" name=\"checkname\" onchange=\"anomaly()\" required><option value=\"\" disabled selected>Select your Name</option><option value=\"others\">Others</option>";
while($row = mysqli_fetch_array($result)) {

echo "<option value=\"" . $row['name'] . "\">" . $row['name'] . "</option>";

}
echo "</select>";
echo "</label>";

mysqli_close($con);
?>
<!--
<script type="text/javascript">
	function anomaly() {
		var str1 = document.getElementById("name").value;
		console.log(str1);
		var str2 = "others";
		var n = str1.localeCompare(str2);
		if (n == 0) {
			console.log("User doesnt exist in database");
		}
		else{
			console.log("User exists");
		}
	}
</script>
-->
</body>
</html>