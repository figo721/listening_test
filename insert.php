<!-- This page is to query the database to update the filed of privacy which is from the page of "Intro_policy_web-based.php"  -->
<?php include "connection.php";
session_start();

$policy_agreement =  $_REQUEST['policy_privacy'];

$sql = "UPDATE usertable SET Agreement = '$policy_agreement'
WHERE (email = 'echo $_SESSION[email]')";


# If the input value is "Agree -> redirect to "annotation_task.php"
# Other input values --> reload the same page with an alert message.

if ($policy_agreement === "Please Choose An Answer" || $policy_agreement === "Disagree"){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please choose Agree to proceed!');
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