<?php
/*
### EXPLICAÇÕES ####

No exemplo abaixo abstraimos os detalhes do "Computer", ou seja abstraimos o comportamento dele de ligar e 
desligar através da interface "PowerDeviceInterface". Agora "invertemos" a dependência do "Button" para o 
"Computer", ou seja, ambos dependem de abstração. Dessa forma a classe "Button" poderá trabalhar com qualquer 
"Power Device", não se preocupando como os detalhes do mesmo.
*/
namespace SOLID\DependencyInversion;

interface PowerDeviceInterface
{
   public function on();
   public function off();
       
}

class Computer implements PowerDeviceInterface
{
    public function on()
    {
        echo 'Computer power on!';
    }
    
    public function off()
    {
        echo 'Computer power off...';
    }
}

class Button 
{
    /**
     * @var PowerDeviceInterface
     */
    private $powerDeviceInterface;
    
    public function setPowerDevice(PowerDeviceInterface $powerDeviceInterface)
    {
        $this->powerDeviceInterface = $powerDeviceInterface;
    }
    
    public function turnOn()
    {
        if (condition) { //some condition
            $this->powerDeviceInterface->on();
        }
    }
    
}