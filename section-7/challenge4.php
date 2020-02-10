<?php
date_default_timezone_set('America/Sao_Paulo');
$date = strtotime('12/25/2020');

$datetochristmas = ($date - time())/60/60/24;
echo floor($datetochristmas);
