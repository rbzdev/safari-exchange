<!DOCTYPE html>
<html>
<head>
  <title>Exemple d'utilisation de l'API Binance</title>
</head>
<body>
  <h1>Informations du compte Binance</h1>
  <div id="balance"></div>
  <div id="accountInfo"></div>

  <?php
    // Remplace les valeurs ci-dessous par tes propres clés d'API Binance
    $apiKey = 'iisF8N3T6U1QhLuahLpl4GK8ADeH9DWdBOz2e2f2OXOczWbmX1csAXqmRKMI0oya';
    $apiSecret = 'masAKJ4ozOef7LQeZ0970Uc2ayycgiS4Ov41PrxCbewYH1ZuY0WWWebbnytUWC1V';

    // Fonction pour créer une signature HMAC SHA256
    function createSignature($data, $apiSecret) {
      return hash_hmac('sha256', $data, $apiSecret);
    }

    // Effectuer une requête GET à l'API Binance
    function callBinanceAPI($endpoint, $params) {
      global $apiKey, $apiSecret;

      $baseUrl = 'https://api.binance.com';
      $params['timestamp'] = number_format(microtime(true) * 1000, 0, '.', '');

      // Crée la chaîne de requête à signer
      $query = http_build_query($params);
      $signature = createSignature($query, $apiSecret);

      // Ajoute la signature à la chaîne de requête
      $query .= "&signature=$signature";

      $url = $baseUrl . $endpoint . '?' . $query;

      // Configuration du contexte pour la requête HTTP
      $options = array(
        'http' => array(
          'header' => 'X-MBX-APIKEY: ' . $apiKey
        )
      );
      $context = stream_context_create($options);

      // Effectue la requête HTTP avec file_get_contents et le contexte
      $response = file_get_contents($url, false, $context);

      return json_decode($response, true);
    }

    // =============================================================================================================
    // ================================= EFFECTUER LES RETRAITS ====================================================
    // =============================================================================================================

        // Effectuer une requête POST à l'API Binance pour retirer des cryptos
        // Effectuer une requête POST à l'API Binance pour retirer des cryptos
          function withdrawCrypto($asset, $amount, $address, $memo) {
            global $apiKey, $apiSecret;

            $endpoint = '/sapi/v1/capital/withdraw/apply';            //===== /wapi/v3/withdraw.html

            // Paramètres nécessaires pour le retrait
            $params = array(
              'asset' => $asset,
              'address' => $address,
              'amount' => $amount,
              'name' => 'Withdraw from My Website', // Nom du retrait (facultatif)
              'recvWindow' => 60000, // Fenêtre de temps en millisecondes (facultatif)
              'timestamp' => number_format(microtime(true) * 1000, 0, '.', '')
            );

            // Crée la chaîne de requête à signer
            $query = http_build_query($params);
            $signature = createSignature($query, $apiSecret);

            // Ajoute la signature à la chaîne de requête
            $query .= "&signature=$signature";

            // Configuration du contexte pour la requête HTTP POST
            $options = array(
              'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n" . // Ajoute le type de contenu
                            "X-MBX-APIKEY: $apiKey",
                'method' => 'POST',
                'content' => $query
              )
            );
            $context = stream_context_create($options);

            // Effectue la requête HTTP POST avec file_get_contents et le contexte
            $response = file_get_contents('https://api.binance.com' . $endpoint, false, $context);

            return json_decode($response, true);
          }

    // =============================================================================================================
    // ================================= FIN DES RETRAITS ====================================================
    // =============================================================================================================



    // Obtenir les informations du solde
    $balance = callBinanceAPI('/api/v3/account', []);
    $balances = $balance['balances'];

    echo '<div id="balance"><h2>Solde restant sur le compte Binance</h2>';
    foreach ($balances as $asset) {
      if (floatval($asset['free']) > 0) {
        echo '<p>' . $asset['asset'] . ': ' . $asset['free'] . '</p>';
      }
    }
    echo '</div>';

    // Obtenir les informations du propriétaire du compte
    $accountInfo = callBinanceAPI('/api/v3/account', []);
    $makerCommission = $accountInfo['makerCommission'];
    $takerCommission = $accountInfo['takerCommission'];
    // Ajoute d'autres informations du propriétaire du compte ici si nécessaire



    // Si le formulaire de retrait est soumis, effectue le retrait
      if (isset($_POST['withdraw'])) {
        $asset = $_POST['asset'];
        $amount = $_POST['amount'];
        $address = $_POST['address'];
        $memo = $_POST['memo'];

        $withdrawResult = withdrawCrypto($asset, $amount, $address, $memo);

        echo '<div id="withdrawResult"><h2>Résultat du retrait</h2>';

      if ($withdrawResult['success'] ?? false) {
        // Le retrait a réussi, afficher le message de succès
        echo '<p>Retrait réussi. Transaction ID: ' . $withdrawResult['id'] . '</p>';
      } else {
        // Le retrait a échoué, afficher le message d'erreur
        $errorCode = $withdrawResult['code'] ?? null;
        $errorMsg = $withdrawResult['msg'] ?? 'Erreur inconnue.';
        echo '<p>Échec du retrait. Code d\'erreur: ' . $errorCode . '. Erreur: ' . $errorMsg . '</p>';
      }
    }

  
  ?>
  <div id="accountInfo">
    <h2>Informations du propriétaire du compte</h2>
    <p>Maker Commission: <?php echo $makerCommission; ?></p>
    <p>Taker Commission: <?php echo $takerCommission; ?></p>
    <!-- Ajoute d'autres informations du propriétaire du compte ici si nécessaire -->
  </div>

</body>
</html>
