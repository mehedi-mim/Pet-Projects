<?php
include_once 'Here/dbh.inc.php';
?>
<?php
  session_start();
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
     	<link rel="stylesheet" type="text/css" href="assets/Pay/style.css"> 
	
</head>
<body>
  <div class="topnav" id="myTopnav">
              
 <a class="active" href="http://localhost/Webwork/indexx.html">Home</a>
                     <a href="DonarBook.php">GIVE DATA</a>
				     </div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3
		
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	Welcome <strong><?php echo $_SESSION['username']; ?></strong><br>
    	 <a href="index.php?logout='1'" style="color: red;">logout</a>
    <?php endif ?>
</div>

<br>
<h3> Select Your Needed Blood Group </h3>
<form method = "GET"> 
<select name = 'blood'style = "background-color:white;color:#000000;padding:5px 10px;">
<option > None</option>
<option>  A+</option>
   <option>B+ </option>
   <option>AB+ </option>
   <option>O+ </option>
   <option>A- </option>
   <option>B-</option>
   <option>AB-</option>
   <option>O-</option>
</select>
<br>
<button type = "submit" name = "submit" value = "submit" style = "background-color:white;color:#000000;padding:5px 10px;">Submit </button>
</form>
<hr>
<?php
if(isset($_GET["submit"])){
	$kichai = $_GET['blood'];
$sql = "SELECT * FROM maindata WHERE user_blood = '$kichai';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
	$i = 0;
	echo "<u><strong> People Who have ".$kichai ." Blood Group <br></strong></u> <p></p>";
	while($row = mysqli_fetch_assoc($result)){
		$i++;
		 echo $i .".";
		 echo $row['user_name']."______";
		 echo $row['user_phn']."_______("; 
		 echo $row['user_blood'].")______"; 
		 echo $row['user_occu'].".<br>"; 
	}
}
else echo "No Data Found";

}

?>
</body>
</html>
