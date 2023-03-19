<?php
/**
 * task4.2
 * 
 * Создать массив строк. Написать функцию, которая работает с одной строкой, считает встретившиеся там буквы.
 * 
 */
$arrayOfString = array ('apple1', 'apple2', 'apple3', 'apple4');

 function StringOfArray (array $arrayOfString): void{
 
   // var_dump($arrayOfString);
    for (  $i = 0; $i < count($arrayOfString); $i++ ){

        $str = str_split($arrayOfString[$i]);
         
       
        for ( $j = 0; $j < count($str); $j++ ){
         

            echo  $str[$j].'  ';
       
            
       }
       echo PHP_EOL;
        
    }
 }

 $x=StringOfArray($arrayOfString);
 
 echo " __________________________________________________".PHP_EOL; 

 