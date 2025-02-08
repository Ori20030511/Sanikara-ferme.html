<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soni Ferme - Commande en ligne</title>
    <style>
        /* Mise en forme générale */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(to right, #ff9966, #ff5e62);
            color: white;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Titres */
        h2 {
            font-size: 28px;
            animation: fadeIn 2s ease-in-out;
        }

        .price {
            background-color: #ffc107;
            color: black;
            padding: 10px;
            border-radius: 5px;
            font-size: 22px;
            font-weight: bold;
            display: inline-block;
            margin-top: 15px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            animation: bounce 1.5s infinite alternate;
        }

        /* Style du bouton */
        .btn {
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        /* Style du formulaire */
        form {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px;
            width: 100%;
            max-width: 400px; /* Limite la largeur du formulaire */
        }

        select, input {
            padding: 8px;
            width: 100%;
            margin-top: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }

        /* Section de contact */
        .contact {
            margin-top: 30px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-10px); }
        }

        /* Responsive - Mobile friendly */
        @media (max-width: 600px) {
            .price, .btn {
                width: 90%;
                font-size: 16px;
            }

            .container {
                padding: 10px;
            }

            h2 {
                font-size: 24px;
            }

            .contact p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bienvenue à Soni Ferme 🐓</h2>
        <p>Le poulailler où la qualité rencontre le prix abordable !</p>
        
        <div class="price">
            🐓 Poulet à seulement <strong>3500 F CFA</strong> !
        </div>

        <div class="order">
            <h3>📦 Commandez maintenant</h3>
            <form action="http://localhost:8080/dev%20web/traitement.php" method="POST">
                <label for="quartier">Sélectionnez votre quartier :</label><br>
                <select id="quartier" name="quartier" required>
                    <option value="Sakhola">Sakhola</option>
                    <option value="Bangassi">Bangassi</option>
                    <option value="Koïtala 1">Koïtala 1</option>
                    <option value="Koïtala 2">Koïtala 2</option>
                    <option value="Samba Diély">Samba Diély</option>
                    <option value="Wodiga 1">Wodiga 1</option>
                    <option value="Wodiga 2">Wodiga 2</option>
                </select><br><br>

                <label for="phone">Entrez votre numéro :</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Ex: 77 256 97 00" required><br><br>

                <button type="submit" class="btn">Commander</button>
            </form>
        </div>

        <div class="contact">
            <h3>📞 Contact</h3>
            <p>📍 Adresse : Diawara, Wodiga 1</p>
            <p>📱 <a href="tel:+221772569700" class="btn">📞 Appeler</a></p>
            <p>📧 <a href="mailto:bachirdrame408@gmail.com" class="btn">📧 Envoyer un e-mail</a></p>
        </div>
    </div>
</body>
</html>
