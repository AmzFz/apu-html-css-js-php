<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<?php
include("style.php");
?>
<body>

<?php 

include("header.php");

?>


<div>
    Result : 

<?php 

function getSumofTwoNumber($number1=0, $number2=0) 
{
    return $number1 + $number2;
}

//$number1=$_GET['first_number']; // For get method of the form
//$number2=$_GET['second_number'];

//var_dump($_SERVER['REQUEST_METHOD']);
//$number1=$_POST['first_number'];  // Post method of the form
//$number2=$_POST['second_number'];

$number1=$_REQUEST['first_number'];  // Post method of the form
$number2=$_REQUEST['second_number'];


print getSumofTwoNumber($number1, $number2);
    ?>
</div>

</body>
</html>

