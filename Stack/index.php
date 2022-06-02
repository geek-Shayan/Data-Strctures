<?php
//$_SERVER['POST'] == include 'raw_Stack.php';

require 'raw_Stack.php';
$Stack_S = new Stack(3);

$Stack_S->push(5);
$Stack_S->push(8);
//$Stack_S->pop();

$Stack_S->push(3);
$Stack_S->push(4);
$Stack_S->push(30);
$Stack_S->push(40);
$Stack_S->pop();


//$Stack_S->isEmpty();
//$Stack_S->peek();

$Stack_S->show();


?>