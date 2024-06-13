<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation membre</title>
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Confirmation membre</h1>
        </header>
        <main>
            <div class="header">
                <h2>Maison des ligues tous les sports</h2>
            </div>
            <section class="confirmation-message">
                <p>Merci, vous êtes inscrit ! Votre formulaire a été soumis avec succès.</p>
            </section>
            <section class="member-details">
                <h3>🏆 Vous êtes le nouveau membre</h3>
                <ul>
                    <li><strong>Nom:</strong> {{ $client->nom }}</li>
                    <li><strong>Prénom:</strong> {{ $client->prenom }}</li>
                    <li><strong>Âge:</strong> {{ $client->age }}</li>
                    <li><strong>Ville:</strong> {{ $client->ville }}</li>
                    <li><strong>Mail:</strong> {{ $client->email }}</li>
                </ul>
                <div class="photo">
                    <p>Votre photo</p>
                    @if($client->image)
                        <img src="{{ asset('images/' . $client->image) }}" alt="Photo de {{ $client->nom }}">
                    @else
                        <div class="photo-placeholder">385 x 225</div>
                    @endif
                </div>
            </section>
            <section class="buttons">
                <a href="{{ url('/') }}"><button>Retour à l'accueil</button></a>
            </section>
        </main>
        <footer>
            <p>&#64; - Maison-ligues - 2024</p>
        </footer>
    </div>
</body>
</html>
