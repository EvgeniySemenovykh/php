<?php

namespace HexletBasics\Logic\LogicalOperators2;

// BEGIN
function isSoldier($armorColor, $shieldColor)
{
    return ($armorColor !== 'red' && $shieldColor === 'black');
}
// END

/*Напишите функцию isNeutralSoldier(), которая принимает на вход два аргумента:

1.Цвет доспехов (строка). Возможные варианты: red, yellow, black.
2.Цвет щита (строка). Возможные варианты: red, yellow, black.*/