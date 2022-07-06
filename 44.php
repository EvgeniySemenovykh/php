<?php

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

// BEGIN
function getAge($val)
{
    return floor($val);
}
// END

/*Реализуйте функцию getAge(), которая округляет возраст в нижнюю сторону. То есть если человеку десять с половиной лет, то функция должна вернуть 10.
Используйте для этого стандартную функцию floor(), которая округляет число в меньшую сторону.*/