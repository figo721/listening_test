<!-- This page represents the website page when a user verified with an email address.  -->

<?php require_once "controllerUserData.php"; ?>
<?php require_once "connection.php";?>
<?php 

$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #1690A7;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    body {
            position: center;
            height: 100%;
            background-image: url("background.jpg");
            font-family: Helvetica, Arial, sans-serif;
            font-size: 20px;
            color: #000;
            margin: 0;
            padding: 0;
        }
    iframe.hidden
    {
    display:none
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">Listening Test</a>
    </nav>
    <h1>Successfully Activated!! <br><br>
    Welcome, <?php echo $fetch_info['email'] ?> <br><br>  
   <!-- The following code enables to generate of an individually randomized playlist -->
       <div class="control-group">

            <h3> Please Click the Begin button to generate your playlist</h3>
            <form action = "insert_playlist.php" method="POST">
                    <button style="height:70px;width:150px" type="submit" value="save">Begin</button>
            
            </form>

        </div>
    </h1><br><br>
   

</body>


</html>