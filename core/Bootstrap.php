<?php
class Bootstrap
{
    public function __construct() {

        $url = '/'.$_SERVER['QUERY_STRING'];

        $route = Route::match($url);
        if(!$route) {
            echo '404 error route not found';
        }else{
            $controllerFile = 'app/controllers/' . $route->controller . '.php';
            if(file_exists($controllerFile)) {
                //echo $controllerFile;
                require $controllerFile;
            }else {
                //require_once 'controllers/Errors.php';
                $msg = 'No Such Controller Exists '.$route->controller;
                echo $msg;
                //$controller = new Errors($msg);
                return false;
            }
        }

        //Route::getRoutes();
        
        $controller = new $route->controller;
        
        $method = $route->method;
        //echo $method;

        if($method == null) {
            echo '<br> no given method for controller '.$controller;
        }else {
           $controller->{$method}();
        }
        
     }

}
