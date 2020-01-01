<?php
require 'Model.php';
class User extends Model{

    protected $table_name = "users";

    function __construct() {
        parent::__construct();
        //echo "created";
    }

}