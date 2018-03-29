<?php
declare(strict_types=1);
namespace Taylor\DataStructure;

class Graph
{
    public $linkMatrix;// 2D array, 0 or null: not linked 1: linked, undirected.
    public $nodeArray = [];// 1D array, Weight or Value
    private $visited; // 1D array, 0: not visited, 1: visited
    private $itineraryNode;   // travelled ordered result, present By Node Number
    private $itineraryValue; // travelled ordered result, present By Weight or Value

    public function showVisited():void
    {
        print_r($this->visited);
    }

    public function getItineraryNode():array
    {
        return $this->itineraryNode;
    }

    public function showTravel():void
    {
        print_r($this->itineraryNode);
    }
    

    public function setMatrix($inputMatrix):void
    {
        $this->linkMatrix = $inputMatrix;
        foreach ($inputMatrix as $key => $value) {
            $this->visited[$key] = 0;
        }
    }


    public function returnTrip()
    {
        return $this->itineraryNode;
    }

    public function __construct()
    {
        $this->itineraryNode = array();
        $this->itineraryValue = array();
    }

    public function reset()
    {
        $this->itineraryNode = array();
        $this->itineraryValue = array();
        foreach ($this->visited as $key => $value) {
            $this->visited[$key] = 0;
        }
    }

    public function dFT(int $startNode)
    {
        $this->visited[$startNode] = 1;
        array_push($this->itineraryNode, $startNode);

        foreach ($this->linkMatrix[$startNode] as $key => $value) {
            if ($value >0) { // link exists
                $neighbor = $key;
                if ($this->visited[$neighbor] === 0) {//unvisited
                    $this->dFT($neighbor);
                }
            }
        }
    }

    public function bFT(int $startNode)
    {
        $currentNode = $startNode;
        $targetQueue = new Queue();
        while (true) {
            if ($this->visited[$currentNode]===0) {
                $this->visited[$currentNode] = 1;
                array_push($this->itineraryNode, $currentNode);
                foreach ($this->linkMatrix[$currentNode] as $key => $value) {
                    if ($value >0) { // link exists
                        $neighbor = $key;
                        if ($this->visited[$neighbor] === 0) {//unvisited
                            $targetQueue->push($neighbor);
                        }
                    }
                }
            }
            if ($targetQueue->isEmpty()) {
                break;
            }

            $currentNode = $targetQueue->pop();
        }
    }
}
