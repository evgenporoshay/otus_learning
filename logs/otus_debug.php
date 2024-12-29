<?php
// Определяем имя файла лога
$logFile = '../local/'. date('d-m-Y') . '.log';

// Получаем текущую дату и время
$dateTime = date('Y-m-d H:i:s');

// Формируем строку для записи в лог
$logEntry = "OTUS - {$dateTime}\n";

// Открываем файл в режиме добавления и записи
$fileHandle = fopen($logFile, 'a') or die("Не удалось открыть файл!");

// Записываем строку в файл
fwrite($fileHandle, $logEntry);

// Закрываем файл
fclose($fileHandle);

echo "Запись в лог выполнена.";
?>
