<html>
<head>
<title> users-credit management</title>
<link rel="stylesheet" href="styles.css">  
</head>
<body>
<header class="header"><b> credit management</b></header>
<nav  class="navigation">  
<a href="http://localhost/internship/phase1/home.html"> Home </a> 
<a href="http://localhost/internship/phase1/users.php">  Users </a>
<a href="">  About </a>
<a href="">  Contact </a>
</nav>
 <div class="body">
<br><br> <br>    
<h2 style="color:black"> &nbsp The users of the website:</h2>
<?php
$host="localhost";
$username="root";
$password="";
$db="credit";
$con=mysqli_connect($host,$username,$password,$db);
if($con)
{
$sql="SELECT * FROM users";
$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0)
{
echo "<ol>";
 while($row=mysqli_fetch_assoc($results))
{ 
 echo " <li><a href='userinfo.php?id=".$row['Name']."'>". $row['Name'] ."</a></li>"; 
}
echo "</ol>";
}
else
echo "0 RECORDS";

mysqli_close($con);
}
?>
 
<br> <br> <br> 
</body>
</html>

