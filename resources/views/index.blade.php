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
        <h1><a href="{{ url('/') }}">Maison des ligues tous les sports</a></h1>
        </header>
        <main>
            <div class="header">
                
            </div>
            <section class="intro">
                <h3>Prêt(e) à la compétition? Cliquez sur le bouton pour commencer</h3>
                <p>
                    Tous les mois profitez de toutes les nouveautés et opportunités. À partir du mois prochain on vous propose toutes les séances de sport sur vos supports préférés.
                </p>
            </section>
            <section class="content-grid">
                <div class="row">
                    <div class="content-box">
                    <img src="{{ asset('images/aviron.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/atlétisme.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/badminton.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/boxe.png') }}" alt="Logo" class="resize-image">
                    </div>
                </div>
                <div class="row">
                    <div class="content-box">
                    <img src="{{ asset('images/judo.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/tar.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/cyslisme.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/escrime.png') }}" alt="Logo" class="resize-image">
                    </div>
                </div>
                <div class="row">
                    <div class="content-box">
                    <img src="{{ asset('images/tennis.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/halterophilie.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/natation.png') }}" alt="Logo" class="resize-image">
                    </div>
                    <div class="content-box">
                    <img src="{{ asset('images/gym.png') }}" alt="Logo" class="resize-image">
                    </div>
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
