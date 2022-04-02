<?php


function var_dump_pre($v){
    echo "<pre>";
    var_dump($v);
    echo "</pre>";

}

class DominoTile
{
    public string $type;
    public  int $firstGroup;
    public  int $secondGroup;
    public function __construct(int $first = 0, int $second =0){
        $this->firstGroup = $first;
        $this->secondGroup = $second;
        $this->type = "horizontal";

    }

    public function printDominoTile()
    {

    }
    public function swap()
    {
        $tempVar = $this->secondGroup;
        $this->secondGroup = $this->firstGroup;
        $this->firstGroup = $tempVar;


    }
    public function compareLeft(DominoTile $t){
        
        if(($this->firstGroup === $t->firstGroup) or ($this->secondGroup === $t->firstGroup)) return true;
        return false ;
    }
    public function compareRight(DominoTile $t){
        if(($this->firstGroup === $t->secondGroup) or ($this->secondGroup === $t->secondGroup)) return true;
        return false ;
    }




}


?>