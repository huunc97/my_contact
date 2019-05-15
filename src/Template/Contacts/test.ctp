
<?php
    $id_bank=$_GET["id_bank"];
    $url="../webroot/bank/branches/$id_bank.json";
    $a= file_get_contents($url);
    $b=json_encode($a);
    echo $b;
?>
