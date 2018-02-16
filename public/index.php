<?php

// Inclui o arquivo que dá o start em todos os scripts da aplicação
include __DIR__ . '/../bootstrap/start.php';

use Carbon\Carbon;

echo Carbon::now();