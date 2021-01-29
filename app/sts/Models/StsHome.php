<?php
namespace Sts\Models;
 if(!defined('URL')){
        header('location: /');
        exit();
    }
class StsHome {
    public function index(){
        //echo "Listar Dados <br>";
        //$conexao = new \Sts\Models\helper\StsConn();
        //$conexao->getConn();
        //$list = new \Sts\Models\helper\StsRead();
        //$list->exeRead('sts_carousels', 'WHERE adms_situacoe_id =:adms_situacoe_id LIMIT :limit', 'adms_situacoe_id=1&limit=4');
        //$list->fullRead("SELECT nome, link FROM sts_carousels WHERE adms_situacao_id =:adms_situacao_id LIMIT :limit", 'adms_situacao_id=1&limit=4');
        //$this->Result['sts_carousels'] = $list->getResult();
        //return $this->Result['sts_carousels'];
    }
}
