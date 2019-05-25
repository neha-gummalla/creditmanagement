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
<br><br> <br> <br> <br>  
 <?php
 session_start();
$host="localhost";
$username="root";
$password="";
$db="credit";
$con=mysqli_connect($host,$username,$password,$db);
if($con)
{
$id=$_GET['id'];
echo "<h2> Details of " .$id."</h2>";
$_SESSION["cur_user"]=$id;
$sql="SELECT * FROM users where Name='$id'";
$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0)
{
echo "<ul >";
 while($row=mysqli_fetch_assoc($results))
{
  echo "<li> Name:" .$row['Name']. "</li>"; 
 echo "<li> E-mail:" .$row["E-Mail"]. "</li>"; 
 echo "<li> Current Credits:" .$row["cur_credit"]. "</li>"; 
 echo "<li> User on Hold:" .$row["user on hold"]. "</li>"; 
echo "<li> Past Due:" .$row["user past due"]. "</li>"; 
}
echo "</ul>";
}
 else{
echo "0 records";
}
mysqli_close($con);
}
?>
<br> <br>
<label style="font-size:20"> &nbsp &nbsp do you want to transfer credits:</label>
 <a href="transfer.php"><button>YES</button></a>
 <br> <br> <br> <br> <br> 
</div>
</body>
</html>

