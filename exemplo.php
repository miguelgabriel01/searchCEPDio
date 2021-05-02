<?php

require_once "vendor/autoload.php";

use jonas\serachcep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipCode('01001000');//informamos o cep

print_r($resultado);