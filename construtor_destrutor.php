<?php 

class Pessoa{ // criei um objeto novo

    public $nome = null; //coloquei um atributo nome para o objeto como NULL

    function __construct($nome) { // usei a função construct para definir que o objeto foi iniciado
        echo 'Objeto iniciado';
        $this->nome = $nome;
    }

    function __destruct(){ // e deixei pronta a função destruct quando eu for destruir o objeto
        echo "Objeto removido";
    }

    function __get($atributo){ // aqui eu usei o GET "magico" para colocar um valor no meu $nome
        return $this->$atributo;
    }

}

$pessoa = new Pessoa(' Obama '); //aqui eu criei a variavel $y e criei uma nova pessoa, e ja setei com o nome

echo '<br> Nome:' . $pessoa->__get('nome') . "<br>"; // aqui fiz a concatenação e puxei o nome da pessoa com o __get magico

unset($pessoa); // aqui eu removi o objeto, ou seja, se eu tentar colocar o mesmo echo na linha de baixo desta vai dar erro pois "pessoa" nao está definida

?>