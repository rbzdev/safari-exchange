<?php
    

    $apiKey = 'WkkakpE6CxMYqxeI7ItEZmDG_uw1loF-yZ3Sv9LVTh93gGbJ2eHPcoIPPca-FeVt'; // Remplacez par votre clé secrète
    $url = 'https://plisio.net/api/v1/invoices/new';

    $currency = "USDT";
    
    $params = array(
        'source_currency' => 'USD',
        'source_amount' => "1000",
        'order_number' => uniqid(),
        'currency' => $currency,
        'email' => 'customer@plisio.net',
        'order_name' => 'btc1',
        'callback_url' => 'https://www.exemple.com',
        'api_key' => $apiKey,
    );
    
    
    $url .= '?' . http_build_query($params);
    
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



    // Accéder aux éléments du tableau
$status = $data['status'];
$txn_id = $data['data']['txn_id'];
$order_number = $data['data']['params']['order_number'];
$qteTotal = $data['data']['invoice_total_sum'];

$wallet = $data['data']['wallet_hash'];
// Ainsi de suite pour les autres éléments du tableau...

// Afficher les valeurs
echo "<br> <br> <br> <br> <br>";
echo "Status: " . $status . "<br>";
echo "Transaction ID: " . $txn_id . "<br>";
echo "Order Number: " . $order_number . "<br>";

echo "Wallet $currency :". $wallet;

?>
    