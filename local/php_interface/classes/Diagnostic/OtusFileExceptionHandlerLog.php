<?php

namespace classes\Diagnostic;
use Bitrix\Main\Diag\ExceptionHandlerFormatter;
use Bitrix\Main\Diag\FileExceptionHandlerLog;
use Bitrix\Main\Diag;
class OtusFileExceptionHandlerLog extends FileExceptionHandlerLog
{
    /**
     * @param $exception
     * @param $logType
     * @return void
     */
    public function write($exception, $logType)
{
    $text = ExceptionHandlerFormatter::format($exception);

    $context = [
        'type' => static::logTypeToString($logType),
    ];

    $logLevel = static::logTypeToLevel($logType);
    $message = "{date} - Host: {host} - {type} - {$text}\n";
    $lines = explode("\n", $message);

    foreach ($lines as &$line) {
        $line = 'OTUS - ' . $line;
}

    $message = implode("\n", $lines);
    $this->logger->log($logLevel,$message,$context);
}
}