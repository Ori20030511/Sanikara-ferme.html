<div class="container">
    <h2>Bienvenue à Soni Ferme 🐓</h2>
    <p>Le poulailler où la qualité rencontre le prix abordable !</p>
    
    <div class="image">
        <img src="https://exemple.com/image-poulet.jpg" alt="Image de poulet" style="width: 100%; max-width: 400px;">
    </div>

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
