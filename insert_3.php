<!-- This page is to get user input values from the "bigfive.php" page and then update the values at the database. -->

<?php include "config.php";
session_start();
$Bigfive_1 = $_REQUEST['big_five-1'];
$Bigfive_2 =  $_REQUEST['big_five-2'];
$Bigfive_3 = $_REQUEST['big_five-3'];
$Bigfive_4 = $_REQUEST['big_five-4'];
$Bigfive_5 = $_REQUEST['big_five-5'];
$Bigfive_6 = $_REQUEST['big_five-6'];
$Bigfive_7 = $_REQUEST['big_five-7'];
$Bigfive_8 = $_REQUEST['big_five-8'];
$Bigfive_9 = $_REQUEST['big_five-9'];
$Bigfive_10 = $_REQUEST['big_five-10'];
$Bigfive_11 = $_REQUEST['big_five-11'];
$Bigfive_12 = $_REQUEST['big_five-12'];
$Bigfive_13 = $_REQUEST['big_five-13'];
$Bigfive_14 = $_REQUEST['big_five-14'];
$Bigfive_15 = $_REQUEST['big_five-15'];
$Bigfive_16 = $_REQUEST['big_five-16'];
$Bigfive_17 = $_REQUEST['big_five-17'];
$Bigfive_18 = $_REQUEST['big_five-18'];
$Bigfive_19 = $_REQUEST['big_five-19'];
$Bigfive_20 = $_REQUEST['big_five-20'];
$Bigfive_21 = $_REQUEST['big_five-21'];
$Bigfive_22 = $_REQUEST['big_five-22'];
$Bigfive_23 = $_REQUEST['big_five-23'];
$Bigfive_24 = $_REQUEST['big_five-24'];
$Bigfive_25 = $_REQUEST['big_five-25'];


// Performing insert query execution
$sql = "UPDATE listening_test 
SET bigfive_1 = '$Bigfive_1', 
bigfive_2 = '$Bigfive_2', 
bigfive_3 = '$Bigfive_3',
bigfive_4 = '$Bigfive_4', 
bigfive_5 = '$Bigfive_5', 
bigfive_6 = '$Bigfive_6', 
bigfive_7 = '$Bigfive_7', 
bigfive_8 = '$Bigfive_8',
bigfive_9 = '$Bigfive_9', 
bigfive_10 = '$Bigfive_10', 
bigfive_11 = '$Bigfive_11', 
bigfive_12 = '$Bigfive_12', 
bigfive_13 = '$Bigfive_13', 
bigfive_14 = '$Bigfive_14', 
bigfive_15 = '$Bigfive_15', 
bigfive_16 = '$Bigfive_16', 
bigfive_17 = '$Bigfive_17', 
bigfive_18 = '$Bigfive_18', 
bigfive_19 = '$Bigfive_19', 
bigfive_20 = '$Bigfive_20', 
bigfive_21 = '$Bigfive_21', 
bigfive_22 = '$Bigfive_22', 
bigfive_23 = '$Bigfive_23', 
bigfive_24 = '$Bigfive_24', 
bigfive_25 = '$Bigfive_25' 
WHERE (username = '$_SESSION[username]')";

# Redirect current page when at least a question did not answer.
if ($Bigfive_1 === 'Please Choose An Answer' || $Bigfive_2 === 'Please Choose An Answer' || 
$Bigfive_3 === 'Please Choose An Answer' || $Bigfive_4 === 'Please Choose An Answer' || 
$Bigfive_5 === 'Please Choose An Answer' || $Bigfive_6 === 'Please Choose An Answer' || 
$Bigfive_7 === 'Please Choose An Answer' || $Bigfive_8 === 'Please Choose An Answer' || 
$Bigfive_9 === 'Please Choose An Answer' || $Bigfive_10 === 'Please Choose An Answer' || 
$Bigfive_11 === 'Please Choose An Answer' || $Bigfive_12 === 'Please Choose An Answer' || 
$Bigfive_13 === 'Please Choose An Answer' || $Bigfive_14 === 'Please Choose An Answer' || 
$Bigfive_15 === 'Please Choose An Answer' || $Bigfive_16 === 'Please Choose An Answer' || 
$Bigfive_17 === 'Please Choose An Answer' || $Bigfive_18 === 'Please Choose An Answer' || 
$Bigfive_19 === 'Please Choose An Answer' || $Bigfive_20 === 'Please Choose An Answer' || 
$Bigfive_21 === 'Please Choose An Answer' || $Bigfive_22 === 'Please Choose An Answer' || 
$Bigfive_23 === 'Please Choose An Answer' || $Bigfive_24 === 'Please Choose An Answer' || 
$Bigfive_25 === 'Please Choose An Answer')
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('You did not answer the question!!');
    window.location.href='./bigfive.php';
    </script>");
}
# redirect to the page of "thank_you.php" to finish the listening test.
else{
    if (mysqli_query($con, $sql)){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Saved Succesfully');
        window.location.href='./thank_you.php';
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