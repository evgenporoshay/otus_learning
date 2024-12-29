<?php
return array (
    'cache_flags' =>
        array (
            'value' =>
                array (
                    'config_options' => 3600.0,
                ),
            'readonly' => false,
        ),
    'cookies' =>
        array (
            'value' =>
                array (
                    'secure' => false,
                    'http_only' => true,
                ),
            'readonly' => false,
        ),
    'exception_handling' =>
        array (
            'value' =>
                array (
                    'debug' => true,
                    'handled_errors_types' => 4437,
                    'exception_errors_types' => 4437,
                    'ignore_silence' => false,
                    'assertion_throws_exception' => true,
                    'assertion_error_type' => 256,
                    'log' =>
                        array (
                            'file' => '/logs/'.date("Y-m-d").'.log',
                            'log_size' => 1000000,
                        ),
                ),
            'readonly' => false,
        ),
    'connections' =>
        array (
            'value' =>
                array (
                    'default' =>
                        array (
                            'host' => 'localhost',
                            'database' => 'cj66659_bitrix',
                            'login' => 'cj66659_bitrix',
                            'password' => 'Tuz72$tvola!',
                            'options' => 2.0,
                            'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
                        ),
                ),
            'readonly' => true,
        ),
    'crypto' =>
        array (
            'value' =>
                array (
                    'crypto_key' => '9fc94a6806d2b4678839e10552375d5b',
                ),
            'readonly' => true,
        ),
);
