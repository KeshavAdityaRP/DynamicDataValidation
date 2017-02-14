function showUser(str,x,y) {
  if (str=="") {
    document.getElementById(x).innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById(x).innerHTML=this.responseText;
    }
  }
  console.log(str);
  xmlhttp.open("GET",y+str,true);
  xmlhttp.send();
}

  function anomaly() {
    var str1 = document.getElementById("name").value;
    console.log(str1);
    var str2 = "others";
    var n = str1.localeCompare(str2);
    if (n == 0) {
      console.log("User doesnt exist in database");
      document.getElementById("rare").style.visibility = "visible";
    }
    else{
      console.log("User exists");
      document.getElementById("rare").style.visibility = "hidden";
    }
  }