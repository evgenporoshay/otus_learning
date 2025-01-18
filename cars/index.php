<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle('Вывод связанных полей');

use Bitrix\Main\Loader;
use Bitrix\Iblock\Iblock;
Loader::includeModule('iblock');

$iblockId = 16;
$iblockElementId = 44;

// Old API
/*$arFilter = ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'];
$arSelect = ['ID', 'NAME', 'CODE', 'PROPERTY_MODEL'];
$res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
while($arFields = $res->fetch()){
    pr($arFields);
}


$arFilter = ['IBLOCK_ID' => $iblockId];
$arSelect = ['NAME'];
$rsSect = CIBlockSection::GetList(['left_margin' => 'asc'], $arFilter, false, $arSelect, false);
while ($arSect = $rsSect->fetch())
{
    pr($arSect);
}


$arElementProps = [
    'MODEL' => 'X5',
];

$arIblockFields = [
    'IBLOCK_ID' => $iblockId,
    'NAME' => 'New element',
    'PROPERTY_VALUES' => $arElementProps
];
$objIblockElement = new \CIBlockElement();
$objIblockElement->Add($arIblockFields);*/



// ORM

//get by id
$iblock = Iblock::wakeUp($iblockId);
$element = $iblock->getEntityDataClass()::getByPrimary($iblockElementId)->fetchObject();

// get props
$element = $iblock->getEntityDataClass()::getByPrimary(
	$iblockElementId,
	['select' => ['NAME', 'MODEL']])
->fetchObject();

$name = $element->get('NAME');
echo 'NAME: ';
pr($name);

$model = $element->get('MODEL')->getValue();
echo 'MODEL: ';
pr($model);


// get list
/*$elements = \Bitrix\Iblock\Elements\ElementCarTable::getList([ // car - cимвольный код API инфоблока
    'select' => ['MODEL'], // имя свойства
])->fetchCollection();

foreach ($elements as $element) {
    pr('MODEL - '.$element->getModel()->getValue()); // получение значения свойства MODEL
}

// получение через query списка элементов
$elements = \Bitrix\Iblock\Elements\ElementCarTable::query() // car - cимвольный код API инфоблока
    ->addSelect('NAME')
    ->addSelect('MODEL') // имя свойства
    ->addSelect('ID')
    ->fetchCollection();

foreach ($elements as $key => $item) {
    pr($item->getName().' '.$item->getModel()->getValue()); // получение значения свойства MODEL
    // $value = $item->getModel()->getValue();
    // if($value == 'Q7'){
    //         $item->setModel('Q7 TEST'); // изменение значения свойства MODEL
    //         $item->save(); // сохранение данных
    // }
}*/


