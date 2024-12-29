<?php

try {
    throw new Exception("Тестовое исключение");
} catch (Exception $e) {
    echo "Исключение поймано: " . $e->getMessage();
}
