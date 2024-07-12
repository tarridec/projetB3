<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Connexion</title>
</head>

<body class="bg-gray-200 flex flex-col items-center justify-center min-h-screen">

    <header class="fixed top-0 left-0 w-full z-50">
        @include('partials.navbar')
    </header>

    <div class="bg-white p-8 rounded-lg shadow-md max-w-sm w-full mt-8">
        <h1 class="text-2xl font-bold mb-4">Page de Connexion</h1>

        <form method="POST" action="/login" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="Entrez votre email" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm 
                focus:outline-none focus:ring-blue-500 focus:border-blue-500 
                sm:text-sm rounded-md">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" 
                placeholder="Entrez votre mot de passe" required class="mt-1 block w-full px-3 py-2 
                border border-gray-300 shadow-sm focus:outline-none focus:ring-blue-500 
                focus:border-blue-500 sm:text-sm rounded-md">
            </div>

            <div>
                <input type="submit" value="Login" class="w-full bg-blue-500 text-white py-2 
                px-4 rounded-md hover:bg-blue-600 cursor-pointer">
            </div>

            <p class="text-sm text-gray-600 flex justify-center">
                Vous n'avez pas de compte ?
                <space class="mx-1"></space>
                <a href="{{ route('signup') }}" class="text-blue-500 hover:underline">
                    Inscrivez-vous
                </a>
            </p>
        </form>
    </div>

    @include('partials.footer')
</body>
</html>