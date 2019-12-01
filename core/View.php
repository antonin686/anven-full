<?php

class View {

    static function render($view)
    {
        $file = "app/views/$view".'.php';

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }
}