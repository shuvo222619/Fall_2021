function MyAjaxFunc() {

    var name=document.getElementById("name").value;
    var interest=document.getElementById("interest").value;
    var designation=document.getElementById("designation").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("message").innerHTML = this.responseText;
      }
      
    };
    xhttp.open("POST", "/FTLabExam/control/searchControl.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name="+name+"&interest="+interest+"&designation="+designation);
  }