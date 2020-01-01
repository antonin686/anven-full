<?php

class Redirect {

    static function route($url)
    {
        header('Location: '.$url);
    }
}