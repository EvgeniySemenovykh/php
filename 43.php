<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN
function getHiddenCard($cardNumber, $starsCount = 4)
{
    $visibleDigitsLine = substr($cardNumber, 12);
    return str_repeat('*', $starsCount) . $visibleDigitsLine;
}
// END

/*Реализуйте функцию getHiddenCard(), который принимает на вход номер кредитки (состоящий из 16 цифр) в виде строки и возвращает его скрытую версию,
которая может использоваться на сайте для отображения.
Если исходная карта имела номер 2034399002125581, то скрытая версия выглядит так ****5581.
Другими словами, функция заменяет первые 12 символов, на звездочки. Количество звездочек регулируется вторым необязательным параметром. Значение по умолчанию — 4.*/