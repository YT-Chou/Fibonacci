<?php
declare(strict_types=1);
namespace UnitTest;

use Taylor\DataStructure\Stack;
use Taylor\DataStructure\Queue;
use Taylor\DataStructure\Graph;

use PHPUnit\Framework\TestCase;

final class GraphTest extends TestCase
{
    public function testDFT0()
    {
        $aGraph = new Graph();
        $aGraph->setMatrix(array(
        array(0,1,0,1,1),
        array(1,0,1,0,0),
        array(0,1,0,1,1),
        array(1,0,1,0,0),
        array(1,0,1,0,0)
        ));
        $aGraph->dFT(0);

        $expectedArray = array(0,1,2,3,4);
        $outputArray = $aGraph->getItineraryNode();
        $this->assertEquals($expectedArray, $outputArray);
    }

    public function testDFT1()
    {
        $aGraph = new Graph();
        $aGraph->setMatrix(array(
        array(0,1,0,1,1),
        array(1,0,1,0,0),
        array(0,1,0,1,1),
        array(1,0,1,0,0),
        array(1,0,1,0,0)
        ));
        $aGraph->dFT(1);
        $expectedArray = array(1,0,3,2,4);
        $outputArray = $aGraph->getItineraryNode();
        $this->assertEquals($expectedArray, $outputArray);
    }
    
    public function testBFT0()
    {
        $aGraph = new Graph();
        $aGraph->setMatrix(array(
            array(0,1,0,1,1),
            array(1,0,1,0,0),
            array(0,1,0,1,1),
            array(1,0,1,0,0),
            array(1,0,1,0,0)
            ));
        $aGraph->bFT(0);
        $expectedArray = array(0,1,3,4,2);
        $outputArray = $aGraph->getItineraryNode();
        $this->assertEquals($expectedArray, $outputArray);
    }

    public function testBFT1()
    {
        $aGraph = new Graph();
        $aGraph->setMatrix(array(
            array(0,1,0,1,1),
            array(1,0,1,0,0),
            array(0,1,0,1,1),
            array(1,0,1,0,0),
            array(1,0,1,0,0)
            ));
        $aGraph->bFT(1);
        $expectedArray = array(1,0,2,3,4);
        $outputArray = $aGraph->getItineraryNode();
        $this->assertEquals($expectedArray, $outputArray);
    }
}
