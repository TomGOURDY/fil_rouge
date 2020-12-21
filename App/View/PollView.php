<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouveau sondage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Le lien vers mes polices sur google_fonts -->
</head>
<body>
    <?php include "../../public/include/header.php"; ?>
    <main>
    <div id="messages">
            <!-- les messages du tchat -->

            <?php

                // on se connecte à notre base de données
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=chat_ajax', 'root', '');
                }
                catch (Exception $e)
                {
                    die('Erreur : ' . $e->getMessage());
                }

                // on récupère les 10 derniers messages postés
                $requete = $bdd->query('SELECT * FROM messages ORDER BY id DESC LIMIT 0,10');

                while($donnees = $requete->fetch()){
                    // on affiche le message (l'id servira plus tard)
                    echo "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
                }

                $requete->closeCursor();

            ?>

        </div>
	<form method="POST" action="ChatController.php">
	        Pseudo : <input type="text" name="pseudo" id="pseudo" /><br />
	        Message : <textarea name="message" id="message"></textarea><br />
	        <input type="submit" name="submit" value="Envoyez votre message !" id="envoi" />
	    </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../public/js/main.js"></script>
    <script src="chat.js"></script>
</body>
</html>