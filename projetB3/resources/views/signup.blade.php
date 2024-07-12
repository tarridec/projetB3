<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Inscription</title>
</head>

<body class="bg-gray-200 flex flex-col items-center justify-center min-h-screen">

    <header class="fixed top-0 left-0 w-full z-50 pb-6">
        @include('partials.navbar')
    </header>

    <div class="bg-white p-8 rounded-lg shadow-md max-w-screen-md w-full mt-20 mb-20">
        <h1 class="text-2xl font-bold mb-4">Page d'inscription</h1>

        <form method="POST" action="/register" class="grid grid-cols-2 gap-x-4 gap-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nom <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" placeholder="Votre nom" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="surname" class="block text-sm font-medium text-gray-700">Prénom <span class="text-red-500">*</span></label>
                <input type="text" name="surname" id="surname" placeholder="Votre prénom" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Nom d'utilisateur <span class="text-red-500">*</span></label>
                <input type="text" name="username" id="username" placeholder="Choisissez un nom d'utilisateur" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="birthday" class="block text-sm font-medium text-gray-700">Date de naissance <span class="text-red-500">*</span></label>
                <input type="date" name="birthday" id="birthday" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Pays <span class="text-red-500">*</span></label>
                <input type="text" name="country" id="country" placeholder="Votre pays" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" id="email" placeholder="Entrez votre email" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe <span class="text-red-500">*</span></label>
                <input type="password" name="password" id="password" 
                placeholder="Entrez votre mot de passe" required class="mt-1 block w-full px-3 py-2 
                border border-gray-300 shadow-sm focus:outline-none focus:ring-blue-500 
                focus:border-blue-500 sm:text-sm rounded-md">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe <span class="text-red-500">*</span></label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                placeholder="Confirmez votre mot de passe" required class="mt-1 block w-full px-3 py-2 
                border border-gray-300 shadow-sm focus:outline-none focus:ring-blue-500 
                focus:border-blue-500 sm:text-sm rounded-md no-paste" onpaste="return false;">
            </div>

            <div class="col-span-2">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 
                px-4 rounded-md hover:bg-blue-600 cursor-pointer">S'inscrire</button>
            </div>

            <p class="text-sm text-gray-600 flex justify-center col-span-2">
                Vous avez déjà un compte ?
                <space class="mx-1"></space>
                <a href="{{ route('signin') }}" class="text-blue-500 hover:underline">
                    Connectez-vous
                </a>
            </p>
        </form>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('partials.footer')
</body>
</html>
