<?php
require_once 'PageController.php';

// Route the request to the appropriate controller method based on the URL
function route($url)
{
    switch ($url) {
            //The first 3 cases are custom to local server so the urls must be set for each server
        case '/projects/kayfa_projects/ARMP_test/':
        case '/Projects/kayfa_projects/ARMP_test/index.php':
        case 'C:\xampp\htdocs\Projects\kayfa_projects\ARMP_test\index.php':
        case '/':
            return PageController::index();
            //The first 3 cases are custom to local server so the urls must be set for each server
        case '/projects/kayfa_projects/ARMP_test/folder1':
        case '/Projects/kayfa_projects/ARMP_test/index.php/folder1':
        case 'C:\xampp\htdocs\Projects\kayfa_projects\ARMP_test\index.php/folder1/':
        case '/folder1/':
            return PageController::folder1();
            //The first 3 cases are custom to local server so the urls must be set for each server    
        case '/projects/kayfa_projects/ARMP_test/folder2':
        case '/Projects/kayfa_projects/ARMP_test/index.php/folder2':
        case 'C:\xampp\htdocs\Projects\kayfa_projects\ARMP_test\index.php/folder2/':
        case '/folder2/':
            return PageController::folder2();
        default:
            return '404 Not Found';
    }
}
