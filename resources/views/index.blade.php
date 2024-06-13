<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison des ligues tous les sports</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Index maison des ligues</h1>
        </header>
        <main>
            <div class="header">
                <h2><a href="{{ url('/') }}">Maison des ligues tous les sports</a></h2>
            </div>
            <section class="intro">
                <h3>Prêt(e) à la compétition? Cliquez sur le bouton pour commencer</h3>
                <p>
                    Tous les mois profitez de toutes les nouveautés et opportunités. À partir du mois prochain on vous propose toutes les séances de sport sur vos supports préférés.
                </p>
            </section>
            <section class="content-grid">
                <div class="row">
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                </div>
                <div class="row">
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                </div>
                <div class="row">
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                </div>
                <div class="row">
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                    <div class="content-box">content</div>
                </div>
            </section>
            <section class="cta">
                <button><a href="{{ url('/form') }}">Cliquez pour vous inscrire</a></button>
                <button><a href="{{ url('/login') }}">Login</a></button>
            </section>
        </main>
        <footer>
            <p>&#64; - Maison-ligues - 2024</p>
        </footer>
    </div>
</body>
</html>
