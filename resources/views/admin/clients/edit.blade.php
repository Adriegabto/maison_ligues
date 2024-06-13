<!DOCTYPE html>
<html>
<head>
    <title>Edit Client</title>
</head>
<body>
    <h1>Edit Client</h1>
    <form method="POST" action="{{ route('clients.update', $client->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="{{ $client->nom }}" required>
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" value="{{ $client->prenom }}" required>
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" value="{{ $client->age }}" required>
        </div>
        <div>
            <label for="ville">Ville</label>
            <input type="text" name="ville" value="{{ $client->ville }}" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $client->email }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>