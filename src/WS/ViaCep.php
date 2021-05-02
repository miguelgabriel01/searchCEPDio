<?php

namespace jonas\serachcep\WS;

//é preciso colocar a pasta no fim no namespace pq o  a pasta do arquivo esta dentro do meso diretorio SRC e ele precisa herda os metodos

//mesmo nome do arquivo
class ViaCep
{
    private $url = "http://viacep.com.br/ws/";//criamos uma variavel private para armazenar a url de nde vamos solicitar o serviço

    public function get(string $zipCode): array
    {
//informa que vai receber uma string($zipCode) e vai retornar um array
        $get = file_get_contents($this->url . $zipCode . "/json");//concatenamos a url ao cep e ao tipo de dadd

        return (array) json_decode($get);
    }
}
