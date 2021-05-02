<?php

namespace jonas\serachcep;//valor criado no arquivo composer.json
 
//criamos a classe Search(importante criar com o nome do arquivo)
class Search{
  private $url = "http://viacep.com.br/ws/";//criamos uma variavel private para armazenar a url de nde vamos solicitar o serviço

  //criamos uma função publica para retornar os dados da requisição e ela recebe uma string, salava na variavel $zipcode e retorna um array
  public function getAdressFromZipCode(string $zipCode): array{

    $zipCode = preg_replace('/[^0-9]/im', '',$zipCode);//fazemos um tratamento para que o zipCode(cep) possua apenas numeros
    $get = file_get_contents($this->url . $zipCode . "/json");//concatenamos a url ao cep e ao tipo de dadd

    return (array) json_decode($get);//retornamos o array com o valor da resposta
  }
}

?>