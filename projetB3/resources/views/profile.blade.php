<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Profil</title>
</head>
<body class="bg-gray-200 flex flex-col items-center justify-center min-h-screen">
    <header class="fixed top-0 left-0 w-full z-50 pb-6">
        @include('partials.navbar')
    </header>
    <div class="bg-white p-8 rounded-lg shadow-md max-w-screen-md w-full mt-24">
        <h1 class="text-2xl font-bold mb-4">Profil de l'utilisateur</h1>
        <div class="flex items-center mb-4">
            @if ($user->profile_picture)
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="w-16 h-16 rounded-full mr-4">
            @else
                <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Picture" class="w-16 h-16 rounded-full mr-4">
            @endif
            <p class="text-xl font-semibold">{{ $user->username }}</p>
        </div>
        <p><strong>Nom:</strong> {{ $user->name }}</p>
        <p><strong>Prénom:</strong> {{ $user->surname }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <!-- Add more user details as needed -->
        <a href="{{ route('profile.edit') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit Profile</a>
    </div>
    @include('partials.footer')
</body>
</html>