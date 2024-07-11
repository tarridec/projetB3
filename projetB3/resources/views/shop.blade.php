<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique de Jeux Vidéo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>

  <body class="bg-gray-100">
    <div>@include('partials.navbar')<div>

    <div class="container mx-auto p-4">
      <div class="flex justify-end p-4">
        <a href="{{ route('panier') }}">
          <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            <img src="{{ asset('images/panier.png') }}" alt="Panier" class="w-6 h-6 text-white">
          </button>
        </a>
      </div>

      <!-- Filtres -->
      <div class="flex justify-between items-center mb-4">
        <div class="flex space-x-4">
          <!-- Quand on aura des données, jouer avec SQL pour avoir les genres -->
          <div>
            <label for="genre" class="font-semibold">Genre:</label>

            <select id="genre" class="border rounded px-2 py-1">
              <option value="action">Action</option>
              <option value="rpg">RPG</option>
              <option value="adventure">Aventure</option>
              <!-- Autres options de genre -->
            </select>
          </div>

          <!-- Quand on aura des données, jouer avec SQL pour avoir les prix -->
          <div>
            <label for="price" class="font-semibold">Prix:</label>

            <select id="price" class="border rounded px-2 py-1">
              <option value="0-20">0 - 20 €</option>
              <option value="20-50">20 - 50 €</option>
              <option value="50-100">50 - 100 €</option>
              <!-- Autres options de prix -->
            </select>
          </div>
        </div>

        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
          Filtrer
        </button>
      </div>

      <!-- Liste des jeux -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Exemple de carte de jeu -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <!-- Quand on aura des données, jouer avec SQL pour avoir les jeux -->
          <img src="https://via.placeholder.com/300" alt="Jeu vidéo" class="w-full h-48 object-cover">

          <div class="p-4">
            <h2 class="text-xl font-semibold mb-2">Nom du Jeu</h2>

            <p class="text-gray-600 mb-2">Genre: Action</p>
            <p class="text-gray-600 mb-4">Prix: 29,99 €</p>
            
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded block w-full">
              Acheter
            </button>
          </div>
        </div>
        <!-- Répéter cette carte pour chaque jeu -->
      </div>
    </div>

    <div>@include('partials.footer')</div>
  </body>
</html>
