<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formulaire d'inscription</h1>
        </header>
        <main>
            <div class="header">
                <h2>Maison des ligues tous les sports</h2>
            </div>
            <section class="images">
                <div class="image-box">100 x 100</div>
                <div class="image-box">100 x 100</div>
                <div class="image-box">100 x 100</div>
                <div class="image-box">100 x 100</div>
                <div class="image-box">100 x 100</div>
            </section>
            <section class="form-section">
                <h3>Inscriptions</h3>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom" required>

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>

                    <label for="age">Age</label>
                    <input type="text" id="age" name="age" placeholder="Age" required>

                    <label for="ville">Ville</label>
                    <input id="ville" name="ville" required type="text">

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Votre email" required>

                    <label for="password">Choisir un mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="********" required>

                    <label for="photo">Télécharger une photo</label>
                    <input type="file" id="photo" name="photo">

                    <button type="submit">Valider</button>
                </form>
            </section>
         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        </main>
        <footer>
            <p>&#64; - Maison-ligues - 2024</p>
        </footer>
    </div>
</body>
</html>
