<?php

//YAML
// YAML Aint a Markup Language

require_once 'Spyc.php';

$data = Spyc::YAMLLoad('test.yml');

var_dump($data);