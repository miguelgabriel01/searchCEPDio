<?php

use PHPUnit\Framework\TestCase;
use jonas\serachcep\Search;

class SearchTest extends TestCase{

  /**
   * @dataProvider dadosTeste
   */
  public function testGetAdressFromZipCodeDeafaultUsage(string $input, array $esperado){
    //recomendasse usar o test antes do nome da função que se vai testar e o fim usar o Deafultusage
   $resultado = new Search();
   $resultado = $resultado->getAdressFromZipCode($input);//cep usado como parametro da busca

   $esperado = [
       "cep" => "01001-000",
       "logradouro" => "Praça da Sé",
       "complemento" => "lado ímpar",
       "bairro" => "Sé",
       "localidade" => "São Paulo",
       "uf" => "SP",
       "ibge" => "3550308",
       "gia" => "1004",
       "ddd" => "11",
       "siafi" => "7107",
   ];

   $this->assertEquals($esperado,$resultado);
  } 

  public function dadosTeste(){
    return [
      "Endereço Praça da sé" => [
        "01001000",
        [
          "cep" => "01001-000",
          "logradouro" => "Praça da Sé",
          "complemento" => "lado ímpar",
          "bairro" => "Sé",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
  
        ]
        ],
        "Endereço qualquer" => [
          "03624010",
          [
            "cep" => "03624-010",
            "logradouro" => "Rua Luís Asson",
            "complemento" => "",
            "bairro" => "Vila Buenos Aires",
            "localidade" => "São Paulo",
            "uf" => "SP",
            "ibge" => "3550308",
            "gia" => "1004",
            "ddd" => "11",
            "siafi" => "7107"    
          ],
        ]
  
  ];
  }
}