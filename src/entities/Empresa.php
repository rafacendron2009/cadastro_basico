<?php

class Empresa{
    private $id ; 
    private $empresa;
    private $cnpj;
    private $endereco;
    private $num;
    private $cidade;
    private $estado;
   
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function setNum($num)
    {
        $this->num = $num;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getEmpresa()
    {
        return $this->empresa;
    }
    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function getNum()
    {
        return $this->num;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function getEstado()
    {
        return $this->estado;
    }

  
    
    
}
