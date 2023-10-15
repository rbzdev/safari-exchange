<?php


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifie si les données ont été envoyées via une requête POST

        // Récupère les valeurs envoyées par le formulaire
        $crypto = htmlspecialchars($_POST['cryptoA']);
        $montant = htmlspecialchars($_POST['amountA']);
        $amount = $montant * 1.03;

        
    // echo 'Crypto : ' . $crypto . '<br>';
    // echo 'Montant : ' . $amount . '<br>';

        // Répond avec un message de confirmation ou autre si nécessaire
        // echo 'Formulaire soumis avec succès !';
    } else {
        // Répond avec une erreur si la requête n'est pas une requête POST
        header('HTTP/1.1 400 Bad Request');
        echo 'Erreur : Requête invalide. Veuillez soumettre le formulaire en utilisant la méthode POST.';
    }

    


    $apiKey = 'iisF8N3T6U1QhLuahLpl4GK8ADeH9DWdBOz2e2f2OXOczWbmX1csAXqmRKMI0oya';
    $apiSecret = 'masAKJ4ozOef7LQeZ0970Uc2ayycgiS4Ov41PrxCbewYH1ZuY0WWWebbnytUWC1V';
    $timestamp = time() * 1000;

    $token = $crypto; // Changez ceci selon le token que vous voulez

    $params = [
        'coin' => $token,
        'timestamp' => $timestamp
    ];

    $query = http_build_query($params, '', '&');
    $signature = hash_hmac('sha256', $query, $apiSecret);

    $headers = [
        "X-MBX-APIKEY: $apiKey"
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.binance.com/sapi/v1/capital/deposit/address?$query&signature=$signature");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);



    // ============================= GET PRICE =============================

    $devise = "USDT";
    $pair = $crypto.$devise;  // Changez cela à la paire de trading que vous voulez

    
    $ph = curl_init();
    
    curl_setopt($ph, CURLOPT_URL, "https://api.binance.com/api/v3/ticker/price?symbol=$pair");
    curl_setopt($ph, CURLOPT_RETURNTRANSFER, 1);
    
    curl_setopt($ph, CURLOPT_SSL_VERIFYPEER, false);
    
    $responsePrice = curl_exec($ph);
    
    
    if ($responsePrice === FALSE) {
        die(curl_error($ph));
        }
        
        curl_close($ph);
        
        $json = json_decode($responsePrice, true);
        
        if (isset($json['price'])) {
        
        $qte = number_format( $amount/$json['price'], 7);
        

        // echo "Le prix de $pair est : " . $json['price']."</br>";
        
        // echo "Le $crypto de $amount est : " .$qte;
        
    } else {
        // echo "Impossible d'obtenir le prix de $pair";

        
    }

    if( $crypto == "USDT"){
        $qte = $montant;
        //echo "</br> <p> Envoyez $amount $crypto à l'adresse ci-dessous. </p>";
    }
    
    
    // ======================================== FIN GET PRICE =======================================




    $response = curl_exec($ch);

    if ($response === FALSE) {
        die(curl_error($ch));
    }

    curl_close($ch);

    $json = json_decode($response, true);

    if (!isset($json['address'])) {
        die("Could not get address: " . $json['msg']);
    }


    $address = $json['address'];

    echo "<p> Envoyez $qte $token à l'adresse : <br> <span id='address'>  $address <ion-icon id='copyIcon' name='copy-outline'></ion-icon> </span> <br> </p>";


    // Générer l'URL du QR Code pour l'adresse
    $qrCodeUrl = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . urlencode($address);

    // Afficher le QR Code comme une image
    echo "<div class='qrcode'> <img src=\"$qrCodeUrl\" alt=\"QR Code\"> </div>";

    echo "<p> Terminez la transaction dans : <br> <span id='compte'> </span> </p>";

?>
