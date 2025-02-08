<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quartier = htmlspecialchars($_POST["quartier"]);
    $phone = htmlspecialchars($_POST["phone"]);

    if (!empty($quartier) && !empty($phone)) {
        // Format de la commande
        $commande = "Quartier: $quartier | Téléphone: $phone\n";

        // Enregistrer la commande dans un fichier
        file_put_contents("commandes.txt", $commande, FILE_APPEND);

        echo "<h2>✅ Commande enregistrée avec succès !</h2>";
        echo "<p><strong>Quartier :</strong> $quartier</p>";
        echo "<p><strong>Téléphone :</strong> $phone</p>";
        echo "<p>📂 <a href='commandes.txt' target='_blank'>Voir toutes les commandes</a></p>";
        echo "<p>⬅️ <a href='index.html'>Retour</a></p>";
    } else {
        echo "<h2>⚠️ Veuillez remplir tous les champs.</h2>";
    }
} else {
    echo "<h2>🚫 Accès interdit !</h2>";
}
?>
