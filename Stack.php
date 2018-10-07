<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 07.10.2018
 * Time: 10:58
 */

class Stack
{
    private $limit;
    private $stack;

    public function __construct(int $limit = 10, array $initial = array())
    {
        $this->limit = $limit;
        $this->stack = $initial;
    }

    public function push($item)
    {
        if(count($this->stack) < $this->limit)
        {
            array_push($this->stack,$item);
        }
        else
            {
                throw new RuntimeException('Stack is full!');
            }
    }

    public function pop()
    {
        if(count($this->stack) == 0)
        {
            throw new RuntimeException('Stack is empty!');
        }
        else
            {
                array_pop($this->stack);
            }
     }

     public function top()
     {
         return $this->stack[count($this->stack)-1];
     }

     public function stack()
     {
         return $this->stack;
     }

     public function stackSize()
     {
         return count($this->stack);
     }
}