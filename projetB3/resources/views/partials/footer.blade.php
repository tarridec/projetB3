<footer class="bg-blue-500 text-white text-center p-2 fixed bottom-0 w-full">
    <div class="flex justify-around">
        <a href="{{ route('conditionVente') }}" class="nav-link">Les conditions de vente</a>
        <a href="{{ route('politiqueConfidentialite') }}" class="nav-link">Politique de confidentialité</a>
    </div>
</footer>

<style>
.nav-link {
    position: relative;
    display: inline-block;
    padding: auto;
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
</style>