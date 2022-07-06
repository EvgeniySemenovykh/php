<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN
function truncate($str, $length)
{
    $cuttedString = substr($str, 0, $length);
    return "{$cuttedString}...";
}

// END

//Реализуйте функцию truncate(), которая обрезает переданную в функцию строку до указанного количества символов, добавляет в конце троеточие и возвращает получившуюся строку. 