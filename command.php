<?php

    function ajouter($Savon, $Produit, $Provenance, $X, $Y){
        if(require("connexion.php")){
            $req = $access->prepare("INSERT INTO produit (Savon, Produit, Provenance, X, Y) VALUES ($Savon, $Produit, $Provenance, $X, $Y)");
            $req->execute(array($Savon, $Produit, $Provenance, $X, $Y));
            
            $req->closeCursor();
        }
    }

    function afficher(){
        if(require("connexion.php")){
            $req=$access->prepare("SELECT * FROM produit");

            $req->execute();

            $data = $req->fetchAll(PDO::FETCH_OBJ);

            return $data;

            $req->closeCursor();
        }
    }

?>