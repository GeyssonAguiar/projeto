<?php 

namespace Projeto;

class Permissao 
{
    private $nivel;
    
    public function setNivel(int $nivel) 
    {
        $this->nivel = $nivel;
    }
    public function getNivel() 
    {
        return $this->nivel;
    }
}