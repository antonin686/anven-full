<?php

    class Route {

        static $routes = [];

        static function get($url, $action) {

            self::$routes[$url] = (object) [
                'type' => 'get',
                'action' => $action,
            ];
        }

        static function getRoutes() {

            var_dump(self::$routes);
        }

        static function match($url) {
            var_dump($url);
            //echo $url;
    
            if(isset(self::$routes[$url])) {
                
                var_dump(self::$routes[$url]->type);
            }else {
                echo 'page not found';
            }
        }
    }
    