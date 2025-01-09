<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION ->SetTitle('Вывод связанных полей');

use Bitrix\Main\Loader;
use Bitrix\Iblock\Iblock;

CIBlockResult
CIBlockElement::GetList(
    array arOrder = Array("SORT"=>"ASC"),
        array arFilter = Array(),
            mixed arGroupBy = false,
	mixed arNavStartParams = false,
	array arSelectFields = Array()
    );

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');