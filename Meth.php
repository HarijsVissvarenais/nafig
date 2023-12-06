<?php 
Class Meth {
    static function addTwo($a,$b) {
        return $a + $b ."<br>";
    }
    //----------------------------------
    static function factiorial($n) {
        $factorials = 1;
        for ($i = $n; $i >=1; $i--) {
            $factorials=$factorials*$i;
        }
        echo "Faktorials no $n ir $factorials <br>";
    }
    //----------------------------------
    static function sum($masivs) {
        $sum = 0;

        foreach($masivs as $i) {
            $sum = $sum + $i;
        }
     return $sum;
    }
    //----------------------------------
    static function average($masivs) {
      return array_sum($masivs)/count($masivs);
    }
    static function average2($masivs) {
        $sum = 0;
        $skaits = 0;
        foreach($masivs as $i) {
            $sum = $sum + $i;
            $skaits= $skaits + 1; 
        }
        return $sum / $skaits;  
    }
    //-----------------------------------
    static function max($masivs) {
        foreach($masivs as $i){}
        if($masivs>)
    }
        return
    }
}

?>