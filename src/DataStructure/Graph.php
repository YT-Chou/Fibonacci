<?php
declare(strict_types=1);
namespace Taylor\DataStructure;

class Graph
{
    // 2D array, 0 or null: not linked 1: linked, undirected.
    public $linkMatrix;
    public $nodeArray;// 1D array, Weight or Value
    private $visited; // 1D array
    private $itineraryNode;   // travelled ordered result, present By Node Number
    private $itineraryValue; // travelled ordered result, present By Weight or Value

    public function showTrip()
    {
        print_r($this->itineraryNode);
    }
    public function returnTrip()
    {
        return $itineraryNode;
    }

    public function __construct(int $numOfNodes)
    {
        $this->reset($numOfNodes);
    }
    private function reset(int $n)
    {
        $this->itineraryNode = array();
        $this->visited =array();
        $this->itineraryValue = array();
        for ($i = 0; $i < $n; $i++) {
            $this->visited[$i] = 0;
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
    }
}
