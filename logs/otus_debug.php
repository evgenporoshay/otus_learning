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

$lines = explode("\n", $message);

foreach ($lines as &$line) {
    $line = 'OTUS - ' . $line;
}
// Закрываем файл
fclose($fileHandle);

<<<<<<< HEAD
echo "Запись в лог выполнена.";
?>
=======
// Возвращаем ответ клиенту
header('Content-Type: text/plain');
echo "Текущая дата и время успешно записаны в файл $fileName.";
>>>>>>> 9c0b1901a7781eacc7be756d8594837bc14e0082
