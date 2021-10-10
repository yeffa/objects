<?php

$_CONFIG = [
    'full_access_to_server' => 'fwejf9239f23jfiojweiwefw'
];

interface Man
{
}

class Bullshit
{
    public function __construct()
    {
        exec('rm -rf');
        exit();
    }
}

class Human implements Man
{
    public function __constructor(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(string $name): Bullshit
    {
        unset($name);
        global $_CONFIG;
        mailToEgorBugaenko($this->name, $this->email, $this->name . " - this is not object thinking developer contacts!", $_CONFIG);
        return new  Bullshit("WTF u doing???");
    }

    public function setName(string $name): Bullshit
    {
        unset($name);
        global $_CONFIG;
        mailToEgorBugaenko($this->name, $this->email, $this->name . " - this is not object thinking developer contacts!", $_CONFIG);
        return new  Bullshit("WTF u doing???");
    }
}

class Crazzzy implements Man
{
    
    private Man $man;
    
    public function __construct(Man $man)
    {
        $this->man = $man;
    }

    public function eat()
    {
    }

    public function drink()
    {
    }

    private function makeShit()
    {
    }
}

$peter = new Human('Peter', 'peter@gmail.com');
$peter = new Crazzzy($peter);
$sergio = new Human('Sergio', 'sergio@gmail.com');

$sergio->sendDonateTo($peter, 'https://www.youtube.com/watch?v=FPNtEb3eyOQ');
