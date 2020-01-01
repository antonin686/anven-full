<?php 
 
class HomeController extends Controller { 

    function __construct() { 

        parent::__construct(); 
 
    } 

    function index() {
        View::render('home');
    }
 
}