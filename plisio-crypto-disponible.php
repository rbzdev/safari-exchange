<?php
    

    $apiKey = 'WkkakpE6CxMYqxeI7ItEZmDG_uw1loF-yZ3Sv9LVTh93gGbJ2eHPcoIPPca-FeVt'; // Remplacez par votre clé secrète
    $url = 'https://plisio.net/api/v1/currencies?api_key=' . $apiKey;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    
    if($response === false){
        die('Erreur cURL : ' . curl_error($ch));
    }
    
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($httpCode !== 200){
        die('Erreur HTTP : ' . $httpCode . ' ' . curl_error($ch));
    }
    
    curl_close($ch);
    
    $data = json_decode($response, true);
    
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    ?>
    