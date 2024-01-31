<?php

require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIAS
use \App\Webservice\ApiLol;

$nomeInvocador = ApiLol::consultarInvocador('junin#BR1');