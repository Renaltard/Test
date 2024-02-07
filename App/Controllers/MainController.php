<?php
// Ce sera la classe qui va permettre de gérer l'affichage et la logique 
// pour les pages du site

class MainController {

    // Propriétés ? On verra ?

    // Constructeur ? On verra ?

    // Créer une méthode qui permet d'afficher la page d'accueil ?
    public function homeAction() {
       

        $this->show('home');
    }

    // Créer une méthode pour la page store
   
    public function show($viewName, $viewData = []) {

        // si je veux visualiser le contenu des dates d'ouverture ?
        //var_dump($viewData);        // var_dump($weekOpeningHours) => Extérieur => KO
        //die();

        include __DIR__ . "/../Views/partials/header.tpl.php";
        include __DIR__ . "/../Views/$viewName.tpl.php";
        include __DIR__ . "/../Views/partials/footer.tpl.php";
    }
}