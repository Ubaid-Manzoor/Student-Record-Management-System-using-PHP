<?php 

    function inputString($str , $replaceValue, $replaceWith){
        $index = 0;
        for($i = 0 ; $i < strlen($str) ; $i++){
            if($str[$i] == $replaceValue){
                $str = substr_replace($str , $replaceWith[$index] , $i , 1);
                $index += 1;
            }
            if($index > count($replaceWith)-1){
                return $str;
            }
        }
    }

    function spaces($str , $count){
        if($count == 1){
            return "<br>" . $str;
        }else if($count == 2){
            return "<br>" . $str . "<br>";
        }else{
            return $str . "<br>";
        }
    }
?>