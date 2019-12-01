<?php
class Help extends Controller{

    function __construct() {
        parent::__construct();
        echo 'we are in help';
    }

    function other($arg = 0) {
        echo 'arg '.$arg;
    }
}