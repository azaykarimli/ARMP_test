<?php
// Controller class to handle requests
class PageController {
    // Controller method for the homepage
    public static function index() {
        $title = 'Homepage';
        $content = '<h1>Hi</h1><div>I\'m in the homepage</div>';
        return include 'view.php';
    }

    // Controller method for folder1
    public static function folder1() {
        $title = 'Folder 1';
        $content = '<h1>Hi</h1><div>I\'m in folder1</div>';
        return include 'view.php';
    }

    // Controller method for folder2
    public static function folder2() {
        $title = 'Folder 2';
        $content = '<h1>Hi</h1><div>I\'m in folder2</div>';
        return include 'view.php';
    }
}
?>
