<?php

require_once ('app/config/config.php');
require_once ('app/modules/modules_api.php');

echo "<br><b>Minha chave:</b> ",HG_API_KEY,"<br>";
echo "<b>EndPoint:</b> ",HG_ENDPOINTS,"<br>";

echo "<br><br>";
listCurrencies();
