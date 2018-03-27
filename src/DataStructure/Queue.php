<?php
namespace Taylor\DataStructure;

class Queue extends LinkedList
{
    public function top():int
    {
        return $this->getFront();
    }

    public function push(int $input)
    {
        $this->pushEnd($input);
    }

    public function pop():int
    {
        $temp = $this->top();
        $this->deleteFront();
        return $temp;
    }
}
