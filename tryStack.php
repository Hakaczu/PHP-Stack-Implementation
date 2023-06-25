<?php
include 'Stack.php';

$stack = new Stack(5, array(1,2,3,4,5));
print $stack->stackSize();
print $stack->top();
$stack->pop();
print $stack->top();
