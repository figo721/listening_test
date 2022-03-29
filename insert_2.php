<!-- This page is to update user input values from the page of "demographic.php" page to the databse -->

<?php include "connection.php";
session_start();

# To call the values from the page of "demographic.php"
$Gender = $_REQUEST['demographic_1'];
$Age =  $_REQUEST['demographic_2'];
$Download = $_REQUEST['demographic_3'];
    
// Performing insert query execution
$sql = "UPDATE usertable SET gender = '$Gender', age = '$Age', download = '$Download' WHERE (email = '$_SESSION[email]')";

# When all the questions are not answered properly, redirect to the samge page ("demographic.php").
if ($Gender ==='Please Choose An Answer' || $Age === 'Please Choose An Answer' || $Download === 'Please Choose An Answer')
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('You did not answer the question!!');
    window.location.href='./demographic.php';
    </script>");
}

# When all questions are answered correctly, stored the input values and then redirect to the page for the BIGFIVE questions.
else{
    if (mysqli_query($con, $sql)){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Saved Succesfully');
        window.location.href='./select-test.php';
        </script>");
        exit();
    }
    else{
        echo "Error: Hush! Sorry $sql. "
        .mysqli_error($con);
    }
    }
    
    mysqli_close($con);
    ?>