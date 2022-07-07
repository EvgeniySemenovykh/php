<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN
function isPalindrome($word)
{
    $lowerWord = strtolower($word);
    return $lowerWord === strrev($lowerWord);
}

function isNotPalindrome($word)
{
    return !isPalindrome($word);
}
// END

/*1.Реализуйте функцию isPalindrome(), которая определяет, является ли слово палиндромом или нет.
Палиндром это слово, которое читается одинаково в обоих направлениях.
Для того чтобы развернуть слово задом наперёд используйте функцию strrev().
2.Реализуйте функцию isNotPalindrome(), которая проверяет что слово НЕ является палиндромом.
Для этого, вызовите функцию isPalindrome() внутри isNotPalindrome() и примените отрицание.*/