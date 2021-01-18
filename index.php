<?php

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '' :
    case '/' :
        require __DIR__ . '/pages/home.html';
        break;
    default:
        http_response_code(404);
        break;
}
