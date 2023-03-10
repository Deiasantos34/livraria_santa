<?php
 
    $senha      = "senacrs||devWeb||".$_GET ['senha'];
    $algoritimo = "AES-256-CBC";
    $chave      ='senac@2127';
    $iv         = "rkgjktmprfblfkeç";

    $script = openssl_encrypt($senha, $algoritimo, $chave, OPENSSL_RAW_DATA, $iv);
    $script64 = base64_encode($script);
    
    echo  $script64. "<br>";
    
    $descript64 = base64_decode($script64);

    $descript = openssl_decrypt($descript64, $algoritimo, $chave, OPENSSL_RAW_DATA, $iv);

    echo $descript;
    ?>