<?php
    session_start();
    ob_start();
    
    define('URL', 'http://localhost/MPV_2021/');
    define('URLADM', 'http://localhost/MPV_2021/adm/');

    define('CONTROLLER', 'Home');
    define('METODO', 'index');

    //Credenciais de acesso ao BD
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'mpv');


