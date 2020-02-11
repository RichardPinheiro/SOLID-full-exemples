<?php
/*
### EXPLICAÇÕES ####

No exemplo abaixo podemos perceber que o botao depende de uma classe concreta "Computer" e conhece detalhes de
implementação da mesma, violando o DIP que afirma que detalhes devem depender de abstrações.
*/
namespace SOLID\DependencyInversion;

class Computer
{
    public function on() 
    {
        //Lógic
    }
}

class Button 
{
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function activate()
    {

        if (condition) { //some condition
            $this->computer->on();
        }
    }
}
