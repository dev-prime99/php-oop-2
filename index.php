<?php

class Persona {
    public $nome;
    public $cognome;
    function __construct($nome, $cognome)
    {
        $this-> nome = $nome;
        $this-> cognome = $cognome;
    }
    public function __toString()
    {
        return "Nome: ". $this->nome . "<br>" ."Cognome: ". $this->cognome ;
    } 
}

class Ospite extends Persona{
    public $nascita;
    function __construct($nome, $cognome, $nascita)
    {
        parent::__construct($nome, $cognome);
        $this-> nascita = $nascita;
    }
    public function __toString()
    {
       return parent::__toString()."<br> Anno di Nascita: ".$this->nascita;
    }
}

class Pagante extends Persona{
    public $fattura;
    function __construct($nome, $cognome, $fattura)
    {
        parent::__construct($nome, $cognome);
        $this-> fattura = $fattura;
    }
    public function __toString()
    {
       return parent::__toString()."<br> IndirizzoFatturazione: ".$this->fattura;
    }
}

$persona = new Persona("Andrea","Primerano");
echo "<h1>"."Sportivo"."</h1>";
echo $persona;
echo "<br>";
$ospite = new Ospite("Licia","Petteno","22/01/1998");
echo "<h1>"."Ospite"."</h1>";
echo $ospite;
echo "<br>";
$pagante = new Pagante("Mario","Rossi","indirizzo...");
echo "<h1>"."Pagante"."</h1>";
echo $pagante;