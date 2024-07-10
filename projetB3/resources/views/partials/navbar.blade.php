<ul>
    <li><a href="{{ route('index') }}">Acceuil</a></li>
    <li>
        <a href="#">Gestion</a>
        <ul>
            <li><a href="{{ route('gestionProduit') }}">Produit</a></li>
            <li><a href="{{ route('gestionClient') }}">Client</a></li>
        </ul>
    </li>
    <li><a href="{{ route('shop') }}">Boutique</a></li>
    <li><a href="{{ route('signup') }}">Se connecter</a></li>
</ul>