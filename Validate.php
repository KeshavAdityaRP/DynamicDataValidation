<?php


$servername = "localhost";
$username = "keshav";
$password = "iamcrazy1";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$req_year = $_POST["checkyear"];
$req_dept = $_POST["checkdept"];
$req_name = $_POST["checkname"];
$req_bday = $_POST["checkbday"];

echo $req_year;
echo "<br>";
echo $req_dept;
echo "<br>";
echo $req_name;
echo "<br>";
echo $req_bday;
echo "<br>";

if (strcmp($req_name,"others") == 0) {
	$req_anomoly = $_POST["checkanomoly"];
	echo "NAME NOT IN RECORDS<br>";
	echo $req_anomoly;	
}
else{
	echo "NAME IS THE RECORDS";
	$sql = "SELECT year,name,department FROM student WHERE  year = '$req_year' AND department = '$req_dept' AND name = '$req_name' AND dob = '$req_bday'"; 
    $result = $conn->query($sql);

    echo "<br>Carrying out Validation";

    if($result->num_rows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p>". "Year: " . $row["year"]."<br>". "Name: " . $row["name"]. "<br>" ."Department: " .  $row["department"]. "</p><br>";
            #"DOB: " . $row["dob"]."<br>" .
        }
    } 
    else {
        echo "<br>0 results";
        echo "<br>DOES NOT VALIDATE";
        }
    }

$conn->close();
?>