<?php use App\Controller\UserController;
      UserController::redirect(true); ?>
<!DOCTYPE html><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Le lien vers mes polices sur google_fonts -->
</head>
<body>
    <?php include "./include/header.php"; ?>
    <main>
        <div class="content-container">
            <h1>Amis</h1>
            <section id="friends-list-container">
                <h2>Liste d'amis</h2>
                <form>
                    <input type="text" name="friend-list-search" id="friend-list-search" placeholder="Rechercher">
                </form>
                <section id="friends-list" class="data-wrapper">
                </section>
            </section>
            <hr class="vertical-separator">
            <section id="friends-search-container">
                <h2>Ajouter des amis</h2>
                <form>
                    <input type="text" name="friend-search" id="friend-search" placeholder="Rechercher">
                </form>
                <section id="search-results" class="data-wrapper">
                </section>
            </section>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>