<ul>
    <li><a href="{{ route('index') }}">Acceuil</a></li>

    <li>
        <a href="#">Gestion</a>
        <ul>
            <li><a href="{{ route('gestionProduit') }}">Produit</a></li>
            <li><a href="{{ route('gestionFacture') }}">Facture</a></li>
        </ul>
    </li>
    
    <li><a href="{{ route('shop') }}">Boutique</a></li>
</ul>