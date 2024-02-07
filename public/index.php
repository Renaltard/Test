<?php

    // Rajouter les inclusions
    include __DIR__ . '/../App/Controllers/MainController.php';
    include __DIR__ . '/../App/Controllers/ErrorController.php';

    

    $page = "/";

    // si la variable page est passée en query string et qu'elle est remplit
    if(isset($_GET['page']) && !empty($_GET['page'])) {
        // on mets à jour le contenu de la page affichée
        $page = $_GET['page'];
    }


    // TABLEAU V2 (avec réécriture d'URL)
    $routes = [
        '/' => [ 'controller' => 'MainController', 'method' => 'homeAction' ],
        '/about' => [ 'controller' => 'MainController', 'method' => 'aboutAction' ],
        '/products' => [ 'controller' => 'MainController', 'method' => 'productsAction' ],
        '/store' => [ 'controller' => 'MainController', 'method' => 'storeAction' ]
    
    ];


    // A ce stade, $page contient une valeur = ? 'home', soit la valeur contenu dans la query string ? (products, store, azerrrr)
    
    // Je fais un test pour vérifier que ma route existe dans le tableau
    if(isset($routes[$page])) {                                 // => $page = 'home' (page d'accueil)
        // la route existe
        $currentRoute = $routes[$page];                         // => $currentRoute =  [ 'controller' => 'MainController', 'method' => 'homeAction' ] (array)
        $nameController = $currentRoute['controller'];          // => $nameController = 'MainController' (string)
        $nameMethod = $currentRoute['method'];                  // => $nameMethod = 'homeAction' (string)
        // il va falloir instancier le controller et appeler la méthode
        $controller = new $nameController();                    // => $controller = new 'MainController'()          => DE LA MAGIE EN PHP
        $controller->$nameMethod();                             // => $controller => $mainController->'homeAction'()  => DISPATCHER (interpreteur de la route)

    } else {
        // On est dans une erreur 404
        $errorController = new ErrorController();
        $errorController->error404Action();
    }
