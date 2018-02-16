<?php

// inclui dinâmicamente todos os arquivos de configuração em /config
foreach ( glob(__DIR__.'/../configs/*.php') as $file ) {
    include_once $file;
}

// Inclui o arquivo de autoload do composer
require_once '../vendor/autoload.php';