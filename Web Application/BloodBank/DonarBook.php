<!DOCTYPE html>
<html>
<?php
$profpic = "assets/img/222.jpg";
?>
<!DOCTYPE html>
<html>
<head>
  <title>DonarBook</title>
   <link rel="stylesheet" type="text/css" href="assets/Pay/style.css">
  <style type="text/css">
body {
background-image: url('<?php echo $profpic;?>');
}
</style>
</head>
<body>

  <div class="topnav" id="myTopnav">
              
 <a  href="http://localhost/Webwork/indexx.html">HOME</a>
                     <<a href="http://localhost/Webwork/login.php"target="_blank">SIGN IN</a>
					 <a href="http://localhost/Webwork/register.php" target="_blank">SIGN UP</a>
					 <a href="http://localhost/Webwork/index.php" target="_blank">SEE DATA</a>
				     </div>
<br>
<p> <strong> Fill Up the Form:  </strong></p>

<h3> Sample </h3>
<b>Full Name:<b/> <i> Mr X </i>
<br>
<b>Phone No:</b> <i>01XXXXXXXXX </i>
<br>
<b>Blood Group:</b><i> A+ / AB- or Something elses </i>
	<br>
<b>Occupation,Current District:</b> <i>Student,Patuakhali </i>
<br>
<section>
<form action = "Here/data.inc.php" method = "POST" style = "text-align:center" >

<div class="input-group" >
  	  <label style = "text-align:center">Full Name <br></label>
  	       <input type = "text" name = "user_name" placeholder = "Full name" style = "width:200px" >                    
 </div>
 <div class="input-group">
  	  <label style = "text-align:center">Phone Number <br></label>
  	      <input type = "text" name = "user_phn" placeholder = "Phone Number" style = "width:200px">                   
 </div>
 <div class="input-group">
  	  <label style = "text-align:center">Blood Group <br></label>
  	       <input type = "text" name = "user_blood" placeholder = "O+" style = "width:200px">                  
 </div>
 <div class="input-group">
  	  <label style = "text-align:center">Short Detail <br></label>
  	       <input type = "text" name = "user_detail" placeholder = "Occupation,Current District" style = "width:200px">                   
 </div>
<button type = "submit" name = "submit" style = "background-color:white;padding:10px 25px;font-size:16px;"> Submit </button>
</form>
</section>
 <div class="topnav" >
   <a href="https://mbasic.facebook.com/BloodbankPstu-175630816363889/?ref_component=mbasic_bookmark&ref_page=XMenuController" style="color:#FFFFFF;" "text-align:right" target="_blank">Facebook</a>
      </div>
</body>
</html>