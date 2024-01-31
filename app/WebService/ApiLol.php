<?php

namespace App\Webservice;

class ApiLol{

    /**
     * @method responsável por consultar um invocador
     * @param string $nomeInvocador nome do invocador
     * @return array
     */
    public static function consultarInvocador($nomeInvocador) {
        print_r($nomeInvocador);
    }
}