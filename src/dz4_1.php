<?php

/**
 * task4.1
 * Создать массив целых чисел. Написать функцию поиска самого большого числа.
 * Создать массив строк. Написать функцию поиска самой длинной строки по переданному массиву.
 */
/**
 * task4.2
 * 
 * Создать массив строк. Написать функцию, которая работает с одной строкой, считает встретившиеся там буквы.
 * 
 */
/**
 * task4.3
 * 
 * Попробовать реализовать fizzbuzz задачу с чтением из файла результата, но без циклов, заменяя циклы на 
 * функцию array_map. Для этого придется изучить вопросы замыканий в php...
 * 
 */

/**
 * @param string $filePath
 * 
 * @return array
 */

 $arrayOfIntegers;
 $maxNumberOfArray=0;
 $count=0;

 while(true){

 
    $count++;
    $arrayOfIntegers[$count]=mt_rand(1,30);

    if($count == 50 ){
       break;
    }

 }

 //var_dump($arrayOfIntegers);

/**
 * @param array $arrayOfIntegers
 * @param int $maxNumberOfArray
 * @return integer
 */

 function searchOfArrayMaxNumber (array $arrayOfIntegers, int $maxNumberOfArray=0): int{

 foreach($arrayOfIntegers as $key => $number ){

    if($number>$maxNumberOfArray){

        $maxNumberOfArray=$number;
    }
 }  

 return $maxNumberOfArray;

 }

 /**
 * @param string $arrayOfString, $stringOfMaxSizeOfArray;
 * 
 * @return string
 * 
 * 
 */

 $arrayOfString = array ('apple', 'SuperSony1111', 'LG', 'D-link', 'Intel', 'HP', 'Asus', 'Lenovo');
 $stringOfMaxSizeOfArray;

 function searchMaxSizeStringOfArray(
    array $arrayOfString, 
    string $stringOfMaxSizeOfArray = ''
    ): string{

    foreach( $arrayOfString as $key=>$string ){

        echo $arrayOfString[$key].PHP_EOL;
        
        if($key==0){

            $stringOfMaxSizeOfArray=$arrayOfString[$key];
        }
        
        if(strlen($arrayOfString[$key])>strlen($stringOfMaxSizeOfArray)){

            $stringOfMaxSizeOfArray=$arrayOfString[$key];
        }
       
    }

    return $stringOfMaxSizeOfArray;
 }

 
 $maxNumberOfArray=searchOfArrayMaxNumber($arrayOfIntegers);

 echo " Max number : $maxNumberOfArray".PHP_EOL; 



 echo " __________________________________________________".PHP_EOL; 

 $stringOfMaxSizeOfArray = searchMaxSizeStringOfArray($arrayOfString);
 
 echo 'String Of Max Size Of Array   - '.$stringOfMaxSizeOfArray.PHP_EOL; 