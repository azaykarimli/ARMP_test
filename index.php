<?php
// Load the router
require_once 'route.php';

// Route the request and render the response
//echo route($_SERVER['PHP_SELF']);
echo route($_SERVER['REQUEST_URI']);
