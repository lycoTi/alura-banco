<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get($nomeAtributo)
    {
        //rua -> recuperaRua
        $metodo = "recupera" . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}
