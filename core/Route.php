<?php

    class Route {

        static $routes = [];

        static function get($url, $action) {
            $action = explode('>', $action);
            //print_r($action);
            self::$routes[$url] = (object) [
                'type' => 'get',
                'controller' => $action[0],
                'method' => isset($action[1]) ? $action[1] : null,
            ];
        }

        static function getRoutes() {

            var_dump(self::$routes);
        }

        static function match($url) {
            //var_dump($url);

            if(isset(self::$routes[$url])) {
                
                //var_dump(self::$routes[$url]);
                return self::$routes[$url];
            }else {
                return false;
            }
        }
    }
    