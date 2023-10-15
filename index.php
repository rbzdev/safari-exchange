<?php
    require_once 'backend/config.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>safari-exchange</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/modals.css">
    <link rel="stylesheet" href="style/loader.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    
</head>
<body>
    <div class="loaderB" id="loader">
        <div class="loader"></div>
    </div>
    <header >
        <div id="particles-js"> </div>
        <nav id="navbar">
            <h1> safari<span>exchange</span></h1>
            <div class="links">
                <button class="acheter" onclick="location.href='#acheter'"> Acheter </button>
                <button onclick="location.href='#sell'"> Vendre </button>
            </div>
        </nav>

        <div class="sliders">
            <div class="slider">
                <h2> <ion-icon name="balloon-outline"></ion-icon> Très facile </h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, cum ducimus iure ipsa officiis inventore provident reprehenderit voluptate excepturi libero fugiat recusandae. Veritatis vel quam, temporibus sequi sed assumenda ratione!</p>
            </div>
            <div class="slider">
                <h2> <ion-icon name="checkmark-done-circle-outline"></ion-icon> Transactions instantannées </h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo unde ad autem, perspiciatis recusandae nihil deleniti assumenda veniam. Deleniti reiciendis optio enim ad officia id repellat corrupti dolor aut aliquid!</p>
            </div>
            <div class="slider">
                <h2> <ion-icon name="earth-outline"></ion-icon> Accessible partout </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, assumenda perspiciatis. Quisquam, magni et cupiditate, saepe quasi inventore dicta repellat possimus commodi autem consequuntur? Consequuntur quidem fuga rerum error non.</p>
            </div>
            <div class="slider">
                <h2> <ion-icon name="finger-print-outline"></ion-icon> Fiable et securisé </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum delectus, expedita quia et esse deleniti exercitationem ipsa vitae accusamus hic, debitis explicabo iste architecto unde nisi illo mollitia nostrum odio?</p>
            </div>
            <div class="slider">
                <h2> <ion-icon name="time-outline"></ion-icon> Disponible 24h/7j </h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In sunt molestias impedit atque commodi dolor culpa, incidunt, deleniti, minima similique ratione a voluptas asperiores aliquid quod? Sit, facilis. Velit, quas!</p>
            </div>
            
        </div>

        <div class="liveCoin">
            <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#0693e3" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10" ></div>
        </div>
        <img src="images/affiche-jeune-homme.png" alt="">

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myVideo = document.getElementById('myVideo');
                myVideo.play();
            });
        </script>
    </header>

    <section >
        <div class="support">
            <h4 data-aos="fade-up"> Nous acceptons </h4>

            <div class="line"> </div>
            <div class="supported">
                <div class="mark" data-aos="fade-up" data-aos-duration="500">
                    <img src="images/brand/airtel_money.png" alt="" srcset=" airtel money">
                </div>

                <div class="mark" data-aos="fade-up" data-aos-duration="750">
                    <img src="images/brand/mpesa.png" alt=" M-Pesa">
                </div>

                <div class="mark" data-aos="fade-up" data-aos-duration="1000">
                    <img src="images/brand/Orange-money.jpeg" alt=" Orange money">
                </div>

                <div class="mark" data-aos="fade-up" data-aos-duration="500">
                    <img src="images/brand/afrimoney.jpg" alt="afrimoney">
                </div>

                <div class="mark" data-aos="fade-up" data-aos-duration="750">
                    <img src="images/brand/visa.jpg" alt=" Visa">
                </div>

                <div class="mark" data-aos="fade-up" data-aos-duration="1000">
                    <img src="images/brand/mastercard.png" alt="MasterCard">
                </div>
                
            </div>

            <div class="tokenButton" data-aos="fade-down">
                <button> Voir les cryptos disponible </button>
            </div>
            <div class="coming">
                <h4> Mode de paiement à venir </h4>

                <div class="line"> </div>
                <div class="content">
                    <div class="mark" data-aos="fade-up" data-aos-duration="500">
                        <img src="images/brand/MoovMoney.png" alt="">
                    </div>
    
                    <div class="mark" data-aos="fade-up" data-aos-duration="750">
                        <img src="images/brand/MoMo-Pay-.jpg" alt="">
                    </div>
                    <div class="mark" data-aos="fade-up" data-aos-duration="1000">
                        <img src="images/brand/apple-pay.jpg" alt="">
                    </div>
    
                    <div class="mark" data-aos="fade-up" data-aos-duration="1250">
                        <img src="images/brand/google-pay.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>

    </section>

    <div class="acheterModal" id="acheter">
        <div class="content">
            <a href="#">  &times;  </a>
            <div class="premierOnglet" id="premierOnglet">
                <h5> Acheter les cryptos </h5>
                <div class="choisir" id="cryptoList"> <span id="cryptoChoisi"> USDT (TRC20) </span> <ion-icon name="chevron-forward-outline"></ion-icon> </div>
                <form method="post" id="achatForm">
                    <input type="hidden" name="crypto" value="USDT" id="assetInput">
                    <input type="number" name="amount" min="10" id="montant" placeholder="Montant minimum 10$ (USD)">
                    <input type="text" name="adrress" id="adresseReception" placeholder="Adresse de reception">
                </form>
                <button id="suivant" disabled> Suivant </button>
            </div>

            <div class="deuxiemeOnglet" id="deuxiemeOnglet">
                <h5> Confirmez le paiement </h5>
                <form method="POST" id="myForm">
                    
                <!-- ============ HIDDEN SECTION ============ -->
                    <input type="hidden" name="authorization" placeholder="authorization" value="Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzQ2MTE3MTkyLCJzdWIiOiI2MDQ5ODE2N2ViNjZlMDIyNGU5MGFhMDg1MTExYmJhNSJ9.hMtfna-5wwYr3OQXeuvMwHlPQ0b9WhyjDOqLR1a7JVc">
                    <input type="hidden" name="merchant" placeholder="merchant" value="SAFARIDEV">
                    <input type="hidden" name="reference" id="input-id" value="">
                    <input type="hidden" name="amount" id="amount" value="20">
                    <input type="hidden" name="type" placeholder="type de la transaction" value="1">
                    <input type="hidden" name="currency" id="currency" value="usd">
                    <input type="hidden" name="callback_url" placeholder="callback_url" value="https://www.monami.fun">

                    <input type="tel" name="phone" placeholder="Saisir le numéro qui paye (243 . . .)">
                    <!-- <label for="usd" class="selected"> USD ($) </label>
                    <input type="radio" name="currency" id="usd">
                    <label for="cdf"> CDF (Fc) </label>
                    <input type="radio" name="devise" id="cdf"> -->
                    <button type="submit" id="confirmer"> Confirmer le paiement</button>
                </form>
            </div>
        </div>

        <div class="list" id="list">
            <?php
                // Requête SQL pour récupérer les données de la colonne "nom" de la table "cryptos_disponibles"
            $sql = "SELECT * FROM cryptos_disponibles";

            $result = $conn->query($sql);

            // Vérifier si la requête a réussi
            if ($result->num_rows > 0) {
                // Afficher les données dans une liste HTML <ul>
                
                

                echo "<ul>";
                while ($row = $result->fetch_assoc()) {

                    // Récupère le nom de l'image depuis la colonne "nom_image"
                    $nomImage = $row["photo"];

                    // Vérifie si le fichier image existe dans le dossier "images/tokens/"
                    $cheminImage = "images/tokens/" . $nomImage;

                    echo "<li class='asset' value=".$row["symbole"]."> <span>" . $row["nom"] .'</span> <img src="' . $cheminImage . '" alt="' . $nomImage . '">'. "</li>";
                }
                echo "</ul>";
            } else {
                echo "Aucune donnée trouvée dans la table.";
            }
            ?>
        </div>

        <script>
            let loader =document.getElementById("loader")
            let cryptoList = document.getElementById("cryptoList")
            let list = document.getElementById("list")

            cryptoList.onclick = ()=>{
                list.classList.toggle("active")
                cryptoList.classList.toggle("active")
            }

            const assets = document.querySelectorAll('.asset');
            const cryptoChoisi = document.getElementById('cryptoChoisi');
            const assetInput = document.getElementById('assetInput');

            // Ajoute un gestionnaire d'événements de clic pour chaque élément <li>
            assets.forEach((asset) => {
            asset.addEventListener('click', () => {
                // Récupère la valeur de l'attribut "value" de l'élément <li> cliqué
                const cryptoValue = asset.getAttribute('value');
                list.classList.remove("active") //Cacher la liste carousselle
                cryptoList.classList.remove("active") //Pour pivoter l'icone de la liste

                // Récupère le contenu texte de l'élément <li> cliqué (dans ce cas, le nom de la crypto)
                const cryptoName = asset.textContent;

                // Met à jour le contenu du span avec la valeur et le nom de la crypto sélectionnée
                cryptoChoisi.textContent = `${cryptoName} (${cryptoValue})`;
                // assetInput.value = `(${cryptoValue})`
                assetInput.value = cryptoValue;
            });
            });

            //======== Passer à l'onglet suivant 
            let premierOnglet = document.getElementById("premierOnglet")
            let deuxiemeOnglet = document.getElementById("deuxiemeOnglet")
            let suivant = document.getElementById("suivant")

            suivant.onclick = ()=>{
                premierOnglet.classList.add("active")
                deuxiemeOnglet.classList.add("active")
            }


            //=========Verifier si les champs de formulaire sont rempli
            const montantInput = document.getElementById('montant');
            const adresseInput = document.getElementById('adresseReception');
            const suivantButton = document.getElementById('suivant');

            // Ajoute des écouteurs d'événements pour vérifier les champs lorsqu'ils changent
            montantInput.addEventListener('input', verifierChampsRemplis);
            adresseInput.addEventListener('input', verifierChampsRemplis);

            function verifierChampsRemplis() {
                // Vérifie si les deux champs sont remplis
                const montantRempli = montantInput.value.trim() !== '';
                const adresseRemplie = adresseInput.value.trim() !== '';

                // Active le bouton si les deux champs sont remplis, sinon le désactive
                suivantButton.disabled = !(montantRempli && adresseRemplie);
                
                // Applique un style de bordure rouge aux champs non remplis
                montantInput.style.border = montantRempli ? '2px solid #ccc' : '2px solid rgb(255, 129, 133)';
                adresseInput.style.border = adresseRemplie ? '2px solid #ccc' : '2px solid rgb(255, 129, 133)';
            }


            // ======================================================================================================
            // ============================================= PAIEMENT ===============================================
            // ======================================================================================================
            const form = document.querySelector('#myForm');
            const merchantInput = form.querySelector('[name="merchant"]');
            const typeInput = form.querySelector('[name="type"]');
            const phoneInput = form.querySelector('[name="phone"]');
            const referenceInput = form.querySelector('[name="reference"]');
            const amountInput = form.querySelector('[name="amount"]');
            const currencyInput = form.querySelector('[name="currency"]');
            const callbackUrlInput = form.querySelector('[name="callback_url"]');
            const authorizationInput = form.querySelector('[name="authorization"]');
            //const success = document.getElementById("success")


            montantInput.addEventListener("input", ()=>{
                amountInput.value = montantInput.value
            })

            form.addEventListener('submit', function(event) {
            event.preventDefault(); // empêche la soumission du formulaire par défaut
            loader.classList.add("active");

            const data = {
                "merchant": merchantInput.value,
                "type": typeInput.value,
                "phone": phoneInput.value,
                "reference": referenceInput.value,
                "amount": (parseFloat(amountInput.value) * 1.05).toString(),
                "currency": currencyInput.value,
                "callbackUrl": callbackUrlInput.value
            };

        
            const countdownElement = document.getElementById("compteArebours");
            const jsonData = JSON.stringify(data);

            //http://41.243.7.46:3006/flexpay/api/rest/v1/paymentService  ============ https://backend.flexpay.cd/api/rest/v1/paymentService
            const gateway = "https://backend.flexpay.cd/api/rest/v1/paymentService"; 
            
            const xhr = new XMLHttpRequest();
            xhr.open("POST", gateway);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.setRequestHeader("Authorization", authorizationInput.value);

            xhr.onreadystatechange = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    const code = response.code;
                    if (code != "0") {
                    const error_message = 'Impossible de traiter la demande, veuillez réessayer';
                    console.log(error_message);
                    loader.classList.remove("active");
                    alert("Impossible de traiter la demande, veuillez actualiser la page et réessayez")
                    } else {
                    //===========Transaction reussie, notification PUSH envoyée=============
                        const message = response.message;
                        const orderNumber = response.orderNumber;
                        console.log(message, orderNumber);
                        setTimeout(() => {
                            //success.classList.add("active")
                        }, 1000);

                        setTimeout(() => {
                            //success.classList.remove("active")
                        }, 3000);

                        localStorage.setItem('TransID', orderNumber); //STocker orderNumber dans le stockage local
                        // Pour la recuperer === const retrievedVariable = localStorage.getItem('TransID');


                            // Redirection vers la page pour valider ou rejeter la transaction 
                            //window.location.href = "{{ url_for('callback') }}";

                        //============================================================================================
                        //============================================= CALLBACK ===================================== ==============================================================================================
                            setTimeout(() => {
                                let retrievedVariable = localStorage.getItem('TransID');
                                // Envoyer une requête POST avec les données JSON après la charge de la page
                                //prod :::: https://backend.flexpay.cd/api/rest/v1/check/ ======= TEST 'http://41.243.7.46:3006/api/rest/v1/check/'
                                const apiUrl = 'https://backend.flexpay.cd/api/rest/v1/check/';
                                
                                const authorization = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzQ2MTE3MTkyLCJzdWIiOiI2MDQ5ODE2N2ViNjZlMDIyNGU5MGFhMDg1MTExYmJhNSJ9.hMtfna-5wwYr3OQXeuvMwHlPQ0b9WhyjDOqLR1a7JVc';
                                const orderNumber = localStorage.getItem('TransID');
                                
                                if (localStorage.getItem('TransID')) { //orderNumber existe ou pas
                            
                                console.log(orderNumber)
                                console.log('La valeur existe dans le localStorage');
                                const xhr = new XMLHttpRequest();
                                xhr.open('GET', apiUrl + orderNumber);
                                xhr.setRequestHeader('authorization', 'Bearer ' + authorization);
                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                    // Traitement de la réponse
                                    const response = JSON.parse(xhr.responseText);
                                    console.log('Réponse :', response);

                                        // Extraction des éléments du tableau JSON dans des variables distinctes
                                        const { reference, amount, amountCustomer, currency, createdAt, status } = response.transaction;

                                        

                                        // Affichage des variables
                                        console.log('Order Number:', orderNumber);
                                        //console.log('Reference:', reference);
                                        console.log('Amount:', amount);
                                        console.log('Amount Customer:', amountCustomer);
                                        console.log('Currency:', currency);
                                        console.log('Created At:', createdAt);
                                        console.log('Status:', status);
                                        
                                        setTimeout(() => {
                                        if( status == 0 ){  
                                            //requete vers le serveur pour payer (RETIRER la crypto)

                                            // Récupère les données du formulaire
                                            const cryptoValue = document.getElementById('assetInput').value;
                                            const montantValue = document.getElementById('montant').value;
                                            const adresseValue = document.getElementById('adresseReception').value;

                                            // Crée un objet FormData pour envoyer les données du formulaire
                                            const formData = new FormData();
                                            formData.append('crypto', cryptoValue);
                                            formData.append('amount', montantValue);
                                            formData.append('adress', adresseValue);

                                            // Envoie les données du formulaire vers backend/buy.php en utilisant une requête POST
                                            fetch('backend/buy.php', {
                                                method: 'POST',
                                                body: formData
                                            })
                                                .then(response => response.text())
                                                .then(data => {
                                                console.log(data); // Affiche la réponse de la page backend/buy.php (peut être personnalisé selon la réponse)
                                            })
                                            .catch(error => {
                                            console.error('Erreur lors de la soumission du formulaire:', error);
                                            });


                                        }else{
                                            //Paiement a echoué, retour vers le paiement
                                            //window.location.reload();
                                            alert("Votre paiement a echoué, veuillez réessayer.")
                                            loader.classList.remove("active")
                                        }
                                        }, 5000);
                                    } else {
                                    // Gestion des erreurs
                                    console.error('Erreur :', xhr.statusText);
                                    }
                                };
                                xhr.onerror = function() {
                                    console.error('Erreur de réseau');
                                    
                                    alert("Une erreur reseau.")
                                    setTimeout(() => {
                                    //window.location.href="{{ url_for('home') }}"
                                    }, 5000);
                                    
                                };
                                xhr.send();
                                } else {
                                //orderNumber n'existe pas dans localStorage
                                window.location.reload();
                                alert("Une erreur lors du traitement de la requête, veuillez réessayer")
                            }

                            }, 10000);
                    
                    
                    }
                } else {
                    const error_message = 'Une erreur lors du traitement de votre requête';
                    console.log(error_message);
                    loader.classList.remove("active");
                    alert("Une erreur lors du traitement de la requête, veuillez réessayer")
                }
                }
            };

            xhr.send(jsonData);
            });

            //==================GENERER un ID unique===================
            var inputElement = document.getElementById('input-id');

            function generateRandomId() {
                // Crée un tableau de caractères aléatoires
                var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

                // Définit la longueur de l'ID que vous voulez générer
                var idLength = 10;

                // Initialise une chaîne vide pour stocker l'ID généré
                var randomId = '';

                // Boucle sur la longueur souhaitée de l'ID pour ajouter des caractères aléatoires
                for (var i = 0; i < idLength; i++) {
                    // Sélectionne un caractère aléatoire à partir du tableau de caractères
                    var randomChar = chars[Math.floor(Math.random() * chars.length)];

                    // Ajoute le caractère sélectionné à la chaîne d'ID
                    randomId += randomChar;
                }
                // Convertit l'ID en majuscules
                randomId = randomId.toUpperCase();

                // Renvoie l'ID généré
                return randomId;

            }

            // Génère un ID aléatoire
            var randomId = generateRandomId();

            // Insère la valeur de l'ID généré dans l'élément HTML
            //randomIdElement.textContent = randomId;

            inputElement.value = randomId;


            // Sélectionne le champ de téléphone
            const phoneChamp = document.querySelector('input[type="tel"]');

            // Ajoute un écouteur d'événement de saisie à l'entrée de téléphone
            phoneChamp.addEventListener('input', () => {
                let phoneNumber = phoneChamp.value.replace(/\D/g, ''); // Supprime tous les caractères non numériques
                let validPhoneNumber = /^[2-5]{1}[0-9]{8}$/.test(phoneNumber); // Vérifie si le numéro correspond au format attendu

                if (phoneNumber.startsWith('0')) { // Si le numéro commence par 0
                    phoneNumber = '243' + phoneNumber.slice(1); // Supprime le 0 et ajoute 243 au début
                    validPhoneNumber = true; // Le numéro est maintenant valide

                } else if (phoneNumber.startsWith('+243')) { // Si le numéro commence par +243
                    phoneNumber = phoneNumber.slice(1); // Supprime le signe +
                    validPhoneNumber = true; // Le numéro est valide

                } else if (phoneNumber.startsWith('243')) { // Si le numéro commence par 243
                    // Ne rien faire. Le numéro est déjà au bon format.

                } else { // Si le numéro ne commence par 0, +243 ou 243
                    validPhoneNumber = false; // Le numéro n'est pas valide
                }

                // Mettre à jour la valeur du champ de téléphone avec le numéro mis à jour
                phoneChamp.value = phoneNumber;

                if (validPhoneNumber) {
                    phoneChamp.style.border = '1px solid #ccc'; // Réinitialise la couleur de bordure
                } else {
                    phoneChamp.style.border = '2px solid green'; // Définit la couleur de bordure en rouge
                }
            });

            // =====================================================================================================
            // ====================================== FIN PAIEMENT =================================================
            // =====================================================================================================
        </script>
    </div>

    
    <div class="sell" id="sell">
        <div id="myDiv" class="content">
            <a href="#">  &times;  </a>
            <div class="premierOnglet" id="onglet">
                <h5> Vendre les cryptos </h5>
                <div class="choisir" id="cryptoListA"> <span id="cryptoChoisiA"> USDT (TRC20) </span> <ion-icon name="chevron-forward-outline"></ion-icon> </div>
                <form method="post" id="venteForm">
                    <input type="hidden" name="cryptoA" value="USDT" id="assetInputA">
                    <input type="number" name="amountA" min="10" id="montantA" placeholder="Montant minimum 10$ (USD)">
                    <input type="tel" name="telephone" id="telephoneReception" placeholder="Mobile money de reception">
                    <button id="vendre"> Vendre </button>
                </form>
            </div>

        </div>

        <div class="listA" id="listA">
            <?php
                // Requête SQL pour récupérer les données de la colonne "nom" de la table "cryptos_disponibles"
            $sql = "SELECT * FROM cryptos_disponibles";

            $result = $conn->query($sql);

            // Vérifier si la requête a réussi
            if ($result->num_rows > 0) {
                // Afficher les données dans une liste HTML <ul>
                
                

                echo "<ul>";
                while ($row = $result->fetch_assoc()) {

                    // Récupère le nom de l'image depuis la colonne "nom_image"
                    $nomImage = $row["photo"];

                    // Vérifie si le fichier image existe dans le dossier "images/tokens/"
                    $cheminImage = "images/tokens/" . $nomImage;

                    echo "<li class='assetA' value=".$row["symbole"]."> <span>" . $row["nom"] .'</span> <img src="' . $cheminImage . '" alt="' . $nomImage . '">'. "</li>";
                }
                echo "</ul>";
            } else {
                echo "Aucune donnée trouvée dans la table.";
            }
            ?>
        </div>

    </div>

    

    <script>

        let cryptoListA = document.getElementById("cryptoListA")
        let listA = document.getElementById("listA")

        cryptoListA.onclick = ()=>{
            listA.classList.toggle("active")
            cryptoList.classList.toggle("active")
        }

        const assetsA = document.querySelectorAll('.assetA');
        const cryptoChoisiA = document.getElementById('cryptoChoisiA');
        const assetInputA = document.getElementById('assetInputA');
        const montantA = document.getElementById('montantA');
        const venteForm = document.getElementById('venteForm');

        const vendre = document.getElementById('vendre');
        

        // Ajoute un gestionnaire d'événements de clic pour chaque élément <li>
        assetsA.forEach((assetA) => {
        assetA.addEventListener('click', () => {
            // Récupère la valeur de l'attribut "value" de l'élément <li> cliqué
            const cryptoValue = assetA.getAttribute('value');
            listA.classList.remove("active") //Cacher la liste carousselle
            cryptoListA.classList.remove("active") //Pour pivoter l'icone de la liste

            // Récupère le contenu texte de l'élément <li> cliqué (dans ce cas, le nom de la crypto)
            const cryptoName = assetA.textContent;

            // Met à jour le contenu du span avec la valeur et le nom de la crypto sélectionnée
            cryptoChoisiA.textContent = `${cryptoName} (${cryptoValue})`;
            // assetInput.value = `(${cryptoValue})`
            assetInputA.value = cryptoValue;
        });
        });


        document.getElementById('vendre').addEventListener('click', function(event) {
            loader.classList.add("active")
            event.preventDefault();
            const onglet = document.getElementById("onglet")
            onglet.style.display= "none"

            // Récupère la div où afficher le contenu
            var div = document.getElementById("myDiv");

            // Récupère les données du formulaire
            const cryptoValue = document.getElementById('assetInputA').value;
            const montantValue = document.getElementById('montantA').value;

            if( montantValue == ""){
                
                alert("Entrez un montant (10$ minimum).")
                window.location.reload();
            
            }

            // Crée un objet FormData pour envoyer les données du formulaire
            const formData = new FormData();
            formData.append('cryptoA', cryptoValue);
            formData.append('amountA', montantValue);

            // Envoie les données du formulaire vers backend/sell.php en utilisant une requête POST
            fetch('backend/sell.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Erreur HTTP, statut = " + response.status);
                }
                return response.text();
            })
            .then(data => {
                // Affiche le contenu de sell.php dans la div
                div.innerHTML = data;

                console.log(data); // Affiche la réponse de la page backend/buy.php (peut être personnalisé selon la réponse)
                loader.classList.remove("active")

                //const compte =document.getElementById("compte")

                var compte = 120; // Démarrer à 60 secondes

                var interval = setInterval(function() {
                    document.getElementById('compte').innerHTML = compte + " secondes restantes";
                    compte--;
                    if (compte < 0) {
                        clearInterval(interval);
                        document.getElementById('compte').innerHTML = "Compte à rebours écoulé";
                    }
                }, 1000);


                // COPIER l'adresse 
                document.getElementById('copyIcon').addEventListener('click', function() {
                    var address = document.getElementById('address').textContent;

                    // Crée un élément textarea temporaire pour copier le texte
                    var textarea = document.createElement('textarea');
                    textarea.textContent = address;
                    document.body.appendChild(textarea);

                    textarea.select();
                    try {
                        document.execCommand('copy');
                        alert('Adresse copié avec succès');
                    } catch (error) {
                        console.error('Error occurred while copying text: ', error);
                    }

                    // Supprime l'élément textarea de la page
                    document.body.removeChild(textarea);
                });





            })
            .catch(error => {
                console.error('Erreur lors de la soumission du formulaire:', error);
            });


        }, false);

        // // Récupère la div où afficher le contenu
        // var div = document.getElementById("myDiv");

        // // Envoie une requête à sell.php
        // fetch('sell.modal.html')
        //     .then(response => {
        //         if (!response.ok) {
        //             throw new Error("Erreur HTTP, statut = " + response.status);
        //         }
        //         return response.text();
        //     })
        //     .then(data => {
        //         // Affiche le contenu de sell.php dans la div
        //         div.innerHTML = data;
        //     })
        //     .catch(function(error) {
        //         console.log(error);
        //     });

    </script>


     <footer data-aos="fade-down" data-aos-duration="1000"> <!-- data-aos="fade-up" data-aos-duration="750" -->
        <div class="liens">
            <ul>
                <li> <ion-icon name="logo-whatsapp"></ion-icon> Contact</li>
                <li> <ion-icon name="information-circle-outline"></ion-icon> A propos</li>
            </ul>
            <div class="reseaux">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-instagram"></ion-icon>
                <ion-icon name="logo-youtube"></ion-icon>
                <ion-icon name="logo-github"></ion-icon>
            </div>
        </div>
        <p> &copy;safaridew - <?php echo ucfirst(strftime('%B %Y', time())); ?> </p>
    </footer>

    <script>

        // =========================== STICKY Navbar ===========================
        let prevScrollPos = window.pageYOffset;
        window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            // Défilement vers le haut
            document.getElementById("navbar").classList.remove("sticky");
        } else {
            // Défilement vers le bas
            document.getElementById("navbar").classList.add("sticky");
        }
        prevScrollPos = currentScrollPos;
        }


        // ===================== INITIALISE AOS =============================
        AOS.init();
    </script>

    <script src="particles.js"></script>
    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>