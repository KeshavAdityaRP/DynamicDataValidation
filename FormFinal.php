<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body> 
<form id="myForm" action="Validate.php" method="POST">
<label> Year of Pass Out : <br><br>
   <select name="checkyear" id="year" onchange="showUser(this.value,'txtHint','Fetch.php?q=')" required>
    <option value="" disabled selected>Select your Year of Pass Out</option> 
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
  </select>
</label>
 <br><br>

  <div id="txtHint"></div>
 
  <br>
 
  <div id="txtHint1"></div>

<br>

<label>Select Your Date of Birth:<br><br>
  <input type="date" name="checkbday">
</label>
<br><br>
  <div id="rare">
    <label>Enter Your Name:<br><br>
      <input type="text" name="checkanomoly" value="">
    </label>
  </div>
  <br><br>
  <input type="submit">
 </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="AjaxRq.js"></script>
</body>
</html>