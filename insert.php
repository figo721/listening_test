<!-- This page is to query the database to update the filed of privacy which is from the page of "Intro_policy_web-based.php"  -->
<?php include "config.php";
session_start();
$Privacy =  $_REQUEST['privacy'];

$sql = "UPDATE listening_test SET privacy = '$Privacy' WHERE (username = 'echo $_SESSION[username]')";

# If the input value is "Agree -> redirect to "annotation_task.php"
# Other input values --> reload the same page with an alert message.

if ($Privacy === "Please Choose An Answer"){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('You did not answer the question!!');
    window.location.href='./Intro_policy_web-based.php';
    </script>");
    exit();
}
elseif ($Privacy === "Disagree"){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please choose Agree to proceed!!');
    window.location.href='./Intro_policy_web-based.php';
    </script>");
    exit();
}
else{
    if (mysqli_query($con, $sql)){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Saved Succesfully');
        window.location.href='./annotation_task.php';
        </script>");
        exit();
    }

}
mysqli_close($con);
?>