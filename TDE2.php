<?php
abstract class PlanoInternet
{
    protected $nome;
    protected $velocidade;
    protected $preco;

    public function __construct($nome, $preco, $velocidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->velocidade = $velocidade;
    }
    abstract public function detalhes();
}

class PlanoBasico extends PlanoInternet
{

    private $diferencial = "Suporte básico";

    public function __construct($nome, $preco, $velocidade)
    {
        parent::__construct($nome, $preco, $velocidade);
    }

    public function detalhes()
    {
        return "Nome: " . $this->nome . "\n" . "Preço: " . $this->preco . "\n" . "Velocidade: " . $this->velocidade . "\n" . "Diferencial: " . $this->diferencial . "\n";
    }
}

class PlanoAvançado extends PlanoInternet
{

    private $diferencial = "Suporte premium e serviço de streaming gratuito";

    public function __construct($nome, $preco, $velocidade)
    {
        parent::__construct($nome, $preco, $velocidade);
    }

    public function detalhes()
    {
        return "Nome: " . $this->nome . "\n" . "Preço: " . $this->preco . "\n" . "Velocidade: " . $this->velocidade . "\n" . "Diferencial: " . $this->diferencial . "\n";
    }
}


$planoA = new PlanoBasico("Plano A", 79.99, "100 MB");
echo $planoA->detalhes() . "\n\n";


$planoB = new PlanoAvançado("Plano B", 149.99, "500 MB");
echo $planoB->detalhes();
