<?php
// входные данные
$arrayDefault = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];

//1.без использования стандартных функций PHP для работы с массивами (array_*);
// Ожидаемый результат:[1, 9, 25, 49, 81]


/**
 * @param array $evenNumbers
 *
 * @return array|Generator
 */
//фунция сортирует oddNumbersArray и возращает ожидаемый результат
function oddNumbersArray(array $evenNumbers): Generator
{
    $n = sortMy($evenNumbers);
    foreach ($n as $number){
        $square = $number * $number;
        ($square & 1) ? yield $square : null ;
    }

}

/**
 * @param array $array
 *
 * @return array
 */
function sortMy(array $array): array
{
    $count = count($array);
    $iterations = $count - 1;
    
    for ($i=0; $i < $count; $i++) {
        for ($j=0; $j < $iterations; $j++) {
            if ($array[$j] > $array[($j + 1)]) {
                list($array[$j], $array[($j + 1)]) = array($array[($j + 1)], $array[$j]);
            }
        }
    }
    return $array;
}




// 2.с использованием штатных функций PHP для работы с массивами.

/**
 * @param array $array
 *
 * @return array
 */
function oddNumbersSortOrganic(array $array): array
{
    $array = array_filter($array, function ($arr){
        return $arr & 1;
    });
    sort($array);
    return array_map(function ($arr){
        return $arr * $arr;
    }, $array);
}

