<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url('http://getwallpapers.com/wallpaper/full/a/e/b/624292.jpg');
  background-size: cover;
  background-position: center;
  margin: 0;
}

/* Sidebar Styles */
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: goldenrod;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: maroon;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: white;
  color: maroon;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: yellow;
}

/* Navigation Bar Styles */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

/* Main Content Styles */
#main {
  transition: margin-left .5s;
  padding: 16px;
}

h2 {
  color: pink;
  font-size: 45px;
  text-align: center;
}

</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="Admissioninfo_emp.php">View_Admissions</a>
  <a href="student_creation.php">Add Student</a>
  <a href="viewstudent.php">View Student</a>
  <a href="Updatemarks.php">Add_Marks</a>
  <a href="checkmarks.php">View_Marks</a>
  <a href="UpdateFee_details.php">Add_Fee_details</a>
  <a href="checkfee_details.php">View_Fee_details</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>
  <ul style="float:right">
    <li><a class="active" href="Employee.php">Home</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="home.php">Logout</a></li>
  </ul>

  <div style="padding: 220px 20px 10px 650px;">
    <h2>Welcome</h2>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html>
