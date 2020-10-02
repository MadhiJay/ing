<?php 
session_start();

require_once('connection/connection.php');
require_once('functions/function.php');
if(isset($_COOKIE['user_email'])){
    if(!isset($_SESSION['current_user_email'])){
        $_SESSION['current_user_email']=$_COOKIE['user_email'];
    }
}
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
    switch ($request_uri[0]) {
        case '/':
            login();
            break;
        case '/signup':
            require 'views/signup.php';
            break;
        case '/profile':
            get_user_profile();
            break;
        case '/login':
            login();
            break;
        case '/register':
            register();
            break;
        case '/home':
            require 'views/home.php';
            break;
        case '/editprofile':
            require 'views/editprofile.php';
            break;
        case '/create_events':
            require 'views/comments.php';
            break;
        case '/add_event':
            add_event();
            break;
        case '/my-events':
            $sql = "select * from events where user_email='".$_SESSION['current_user_email']."'";
            require 'views/myevents.php';
            break;
        case '/all-events':
            $sql = "select * from events";
            require 'views/myevents.php';
            break;
        case '/signout':
            signout();
            require 'views/login.php';
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            require 'views/404.php';
            break;
    }
?>
