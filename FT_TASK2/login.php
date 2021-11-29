<!DOCTYPE html>
<html>
<head>
<script src="myjs.js"></script>
</head>

<body>
<h1>Registration form </h1>
<p id='mytext'> </p>

<form name="myForm" action="" onsubmit="return validateForm()" method="post">

First name: <input type="text" id="fname" name="fname"> <p id="fn"></p> 
Last name: <input type="text" id="lname" name="lname"> <p id="ln"></p> 
Age: <input type="text" id="age" name="age"> <p id="age"></p> 
<p>Designation
  <input type="radio" id="option1" name="designation" value="Junior Programmer">
  <label for="opt1">Junior Programmer</label>
  <input type="radio" id="option2" name="designation" value="Senior Programmer">
  <label for="opt2">Senior Programmer</label>
  <input type="radio" id="option3" name="designation" value="Project Lead">
  <label for="opt3">Project Lead</label>
</p>
<p id='vdesig'> </p>
<br>
Preferred language
<input type="checkbox" id="l1" name="l1" value="JAVA">
JAVA
<input type="checkbox" id="l2" name="l2" value="PHP">
PHP
<input type="checkbox" id="l3" name="l3" value="C++">
C++
<br>
<p id='vlan'> </p> 
<br>
E-mail: <input type="text" name="email"> <p id='vemail'> </p>
<br>
Password: <input type="password" id="password" name="password"> <p id='vpass'> </p>
<br>
Please choose a file  <input type="submit" value="Choose File"> 
No file choosen
<br>
</form>
<input type="submit" value="Submit">
<input type="submit" value="Reset">
</div>
</body>
</html>