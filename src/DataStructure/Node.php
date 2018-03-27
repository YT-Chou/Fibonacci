<?php
namespace Taylor\DataStructure;

class Node
{
    public $data; // int
    public $prev; // Node
    public $next; // Node
    public function __construct(int $input)
    {
        $this->data = $input;
        $this->prev = null;
        $this->next = null;
    }
}
