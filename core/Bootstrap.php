<?php
class Bootstrap
{
    public function __construct() {

        $url = $_SERVER['QUERY_STRING'];
        Route::match($url);
        //Route::getRoutes();

    // if(!isset($_GET['url'])) {
    //     return false;
    // }
    // $url = $_GET['url'];
    // $url = rtrim($url, '/');
    // $url = explode('/', $url);
    
    //     print_r($url);

    //     $file = 'controllers/' . $url[0] . '.php';
    //     if(file_exists($file)) {
    //         require $file;
    //     }else {
    //         require_once 'controllers/Errors.php';
    //         $controller = new Errors();
    //         return false;
    //     }
        
    //     $controller = new $url[0];

    //     if (isset($url[2])) {
    //         $controller->{$url[1]}($url[2]);
    //     } else if (isset($url[1])) {
    //         $controller->{$url[1]}();
    //     }
     }

}
