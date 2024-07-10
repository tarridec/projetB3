<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Shop Page</title>
    </head>

    <body>
        <div>@include('partials.navbar')<div>

        <div class="col-lg-12">
          <div class="top-downloaded">
            <div class="heading-section">
              <h4>Filtres</h4>
            </div>
            <div class="row">
              <div class="col-md-6">
                <ul align="left">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <h4>Prix</h4>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a class="dropdown-item" href="">Tout</a>
                      <a class="dropdown-item" href="">Gratuit</a>
                      <a class="dropdown-item" href="">-5 €</a>
                      <a class="dropdown-item" href="">5-20 €</a>
                      <a class="dropdown-item" href="">20-60 €</a>
                      <a class="dropdown-item" href="">60+ €</a>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="col-md-6">
                <ul>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <h4>Genre</h4>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a class="dropdown-item" href="">Tout</a>
                      
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      
        <div class="most-popular">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4>Magasin</h4>
              </div>
              <div class="row">
                  
              </div>
            </div>
          </div>
        </div>

        <div>@include('partials.footer')<div>
    </body>
</html>
