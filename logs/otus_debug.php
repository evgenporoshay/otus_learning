<?php
// Получение текущей даты и времени
$dateTime = date('Y-m-d H:i:s');

// Имя файла для записи данных
$fileName = 'log.txt';

// Открываем файл для записи в конец
$handle = fopen($fileName, 'a') or die("Не удалось открыть файл!");

// Записываем текущую дату и время в файл
fwrite($handle, "$dateTime\n");

$lines = explode("\n", $message);

foreach ($lines as &$line) {
    $line = 'OTUS - ' . $line;
}
// Закрываем файл
fclose($handle);

// Возвращаем ответ клиенту
header('Content-Type: text/plain');
echo "Текущая дата и время успешно записаны в файл $fileName.";
