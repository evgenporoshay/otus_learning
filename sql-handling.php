<?php

use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Loader;

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
/**
 * @var CMain $APPLICATION
 */

$APPLICATION->setTitle('Отладка SQL');

Loader::includeModule('iblock');

\Bitrix\Main\Application::getConnection()->setTracker();
$queryResult = \Bitrix\Iblock\ElementTable::getList([
    'filter' => [
        'IBLOCK_ID' => 3,
    ],
    'select' => [
        'ID'
    ],
]);
\Bitrix\Main\Application::getConnection()->stopTracker();
Debug::dump($queryResult->getTrackerQuery()->getSql());

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';