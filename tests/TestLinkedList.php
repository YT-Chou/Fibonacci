<?php
declare(strict_types=1);
namespace UnitTest;

use Taylor\DataStructure\LinkedList;
use Taylor\DataStructure\Stack;
use Taylor\DataStructure\Queue;

use PHPUnit\Framework\TestCase;

final class LinkedListTest extends TestCase
{
    public function testLinkedList()
    {
        $aList = new LinkedList();
        $expected = true;
        $result = $aList->isEmpty();
        $this->assertEquals($expected, $result); // true Empty

        $aList->pushFront(1);
        $this->assertEquals(1, $aList->getFront()); // front should be 1
        $this->assertEquals(1, $aList->getEnd());   // end should be 1
        
        $expected = false;
        $result = $aList->isEmpty();
        $this->assertEquals($expected, $result); // false not Empty

        $aList->deleteEnd();
        $expected = true;
        $result = $aList->isEmpty();
        $this->assertEquals($expected, $result);// true Empty
    }

    public function testStack()
    {
        $aStack = new Stack();
        $aStack->push(21);
        $aStack->push(22);
        $aStack->push(23);
        $aStack->push(24);
        $this->assertEquals(24, $aStack->pop());// correct pop

        $expected = array(23,22,21);
        $result = array();
        while (!$aStack->isEmpty()) {
            array_push($result, $aStack->pop());
        }
        $this->assertEquals($expected, $result); // correct order

        $expected = true;
        $result = $aStack->isEmpty();
        $this->assertEquals($expected, $result);// true Empty
    }
    
    public function testQueue()
    {
        $aQueue = new Queue();
        $aQueue->push(21);
        $aQueue->push(22);
        $aQueue->push(23);
        $aQueue->push(24);
        $this->assertEquals(21, $aQueue->pop());// correct pop

        $expected = array(22,23,24);
        $result = array();
        while (!$aQueue->isEmpty()) {
            array_push($result, $aQueue->pop());
        }
        $this->assertEquals($expected, $result); // correct order

        $expected = true;
        $result = $aQueue->isEmpty();
        $this->assertEquals($expected, $result);// correct Empty
    }
}
