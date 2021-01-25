<?php 

namespace Projeto;

class Usuario 
{
    private $telefone;
    private $data_cadastro;
    private $nome;
    private $permissao;

    public function __construct(Permissao $permissao)
    {
        $this->permissao = $permissao;
    }
    
    public function cadastrar()
    {
        if(empty($this->nome)) {
            throw new Exception('Atributo nome vazio');
        }else if(empty($this->telefone)) {
            throw new Exception('Atributo telefone vazio');
        }else if(empty($this->permissao->getNivel())) {
            throw new Exception('Atributo nivel vazio');
        }else {
            date_default_timezone_set('America/Sao_Paulo');
            $this->data_cadastro = date('d/m/Y h:i:s');
        }
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function preencherDados(string $nome, string $telefone, int $nivel)
    {   
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->permissao->setNivel($nivel);
    }
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function __toString()
    {
        return "Nome: {$this->nome} | telefone: {$this->telefone} | nível: {$this->permissao->getNivel()} | 
        data do cadastro: {$this->data_cadastro}"; 
    }
}



