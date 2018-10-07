<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 07.10.2018
 * Time: 11:30
 */

include 'Stack.php';

$stack = new Stack(5, array(1,2,3,4,5));
print $stack->stackSize();
print $stack->top();
$stack->pop();
print $stack->top();
