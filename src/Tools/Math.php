<?php

namespace App\Tools;

class Math
{

    public function sum(int $var1 = null, int $var2 = null):int
    {

        if (empty($var1) || empty($var2)) {
            throw new \Exception('Parâmetros invalidos');
        }

        return $var1+$var2;
    }

}