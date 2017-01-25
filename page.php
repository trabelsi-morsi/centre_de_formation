<?php
                include "connexion.php";

                //initialisation des variables $controleur et $action
                $controller='etudiant';
                $action='affich';

                //Recupération
                if(isset($_REQUEST['controller']))
                $controller =$_REQUEST['controller'];

                if(isset($_REQUEST['action']))
                $action =$_REQUEST['action'];


 
                include 'Controllers/'.$controller.'.controller.php'; 
                ?>