<?php
namespace Sts\Models\helper;
use PDO;
    if(!defined('URL')){
        header('location: /');
        exit();
    }
class StsRead extends StsConnection{
    private $Select;
    private $Values;
    private $Result;
    private $Query;
    private $Connection;
    
    function getResult() {
        return $this->Result;
    }
    public function exeRead($Table, $Terms = null, $ParseString = null)
    {
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Values);
        }
        $this->Select = "SELECT * FROM {$Table} {$Terms}";
        echo "{$this->Select}";
        $this->exeInstrucao();
    }
    public function fullRead($Query, $ParseString = null)
    {
        $this->Select = (string) $Query;
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Values);
        }
        $this->exeInstrucao();
    }
    private function exeInstrucao(){
        $this -> conexao();
        try {
            $this -> getInstrucao();
            $this -> Query -> execute();
            $this -> Result = $this -> Query -> fetchAll();
            var_dump($this -> Result);
        } catch (Exception $ex) {
            $this->Resultado = null;
        }
        }
    private function conexao(){
        $this -> Connection = parent::getConnection();
        $this -> Query = $this -> Connection -> prepare($this->Select);
        $this -> Query->setFetchMode(PDO::FETCH_ASSOC);
    }
    private function getInstrucao(){
        if ($this->Values) {
            foreach ($this->Values as $Link => $Valor) {
                if ($Link == 'limit' || $Link == 'offset') {
                    $Valor = (int) $Valor;
                }
                $this->Query->bindValue(":{$Link}", $Valor, (is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }   
    }
}

