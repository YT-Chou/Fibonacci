<?php
namespace Taylor\DataStructure;

class Stack extends LinkedList
{
    public function top():int
    {
        return $this->getFront();
    }

    public function push(int $input)
    {
        $this->pushFront($input);
    }

    public function pop():int
    {
        $temp = $this->top();
        $this->deleteFront();
        return $temp;
    }
}
