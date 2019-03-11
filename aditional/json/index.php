<?php
/*
$cart = [
    "orderID" => 12243,
    "shoperName" => "ivanov@ts.com",
    "content" => [
        [
            "productID" => 34,
            "productName" => "Super product1",
            "quantity" => 1
        ],
        [
            "productID" => 35,
            "productName" => "Super product2",
            "quantity" => 10
        ]
    ],
    "orderCompleted" => true
];

echo json_encode($cart);


$jsonStr = '{"orderID":12243,"shoperName":"ivanov@ts.com","content":[{"productID":34,"productName":"Super product1","quantity":1},{"productID":35,"productName":"Super product2","quantity":10}],"orderCompleted":true}';

$cart2 = json_decode($jsonStr);

echo $cart2->content[0]->productName;

$cart3 = json_decode($jsonStr, true);

echo $cart3["content"][0]["productID"];*/


class User {
    private $name;
    private $lastName;
    private $age;

    public function __construct($name, $lastName, $age) {
        $this->name = $name;
        $this->age = $age;
        $this->lastName = $lastName;
    }

    public function showJSON() {
        $arr = ["name"=>$this->name, "age"=>$this->age, "lastName"=>$this->lastName];
        return json_encode($arr);
    }
}

$user = new User('Vasja', 'Pupkin', 32);

echo $user->showJSON();
