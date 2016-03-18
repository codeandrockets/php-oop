<?php 

require 'Person.php';

$person = new Person;
$person->name = 'Steven';
$person->age = 103;

echo $person->name . ' is ' . $person->age . ' years old';