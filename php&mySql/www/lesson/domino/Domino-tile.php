<?php
function var_dump_pre($v)
{
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
};

//  class for make object 
class DominoTile{
       public string $type;
       public  int $firstGroup;
       public  int $secondGroup;

    // function 
    public function printDominoTile( ){

    }
    // function 
    public function swap(){
        $tempVar = $this->secondGroup;
        $this->secondGroup = $this->firstGroup;
        $this->firstGroup = $tempVar;
    }
    // function 
    public function compareLeft(DominoTile $t){
        if(($this->firstGroup === $t->firstGroup) or ($this->secondGroup === $t->firstGroup))return true;
        return false;
    }
    // function 
    public function compareRight(){
        if(($this->firstGroup === $t->secondGroup) or ($this->secondGroup === $t->secondGroup))return true;
        return false;
    }

};


// $d1 = new DominoTile;
// var_dump_pre($d1);
// $d2 = new DominoTile;
// $d2->firstGroup = 2;
// $d2->secondGroup = 4;

// $d1->type = "Horizontal";

// // var_dump_pre($d1);
// // var_dump_pre($d2);
// $d1->firstGroup = 0;
// $d1->secondGroup = 5;

// var_dump_pre($d1);
// $d1->swap();

// var_dump_pre($d1);
?>