<?php
require_once 'PageController.php';

// Route the request to the appropriate controller method based on the URL
function route($url)
{
    switch ($url) {
            //home
        case '/':
            return PageController::index();
            //folder 1
        case '/folder1/':
            return PageController::folder1();
            //folder2
        case '/folder2/':
            return PageController::folder2();
        default:
            return '404 Not Found';
    }
}
