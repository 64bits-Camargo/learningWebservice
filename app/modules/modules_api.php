<?php

function listCurrencies(){
    $uri = HG_ENDPOINTS . HG_API_KEY;
    $json_file = file_get_contents($uri);
    $json_ler = json_decode($json_file);
    foreach ($json_ler->results->currencies as $campo){
        echo "<b>Moeda:</b> ".$campo->name;
        echo "<br><b>Valor:</b> ".$campo->buy;
        echo "<br><br>";
    }
}


