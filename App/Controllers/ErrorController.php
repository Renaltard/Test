<?php
// Ce sera la classe qui va permettre de gérer l'affichage et la logique 
// pour les pages d'erreur du site

class ErrorController {

    // créer une méthode pour l'erreur 404
    public function error404Action() {
        $this->show('404');
    }


    public function show($viewName, $viewData = []) {

        // si je veux visualiser le contenu des dates d'ouverture ?
        //var_dump($viewData);        // var_dump($weekOpeningHours) => Extérieur => KO
        //die();

        include __DIR__ . "/../Views/header.tpl.php";
        include __DIR__ . "/../Views/$viewName.tpl.php";
        include __DIR__ . "/../Views/footer.tpl.php";
    }
}