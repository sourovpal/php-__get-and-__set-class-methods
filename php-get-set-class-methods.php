<?php
class Example {
    private $data = [];

    public function __construct($data) {
        foreach ($data as $key => $val) {
            $this->data[$key] = $val;
        }
    }

    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

// Given array
$array = ["name" => "Sourov Pal", "age" => 25];


$example = new Example($array);

echo $example->age;
