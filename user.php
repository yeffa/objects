<?php

class User
{

    private int $id;
    private string $name;
    private int $age;
    private string $email;
    private string $pass;
    
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->age = $data['age'];
        $this->email = $data['email'];
        $this->pass = $data['pass'];
    }
    
    public function toJson(): string
    {
        $return = [];
        $propertiesForFrontend = ['name', 'pass'];
        foreach ($propertiesForFrontend as $property) {
            $return[$property] = $this->{$property};
        }
        return json_encode($return);
    }

}

// data from DB
$data = [
    'id' => 123,
    'name' => 'Vasya',
    'age' => 43,
    'email' => 'asd@asd.asd',
    'pass' => '4fhf934fh',
];

// new instance with DB data
$user = new User($data);

// render to json
echo $user->toJson();
