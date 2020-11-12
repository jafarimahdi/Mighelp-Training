<?php

    function vd1r_dump_pre($v){
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
    }

    class Human{ 
        public string $name;
        public int $age;
        
    }

    // how to use it 

    $h = new Human();
    $h-> name= 'Ali';
    echo 'hello';
    
?>