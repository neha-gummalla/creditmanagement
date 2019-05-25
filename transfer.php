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
<h2> &nbsp Transfer Credits Between Users</h2>
<form action="" method="POST">
<label style="font-size:20"> &nbsp&nbspEnter the unique username to whom you want to transfer the credits:</label>
 <input type="text" name="user"> <br><br>
<label style="font-size:20"> &nbsp&nbspEnter number of credits you want to transfer :</label>
<input type=number name="credits"><br><br>
<center>
&nbsp&nbsp<input type="submit" name="transfer"/> </center> 
</form>
<?php
session_start();
$curr_user=$_SESSION["cur_user"];
$host="localhost";
$username="root";
$password="";
$db="credit";
$con=mysqli_connect($host,$username,$password,$db) or die(mysql_error());
if(isset($_POST["transfer"]))
{
	if(!empty($_POST['user']) && !empty($_POST['credits'])) 
	{
		$user=$_POST['user'];
		$credit=$_POST['credits'];
		$sql="SELECT * FROM users WHERE Name='".$user."' ";  
		$query=mysqli_query($con,$sql);
    		$numrows=mysqli_num_rows($query);  
    		if($numrows!=0)  
    		{  
    			while($row=mysqli_fetch_assoc($query))  
    			{ 
				$dbuser=$row['Name'];
				$dbcredit=(int)$row['cur_credit'];
			 	if($user==$dbuser && $credit<$dbcredit)
				{
					if($row['user on hold']=='no')
					{
					$sql2="INSERT INTO transfers values('$curr_user','$user',$credit)";
					 $query2=mysqli_query($con,$sql2);
					$sql3="UPDATE users SET cur_credit=cur_credit-$credit WHERE Name='$curr_user' ";
					 mysqli_query($con,$sql3);
					$sql4="UPDATE users SET cur_credit=cur_credit+$credit WHERE Name='$user' ";
					 mysqli_query($con,$sql4);
					 echo "Your credits has been transfered successfully!!..";
					}
					else
					{
						echo "oops!.. You cannot transfer the credits";
					 
					}
				}
			}
    		}
		else
		{
			echo "Enter Valid Details";
		}
	}
	else
	{
		echo "<p>All fields are required<p>";
	}
}
?>
<p> To go to the users page
<input type=button onClick="location.href='users.php'" value='click here'></p>
<br> <br> <br> <br> <br> 
</div>
</body>
</html>