<?php
// Исходный текст
$text = "Первая строка.\nВторая строка.\nТретья строка.";

// Разбиваем текст на строки
$lines = explode("\n", $text);

// Добавляем слово "OTUS" в начало каждой строки
foreach ($lines as &$line) {
    $line = "OTUS " . $line;
}
unset($line); // Обязательно сбрасываем ссылку, чтобы избежать непредвиденных последствий

// Собираем строки обратно в единый текст
$result = implode("\n", $lines);

// Запись результата в файл
$fileName = 'output.txt';
file_put_contents($fileName, $result);

echo "Файл '$fileName' успешно создан!";
?>
