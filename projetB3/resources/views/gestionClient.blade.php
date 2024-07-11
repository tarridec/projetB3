<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion des Clients</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100">
        <div>@include('partials.navbar')</div>

        <!-- Main Container -->
        <div class="container mx-auto p-4 mt-10">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">Gestion des Clients</h1>
                <a href="">
                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">Ajouter un Client</button>
                </a>
            </div>

            <!-- Product Table -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left">Photo de profil</th>
                            <th class="px-4 py-2 text-left">Pseudonyme</th>
                            <th class="px-4 py-2 text-left">Nom</th>
                            <th class="px-4 py-2 text-left">Prénom</th>
                            <th class="px-4 py-2 text-left">Adresse Mail</th>
                            <th class="px-4 py-2 text-left">Mot de passe</th>
                            <th class="px-4 py-2 text-left">Pays</th>
                            <th class="px-4 py-2 text-left">Date de naissance</th>
                            <th class="px-4 py-2 text-left">Date de création</th>
                            <th class="px-4 py-2 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Product Row -->
                        <tr class="border-b">
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                            <td class="px-4 py-2 text-center">
                                <a href="" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg mr-2">Éditer</a>
                                <form action="" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Repeat for each product -->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-10">@include('partials.footer')</div>
    </body>
</html>
