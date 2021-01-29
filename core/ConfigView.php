<?php

namespace Core;

class ConfigView {
    private $Nome;
    private  $Dados;
    public function __construct($Nome, array $Dados = null) {
        $this -> Nome = (String) $Nome;
        $this -> Dados = $Dados;
    }
    public function renderizar(){
        if(file_exists('app/'.$this -> Nome.'.php')){
            include 'app/sts/Views/include/header.php';
            include 'app/'.$this -> Nome.'.php';
            include 'app/sts/Views/include/footer.php';
        }else{
            echo "Errro ao carregar a página: {$this -> Nome}";
        }
    }
}
