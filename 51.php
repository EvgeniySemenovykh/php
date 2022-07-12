<?php

namespace HexletBasics\Logic\WeakTyping;

// BEGIN 
function isFalsy($test)
{
    return $test == false;
}
// END

/*Напишите функцию isFalsy(), которая проверяет, трактуется ли переданное значение как ложное с точки зрения PHP.
Для выполнения этой проверки вам понадобится сравнить false с переданным значением, используя ==.*/