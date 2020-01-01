<?php

class Login extends Controller {

    function __construct() {

        parent::__construct();
        
    }

    function index() {
        
        View::render('login');
    }

    function register() {
        
        View::render('register');
    }

    function addToregister($request) {
        //print_r($request->username);
        require __DIR__ . '/../model/User.php';
        
        $userModel = new User();

        $done = $userModel->insert([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password
        ]);

        if($done)
        {
            echo "User successfully Created";
        }
    }

    function verifyUser($request) {
        //print_r($request);

        require __DIR__ . '/../model/User.php';
        
        $userModel = new User();

        $rs = $userModel->all();

        foreach($rs as $row){
	
            if($row['username'] == $request->username && $row['password'] == $request->password)
            {
                Redirect::route("/Anven/home");
                return;
            }
            
        }

        echo "not valid";
        //print_r($done);
    }
}