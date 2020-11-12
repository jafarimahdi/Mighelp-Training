<?php

    require_once "TileSet.php";
    class User{

        public string $name;
        public string $type;
        public TileSet $tiles; 

        public function __construct( string $name,string $type){
             $this->name =  $name;
             $this->type =  $type;
            $this->tiles = new TileSet;
        }
    }

        
            
    
?>
<!-- // create function for another tile set one or several tiles -->