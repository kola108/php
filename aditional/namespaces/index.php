<?php

require_once ("test2.php");

$newTable = new Db\Table('newTable', 'big', '100X100');

echo $newTable->getName() . " ";
echo $newTable->getTableParams()['type'] .  " "  . $newTable->getTableParams()['size'];
$newTable->setConnection('disconnect');
echo $newTable->getConnection();

echo "<br>";

$newTable = new Db2\Table2('newTable', 'big', '100X100');

echo $newTable->getName() . " ";
echo $newTable->getTableParams()['type'] .  " "  . $newTable->getTableParams()['size'];


/*
$mc = new Project\Connection();
Project\connection();
echo AnotherProject\CONNECT_OK;

echo $mc->connection;

AnotherProject\showNameSpace();*/