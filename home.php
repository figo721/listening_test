<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <!-- Direct to online-based version page-->
     <a href="./Intro_policy_web-based.php">Online Version</a><br><br>
     
     <!-- Direct to onsite-based version page-->
     <a href="./on-site.php">On-Site Version</a>
</body>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
