<?php

class View {

    function __construct() {

        echo 'This is a view <br>';
    }

    function render($name) {
        
        require 'views/' . $name . '.php';
    }
}