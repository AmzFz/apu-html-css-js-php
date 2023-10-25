<?php 
require_once("config.php");

/*
* This example shows how you can set row and col attributes
* with HTML_Table.
*/
// $Id: Table_example1.php 297540 2010-04-05 19:58:39Z wiesemann $

require_once 'HTML/Table.php';
$table = new HTML_Table('width = "400"');

$order= new Order();

$data= $order->getOrders();
foreach ($data as $key => $value) {
    $table->addRow($value);
}
print $table->toHTML();
?>

