<?php
function displayUser(){
    //1. Effectuer la connexion à la BDD
    

    //2. Appel du model pour récupérer les données des articles
    $data = ModelUSer();
    $data = $modelUser -> findAll();

    //3. Appel de la view pour afficher les data
    $title = "Mes utilisateurs";
    include('./view/viewHeader.php');
    include('./view/viewArticle.php');
    include('./view/viewFooter.php');
    include('./view/viewUser.php')
}