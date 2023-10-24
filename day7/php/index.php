<?php 
require("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    print "My Title from PHP tag";
    ?></title>
</head>
<?php
require("style.php");
?>
<body>
<?php 

require_once("header.php");
require_once("header.php");

require_once("header.php");

require_once("header.php");

require_once("header.php");
/// Will only execute or included once. 

?>


    <div>
<?php 
/*



$name="Zareef";

print $name;
Print $Name; // Will not work, as variables are case sensitive.
print "My Name is ". $name;
print "My Name is $name";

$_first_name="First"; // Variables can start with _ and it can be put anywhere.
$53454name; // Variables can not start with a number

// This is single like comment.
$PhoneNumber="2353535";
//$pi="3.14";
$myNumber=3;
$ComparisonNumber=3;
// = is an assignent operator
// == is an equal sign operator
// === is also an equal sign operator but both values needs to be of the same type.

var_dump($myNumber);
var_dump($ComparisonNumber);

if($myNumber===$ComparisonNumber)
{
    print "I am Equal";
}else{

    print("I am not Equal");
}

// = is an assignent operator
// == is an equal sign operator
// === is also an equal sign operator but both values needs to be of the same type.

if(4==$myNumber) // TO avoid any eccidental equal sign error.




//$myNumber=3;
$myNumber="My Number";
var_dump($myNumber);

if($myNumber)
{
    print "I am Equal";
}else{

    print("I am not Equal");
}

//$myNumber="3";
$myNumber="3Anything"; // if we do type casting to integer, then initial number will be uesd and other part of string will be discarded.

//$myNumber="My Number is 3";




if((int)$myNumber===3)
{
    print "I am Equal";
}else{

    print("I am not Equal");
}

$myVariable="3Anything";

var_dump( $myVariable );

var_Dump( $myVariable ); // Will come to it later.

function myFunction() {

    print "I am anything";
}


$myVariable="3Anything";

var_dump( $myVariable );

var_Dump( $myVariable ); 


mYFuNction();

//();

// How to create a function. 

function myFunction($name) {
    
    return "My Name is $name";
//$sum=3+4;

}

$myName="Jhon";

$returnValue=myFunction($myName);
print $returnValue;

print myFunction("Arif");

*/






?>


</div>


<form action="form.php" method="get">
<div>
    <div id="container">
First Number <input type="text" name="first_number" value="0">

</div>
<div>Second Number   <input type="text" name="second_number" value="0">
</div>
<div>
 <input type="submit" value="Get Sum">
</div>
</div>
</form>
<br><br><br><br><br><br><br>

<?php 

function HelloGreeting()
{

    $CurrentHour= date("h");

    $CurrentHour="4";







  //  var_dump($CurrentHour);
  if($CurrentHour>6 && $CurrentHour< 12){
    print "Hello Good Morning!";
}elseif($CurrentHour> 12&& $CurrentHour< 20){
    print "Hello Good Afternoon!";
}elseif($CurrentHour> 20&& $CurrentHour< 24){
    print "Hello Good Night !! ! ";
}else
{
    print "I am not sure, how to deal with you, do you really ever sleep, or you are on a Netflix Review Job.";
}


}


//HelloGreeting();


function WhatIstheColorofFruit($fruit)
{

    /*
    if($fruit=="Apple")
    {
        print "Red Good";
    }elseif($fruit=="Banana")
    {
        print "Good Yellow";
    }elseif($fruit=="Berry")
    {
        print "Good Any color";
    }elseif($fruit=="Avacado")
    {
        print "Good durian yellow";
    }else
    {
        print "I can not see colors.";
    }

    */

switch($fruit) {  
    case "Apple":
        print "Red Good";
        break;
    case "Banana":
        print "Good Yellow";
        break;
    case "Berry":
        print "Good Any color";
        break;
    case "Avacado":
        print "Good durian yellow";
        break;
    case "Grape":
        print "Good Purpule";
        break;
    default:
        print "I can not see colors";
    }

}



$AllFruits=array(
    "Apple",
    "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango" , "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" , "Avacado",
    "Berry",
    "Banana",
    "Grape" ,
    "Kiwi",
    "Mango"

);

//var_dump($AllFruits);


//WhatIstheColorofFruit("Apple");

/*
for($i=0;$i<7;$i++)
{
    print $AllFruits[$i];
    print "<br>";
}

for($i=0;$i<count($AllFruits);$i++)
{
    print $AllFruits[$i];
    print "<br>";
}



foreach($AllFruits as $fruit){
    print $fruit."<br>";
}
*/


$AllFruitsUnique=array_unique($AllFruits);

foreach($AllFruitsUnique as $fruit){
    print $fruit."<br>";
}


//WhatIstheColorofFruit("Avacado");


?>

</body>
</html>
