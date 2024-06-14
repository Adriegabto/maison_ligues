<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Connexion</h1>
        </header>
        <main>
            <div class="header">
                <h2><a href="{{ url('/') }}">Maison des ligues tous les sports</a></h2>
                <h3>Membres</h3>
            </div>
            <div class="icon">
                <div class="icon-placeholder">100 x 100</div>
            </div>
            <section class="login-form">
                <h3>Connexion</h3>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <label for="email">email</label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required>
                    
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
