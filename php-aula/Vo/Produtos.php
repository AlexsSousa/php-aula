<?php

class Produtos
{
    private $id, $nome, $fornId, $forn, $catId, $cat, $preco, $qtd;

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
     * Get the value of fornId
     */
    public function getFornId()
    {
        return $this->fornId;
    }

    /**
     * Set the value of fornId
     *
     * @return  self
     */
    public function setFornId($fornId)
    {
        $this->fornId = $fornId;

        return $this;
    }

    /**
     * Get the value of catId
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set the value of catId
     *
     * @return  self
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get the value of preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of qtd
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * Set the value of qtd
     *
     * @return  self
     */
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;

        return $this;
    }

    /**
     * Get the value of forn
     */ 
    public function getForn()
    {
        return $this->forn;
    }

    /**
     * Set the value of forn
     *
     * @return  self
     */ 
    public function setForn($forn)
    {
        $this->forn = $forn;

        return $this;
    }

    /**
     * Get the value of cat
     */ 
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set the value of cat
     *
     * @return  self
     */ 
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }
}
