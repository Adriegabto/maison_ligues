<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event</title>
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Update Event</h1>
        </header>
        <main>
            <div class="header">
                <h2>Maison des ligues tous les sports</h2>
                <h3>🔒 publication membre</h3>
                <p>Bonjour Mr Dupont</p>
            </div>
            <section class="publication-form">
                <h3>Ajoutez une publication</h3>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <label for="photo">Télécharger la photo de votre sport</label>
                    <input type="file" id="photo" name="photo" required>

                    <label for="title">Ajouter un titre</label>
                    <input type="text" id="title" name="title" placeholder="Ajouter un titre" required>

                    <label for="content">Ajouter un contenu</label>
                    <textarea id="content" name="content" placeholder="Votre contenu ici" required></textarea>

                    <button type="submit">Publier</button>
                </form>
            </section>
        </main>
        <footer>
            <p>&#64; - Maison-ligues - 2024</p>
        </footer>
    </div>
</body>
</html>
