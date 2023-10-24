<?php 

$day= "Tuesday";

function whatIsTheDay(&$day)
{
    $day= "Wednesday";
    return  "Today is:  $day";
}


 
whatIsTheDay($day);

print $day; 
