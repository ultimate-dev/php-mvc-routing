<?php
require __DIR__ . '/netting/db.php';
require __DIR__ . '/route.php';
require __DIR__ . '/controller.php';

Route::run('/', function () {
    echo "merhaba";
});

Route::run('/test', 'test@index');

