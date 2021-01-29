<?php
namespace Sts\Controllers;
   if(!defined('URL')){
        header('location: /');
        exit();
    }
class Home {
     public function index(){
        //$Home = new \Sts\Models\StsHome();
        //$Home -> index();
        
        $carregarView = new \Core\ConfigView("sts/Views/home/home");
        $carregarView -> renderizar();
    }
}
