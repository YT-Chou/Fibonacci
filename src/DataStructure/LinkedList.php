<?php
declare(strict_types=1);
namespace Taylor\DataStructure;

class LinkedList
{
    public $count ; // int
    private $firstNode; // Node
    private $lastNode; // Node


    public function __construct()
    {
        echo "constructed sucessfully, empty\n";
        $this->counts = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function getFront():int
    {
        if ($this->firstNode === null) {
            echo "empty";
        }
        return $this->firstNode->data;
    }

    public function getBack():int
    {
        if ($this->lastNode === null) {
            return $this->firstNode->data;
        }
    }

    public function pushFront(int $input)
    {
        $newNode = new Node($input);
        $current = null;
        if ($this->firstNode != null) {
            $current = $this->firstNode;
            $current->prev = $newNode;
        }
        $newNode->next = $current;
        $this->firstNode = $newNode;
        if ($newNode->next == null) {
            $this->lastNode = $newNode;
        }
    }

    public function pushEnd(int $input)
    {
        $newNode = new Node($input);
        $current = null;
        if ($this->lastNode != null) {
            $current = $this->lastNode;
            $current->next = $newNode;
        }
        $newNode->prev = $current;
        $this->lastNode = $newNode;
        if ($newNode->prev == null) {
            $this->firstNode = $newNode;
        }
    }

    public function pushAfter(Node $thisNode, int $input)
    {
        $newNode = new \Taylor\Node($input);
        $newNode->prev = $thisNode;
        $newNode->next = $thisNode->next;
        if ($thisNode->next != null) {
            $thisNode->next->prev = $newNode;
        }
        if ($thisNode->next == null) {
            $this->lastNode = $newNode;
        }
        $thisNode->next = $newNode;
    }

    public function isEmpty():bool
    {
        if ($this->firstNode == null) {
            return true;
        }
        return false;
    }

    public function deleteFront():int
    {
        if ($this->isEmpty()) {
            echo "Empty! Nothing to be deleted.";
            return 0;
        }
        if ($this->firstNode == $this->lastNode) {
            $this->firstNode = null;
            $this->lastNode = null;
            return 0;
        }
        $newFirst = $this->firstNode->next;
        $this->firstNode->next = null;
        $this->firstNode = $newFirst;
        if ($this->firstNode != null) {
            $this->firstNode->prev = null;
        }
        return 0;
    }

    public function deleteEnd():int
    {
        if ($this->isEmpty()) {
            echo "Empty! Nothing to be deleted.";
            return 0;
        }
        if ($this->firstNode == $this->lastNode) {
            $this->firstNode = null;
            $this->lastNode = null;
            return 0;
        }
        $newLast = $this->lastNode->prev;
        $this->lastNode->prev = null;
        $this->lastNode = $newLast;
        if ($this->lastNode !=null) {
            $this->lastNode->next = null;
        }
        return 0;
    }

    public function deleteThis(Node $thisNode):int
    {
        if ($thisNode->prev !=null) {
            $thisNode->prev->next = $thisNode->next;
        } else {
            return $this->deleteFront();
        }
        if ($thisNode->next !=null) {
            $thisNode->next->prev = $thisNode->prev;
        } else {
            return $this->deleteEnd();
        }
        return 0;
    }

    public function pushAfterKey(int $key, int $input)
    {
        if ($this->isEmpty()) {
            echo "empty and push directly";
            $this->pushEnd($input);
            return 0;
        }
        $current = $this->firstNode;
        while (1) {
            if ($current->data == $key) {
                echo "Push $input after key: $current->data \n";
                $this->pushAfter($current, $input);
                break;
            }
            if ($current == $this->lastNode) {
                echo "Push End \n";
                $this->pushEnd($input);
                break;
            }
            $current = $current->next;
        }
        return 0;
    }

    public function deleteByKey(int $key):int
    {
        if ($this->isEmpty()) {
            echo "Empty! Nothing to be deleted.";
            return 0;
        }
        $current = $this->firstNode;
        while (1) {
            if ($current->data == $key) {
                echo "delete $current->data \n";
                $this->deleteThis($current);
                break;
            }
            if ($current == $this->lastNode) {
                break;
            }
            $current = $current->next;
        }
        return 0;
    }

    public function printFromFirst()
    {
        echo "Forward:\n";
        if ($this->isEmpty()) {
            echo "Empty!\n";
            return;
        }
        $current = $this->firstNode;
        while (1) {
            echo $current->data;
            echo " ";
            if ($current == $this->lastNode) {
                break;
            }
            $current = $current->next;
        }
        echo "\n";
    }

    public function printFromLast()
    {
        echo "Backward:\n";
        if ($this->isEmpty()) {
            echo "Empty!\n";
            return;
        }
        $current = $this->lastNode;
        while (1) {
            echo $current->data;
            echo " ";
            if ($current == $this->firstNode) {
                break;
            }
            $current = $current->prev;
        }
        echo "\n";
    }
}
