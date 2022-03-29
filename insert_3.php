<!-- This page is to get user input values from the "bigfive.php" page and then update the values at the database. -->

<?php include "connection.php";
session_start();

$Bigfive_1 = $_REQUEST['bigfive-1'];
$Bigfive_2 = $_REQUEST['bigfive-2'];
$Bigfive_3 = $_REQUEST['bigfive-3'];
$Bigfive_4 = $_REQUEST['bigfive-4'];
$Bigfive_5 = $_REQUEST['bigfive-5'];
$Bigfive_6 = $_REQUEST['bigfive-6'];
$Bigfive_7 = $_REQUEST['bigfive-7'];
$Bigfive_8 = $_REQUEST['bigfive-8'];
$Bigfive_9 = $_REQUEST['bigfive-9'];
$Bigfive_10 = $_REQUEST['bigfive-10'];


// Performing insert query execution
$sql = "UPDATE usertable 
SET bigfive_1_new = '$Bigfive_1', 
bigfive_2_new = '$Bigfive_2', 
bigfive_3_new = '$Bigfive_3',
bigfive_4_new = '$Bigfive_4', 
bigfive_5_new = '$Bigfive_5', 
bigfive_6_new = '$Bigfive_6', 
bigfive_7_new = '$Bigfive_7', 
bigfive_8_new = '$Bigfive_8',
bigfive_9_new = '$Bigfive_9', 
bigfive_10_new = '$Bigfive_10'
WHERE (email = '$_SESSION[email]')";

// create an array of the input vaule in the Big-Five questions.
$data_array = array(
    $Bigfive_1,
    $Bigfive_2,
    $Bigfive_3,
    $Bigfive_4,
    $Bigfive_5,
    $Bigfive_6,
    $Bigfive_7,
    $Bigfive_8,
    $Bigfive_9,
    $Bigfive_10);

$num_elements = count($data_array);

# When three input values in a row have "zero"s, an alert message pop-up and reload the annotation_task page for re-try.
for($i = 0; $i< $num_elements-1; $i++){
    if ($data_array[$i]===$data_array[$i+1]){
        if ($data_array[$i+1]===$data_array[$i+2]){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Please answer each question properly!');
            window.location.href='./bigfive.php';
            </script>");
            exit();
        }
    }
}
# When a user answers all the questions properly, the input values are stored to the databse.
# redirect to the page of "thank_you.php" to finish the listening test.
$result = mysqli_query($con, $sql);
if ($result){
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


mysqli_close($con);
?>

