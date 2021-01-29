<?php
namespace Sts\Models\helper;
use PDO;

if(!defined('URL')){
        header('location: /');
        exit();
    }
class StsConnection {
    public static $Host = HOST;
    public static $User = USER;
    public static $Pass = PASS;
    public static $Dbname = DBNAME;    
    public static $Connect = null;
    
    public static function connect(){
        try {
            if(self::$Connect == null){
                self::$Connect =  new PDO('mysql:host='.self::$Host .';dbname='.self::$Dbname, self::$User, self::$Pass);
            }
            
        } catch (Exception $exc) {
            echo 'Mensagem: '.$exc -> getMessage();
            die;
        }
        return self::$Connect;
    }
    public function getConnection(){
        return self::connect();
    }
}
