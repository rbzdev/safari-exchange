



<?php

$apiKey = "iisF8N3T6U1QhLuahLpl4GK8ADeH9DWdBOz2e2f2OXOczWbmX1csAXqmRKMI0oya";
$apiSecret = "masAKJ4ozOef7LQeZ0970Uc2ayycgiS4Ov41PrxCbewYH1ZuY0WWWebbnytUWC1V";
$timestamp = time() * 1000;

$params = "timestamp=" . $timestamp;
$signature = hash_hmac('SHA256', $params, $apiSecret);

$headers = array(
    "X-MBX-APIKEY: " . $apiKey
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.binance.com/sapi/v1/capital/deposit/hisrec?" . $params . "&signature=" . $signature);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
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

$data = json_decode($response, true);

if(isset($data['code'])){
    die('Erreur API Binance : ' . $data['msg']);
}

if(empty($data)){
    die('Aucun dépôt récent trouvé.');
}

foreach($data as $deposit){
    echo "Asset: " . $deposit['asset'] . "\n";
    echo "Amount: " . $deposit['amount'] . "\n";
    echo "Status: " . $deposit['status'] . "\n";
    echo "Time: " . date("Y-m-d H:i:s", $deposit['insertTime'] / 1000) . "\n";
    echo "\n";
}

curl_close($ch);
?>

