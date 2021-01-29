<?php
namespace Sts\Controllers;
   if(!defined('URL')){
        header('location: /');
        exit();
    }
class SobreEmpresa {
    public function index(){
        $carregarView = new \Core\ConfigView("sts/Views/sobreEmpresa/sobreEmpresa");
        $carregarView -> renderizar();
    }
}
