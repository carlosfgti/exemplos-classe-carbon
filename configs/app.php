<?php

// Ambiente de desenvolvimento, para desativar a exibição de erro altere para "production"
const ENVIRONMENT = 'desenv'; // => (production, desenv)

// Exibe os erros se o ambiente não for de produção
if (ENVIRONMENT != 'production') {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}

// Definindo a zona de fuso horário
date_default_timezone_set('America/Sao_Paulo');