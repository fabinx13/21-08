<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar Abstração</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    

<?php 

class Funcionario{
    public $nome=null;
    public $telefone=null;
    public $num_filhos=null;

    function setNome($nome){ // aqui eu seto que o atributo nome vai receber o que está na variavel $nome
        $this->nome = $nome;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function setNumFilhos($num_filhos){
        $this->numFilhos = $num_filhos;
    }

    function getNome(){ // aqui eu pego o que está no atributo nome e retorno ele pra algum lugar
        return $this->nome;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }
//-------------------------------------------------------------------------------------------------------------------------

    function resumirCardFunc () { // aqui são funções que eu criei para retornar no echo la embaixo
        return "$this->nome e ele possui $this->num_filhos filhos";
    }

    function modificarNumFilhos ($num_filhos){
       return $this->num_filhos = $num_filhos;
    }

}

// o $y é necessario para armazerar as coisas do GET e do SET
$y= new Funcionario(); // aqui eu crio um novo funcionario
$y->setNome('Garrafinha'); // e coloco que o nome dele será garrafinha
$y->setNumFilhos(100); // e que a garrafinha tem 100 filhos
echo $y->resumirCardFunc() . "<br>"; // depois aqui eu pego a função que eu criei la em cima
echo $y->getNome() . ' e possui ' . $y->getNumFilhos() . ' filhos  '; // aqui a mesma coisa porem eu concatenei aqui mesmo e nao na função pois usei 2 atributos diferentes

?>






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<a href="index.php"> <button id='REceba'> Voltar </button></a>





</body>
</html>