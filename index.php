<?php
require __DIR__ . '/vendor/autoload.php';

const STATUS_NOT_FOUND = 404;
const STATUS_BAD_REQUEST = 400;
const STATUS_INTERNAL_SERVER_ERROR = 500;

$request = $_SERVER['REQUEST_URI'];
require  __DIR__ . '/handlers/categories.php';