<?php

class Fornecedores {

    private $id, $nome, $responsavel, $cargoResponsavel, 
    $endereco, $cidade, $estado, $cep, $pais, $telefone, $site;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of responsavel
     */ 
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Set the value of responsavel
     *
     * @return  self
     */ 
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get the value of cargoResponsavel
     */ 
    public function getCargoResponsavel()
    {
        return $this->cargoResponsavel;
    }

    /**
     * Set the value of cargoResponsavel
     *
     * @return  self
     */ 
    public function setCargoResponsavel($cargoResponsavel)
    {
        $this->cargoResponsavel = $cargoResponsavel;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */ 
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */ 
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of cep
     */ 
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of site
     */ 
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set the value of site
     *
     * @return  self
     */ 
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }
}