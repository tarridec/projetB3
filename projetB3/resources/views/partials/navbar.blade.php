<ul class="flex justify-around p-3 bg-blue-500">
    <li class="text-white relative group">
        <a href="{{ route('index') }}" class="nav-link">Accueil</a>
    </li>
    <li class="text-white relative group">
        <a class="nav-link">Gestion <span class="icon">▼</span></a>
        <ul class="dropdown-menu absolute hidden bg-blue-500 group-hover:flex flex-col">
            <li class="text-white p-2"><a href="{{ route('gestionProduit') }}">Produit</a></li>
            <li class="text-white p-2"><a href="{{ route('gestionClient') }}">Client</a></li>
        </ul>
    </li>
    <li class="text-white relative group">
        <a href="{{ route('shop') }}" class="nav-link">Boutique</a>
    </li>
    @if(Auth::check())
        <li class="text-white relative group">
            <a class="nav-link">{{ Auth::user()->username }} <span class="icon">▼</span></a>
            <ul class="dropdown-menu absolute hidden bg-blue-500 group-hover:flex flex-col">
                <li class="text-white p-2"><a href="{{ route('profile') }}">Mon profil</a></li>
                <li class="text-white p-2"><a href="{{ route('index') }}">Se déconnecter</a></li>
            </ul>
        </li>
    @else
        <li class="text-white relative group">
            <a href="{{ route('signin') }}" class="nav-link">Se connecter</a>
        </li>
    @endif
</ul>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav-link {
    position: relative;
    display: inline-block;
    padding: 8px 16px;
    transition: color 0.3s ease;
}

.nav-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0%;
    height: 2px;
    background-color: white;
    transition: width 0.3s ease;
}

.nav-link:hover::after {
    width: 100%;
}

.group:hover .icon {
    transform: rotate(180deg);
}

.dropdown-menu {
    display: none;
    opacity: 0;
    transition: opacity 0.5s ease-in-out, transform 0.3s ease-in-out;
    transform: scaleY(0);
    transform-origin: top;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) scaleY(0);
    background-color: #3b82f6;
    width: 200%; 
    border-radius: 4px;
    z-index: 10; 
}

.group:hover .dropdown-menu {
    display: flex;
    opacity: 1;
    transform: translateX(-50%) scaleY(1);
}

.dropdown-menu li {
    transition: transform 0.3s ease-in-out;
    padding: 8px 16px;
}

.dropdown-menu li:hover {
    transform: translateX(10px);
}

.icon {
    display: inline-block;
    transition: transform 0.3s ease;
}
</style>