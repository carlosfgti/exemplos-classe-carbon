<?php

// Inclui o arquivo que dá o start em todos os scripts da aplicação
include __DIR__ . '/../bootstrap/start.php';

use Carbon\Carbon;

// Exiber o timestamps atual (data e hora)
// echo Carbon::now();


// Exibir o timestamps de horas atrás
// $hours = -6;
// echo Carbon::now($hours);
// echo Carbon::now(2); // 2 horas após o horário atual

// Exibir outro timezone
// echo Carbon::now(new DateTimeZone('Europe/London'));

// Exibir data de amanhã
//echo Carbon::tomorrow();

// Exibir data de antes de ontem
// echo Carbon::yesterday();

