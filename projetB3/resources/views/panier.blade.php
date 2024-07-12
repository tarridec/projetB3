<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panier</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100">
        <!-- Navbar -->
        <div>
            @include('partials.navbar')
        </div>

        <!-- Main Container -->
        <div class="container mx-auto p-4 mt-10">
            <div class="flex justify-center">
                <div class="w-full md:w-3/4 lg:w-1/2 bg-white p-10 rounded-lg shadow-md">
                    <h1 class="text-2xl font-semibold mb-6 text-gray-800">Votre Panier</h1>
                    
                    <!-- Cart Items -->
                    <div>
                        <!-- Exemple d'item de panier -->
                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg mb-4">
                            <div>
                                <h2 class="text-xl font-medium text-gray-800">Hogwart Legacy: L'Héritage de Poudlard</h2>
                                <p class="text-gray-800 font-semibold">20€</p>
                            </div>
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">Retirer</button>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg mb-4">
                            <div>
                                <h2 class="text-xl font-medium text-gray-800">Sea of Thieves</h2>
                                <p class="text-gray-800 font-semibold">19,99€</p>
                            </div>
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">Retirer</button>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg mb-4">
                            <div>
                                <h2 class="text-gray-800 font-semibold">Total : 39,99€</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Continue Shopping -->
                    <div class="flex items-center justify-between mt-6">
                        <a href="{{ route('shop') }}" class="text-blue-500 hover:underline">Continuer vos achats</a>
                        
                        <a href="" class="text-black-500 hover:underline">Payer</a>

                        <!--
                            On va pas faire un formulaire avec les infos, car trop long
                            Quand on cliquera dessus, on va dire qu'on a payé et on a notre facture
                        -->
                        <form method="POST" action="{{ route('facture') }}">
                            @csrf
                            <input type="hidden" name="order_id" value="">
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">Télécharger la facture</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-10">
            @include('partials.footer')
        </div>
    </body>
</html>