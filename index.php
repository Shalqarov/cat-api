<?php
require __DIR__ . '/vendor/autoload.php';
const STATUS_NOT_FOUND = 404;
const STATUS_BAD_REQUEST = 400;
const STATUS_INTERNAL_SERVER_ERROR = 500;
$path = str_replace('/', DIRECTORY_SEPARATOR, __DIR__);
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/':
        require $path . '/routes/main_page.php';
        break;
    case '/test':
        require $path . '/routes/test.php';
        break;
    default:
        http_response_code(404);
        break;
}
