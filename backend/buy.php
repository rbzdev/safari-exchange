<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Vérifie si les données ont été envoyées via une requête POST

//     // Récupère les valeurs envoyées par le formulaire
//     $crypto = $_POST['crypto'];
//     $amount = $_POST['amount'];
//     $adress = $_POST['adress'];

//     // Traite les données ou effectue les actions souhaitées avec les valeurs récupérées
//     // Par exemple, tu peux les stocker dans une base de données ou les utiliser pour effectuer des transactions, etc.

//     // Affiche les valeurs récupérées (pour débogage)
//     echo 'Crypto : ' . $crypto . '<br>';
//     echo 'Montant : ' . $amount . '<br>';
//     echo 'Adresse de réception : ' . $adress . '<br>';

//     // Répond avec un message de confirmation ou autre si nécessaire
//     echo 'Formulaire soumis avec succès !';
// } else {
//     // Répond avec une erreur si la requête n'est pas une requête POST
//     header('HTTP/1.1 400 Bad Request');
//     echo 'Erreur : Requête invalide. Veuillez soumettre le formulaire en utilisant la méthode POST.';
// }




    $apiKey = 'iisF8N3T6U1QhLuahLpl4GK8ADeH9DWdBOz2e2f2OXOczWbmX1csAXqmRKMI0oya';
    $apiSecret = 'masAKJ4ozOef7LQeZ0970Uc2ayycgiS4Ov41PrxCbewYH1ZuY0WWWebbnytUWC1V';
    $timestamp = time() * 1000; // timestamp en millisecondes

    $params = [
        'coin' => 'BTC', // La crypto que vous voulez retirer
        'address' => 'YOUR_ADDRESS', // L'adresse où vous voulez envoyer la crypto
        'amount' => 'YOUR_AMOUNT', // Le montant de crypto que vous voulez retirer
        'network' => 'YOUR_NETWORK', // Le réseau que vous voulez utiliser (optionnel)
        'timestamp' => $timestamp
    ];

    $query = http_build_query($params, '', '&');
    $signature = hash_hmac('sha256', $query, $apiSecret);

    $headers = [
        "X-MBX-APIKEY: $apiKey"
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.binance.com/sapi/v1/capital/withdraw/apply?$query&signature=$signature");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


    $response = curl_exec($ch);

    // Erreur de cURL
    if ($response === FALSE) {
        die(curl_error($ch));
    }

    curl_close($ch);

    // Décode le json
    $response = curl_exec($ch);
    var_dump($response); // Affiche la réponse brute
    $json = json_decode($response, true);


    // Vérifie le code de statut de la réponse
    if ($json['code'] !== 200) {
        die($json['msg']);
    }

    echo "Retrait effectué avec succès!";

?>
