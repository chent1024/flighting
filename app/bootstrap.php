<?php
require_once ROOT_PATH.DS.'vendor/autoload.php';

// 路由
require_once ROOT_PATH.DS.'routes/web.php';

$app = app();
//$app->log()->init();

// Display custom 404 page
//$app->map('notFound', function(){
//    include 'errors/404.html';
//});

return $app;