<?php
        try
        {
            $bdd=new PDO('mysql:host=localhost;dbname=ucao','root','');
        }
        catch(Exception $e)
        {
            die('Erreur:' .$e->getMessage());
        }
?>