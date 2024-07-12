<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Modifier le profil</title>
</head>
<body class="bg-gray-200 flex flex-col items-center justify-center min-h-screen">
    <header class="fixed top-0 left-0 w-full z-50 pb-6">
        @include('partials.navbar')
    </header>
    <div class="bg-white p-8 rounded-lg shadow-md max-w-screen-md w-full mt-24 mb-24">
        <h1 class="text-2xl font-bold mb-4">Modifier le profil</h1>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" value="{{ $user->username }}" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="profile_picture" class="block text-sm font-medium text-gray-700">Photo de profil</label>
                <input type="file" name="profile_picture" id="profile_picture" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Nouveau mot de passe</label>
                <input type="password" name="password" id="password" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le nouveau mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div class="flex justify-between space-x-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Enregistrer les modifications</button>
                <button type="button" onclick="window.location.href='{{ route('profile') }}'" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Retour</button>
                <form action="{{ route('profile.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Supprimer mon compte</button>
                </form>
            </div>
        </form>
    </div>
    @include('partials.footer')
</body>
</html>