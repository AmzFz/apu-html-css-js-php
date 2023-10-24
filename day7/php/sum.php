<?php 
require_once("config.php");
/*
echo "Enter your name: ";
$name = fgets(STDIN);
echo "Hello, " . $name;
print "*****************";
print "This program can do the sum of the number that you want to multiply.";
print "*****************";
*/


$message=<<< HERE

************************************\n
This programs do the multipication of \n 
the numbers given to it.\n
************************************\n

HERE;

print $message;
print "\n";
echo "What is your first number?";
$first_number=fgets(STDIN);


print "\n";
echo "What is your second number?";
$second_number=fgets(STDIN);

print "\n";
print "Your first number is :". $first_number ."\n";
print "Your second number is :". $second_number ."\n";
print "Multipication of both these numbers is :". doMultiplication($first_number,$second_number) ."\n"; 

fwrite(STDERR, "An error occurred.");