<?php 

class Correr{
    public $nome=null;

    function __construct($nome){
        echo "Objeto iniciado <br>";
        $this->nome = $nome;
    }

    function __get($atributo){
        return $this->$atributo;
    }
}

$sim = new Correr(' João ');

echo $sim->__get('nome') . ' Está correndo <br>';

//--------------------------------------------------------------------------------------------------

class correndo{ //criei um objeto correndo

    public $nome=null; //dei um atributo nome pro objeto

    function setNome($nome){ // coloquei que "nome" vai receber o que vier da variavel $nome
        $this->nome = $nome;
    }

   function pessoaCorrendo(){ //criei uma função para concatenar o setnome ali de cima
       return "$this->nome está correndo"; //aqui coloquei para retornar que "this"(Este) atributo "nome" está correndo
   }
}

$y= new correndo(); // criei um objeto novo
$y-> setNome(' Jonas '); // coloquei o atributo nome será "jonas"
echo $y->pessoaCorrendo(); // printei na tela