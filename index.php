<?php

require_once("config.php");
require_once("functions.php");

require_once("classes/choice.php");
require_once("classes/vote.php");

$message = '';

// Si on a un vote, on l'enregistre
if(isset($_POST['vote'])) {
    $v = new Vote();
    $v->setChoice($_POST['vote']);
    $verif = $v->write();
    
    if($verif) {
        $message = 'Votre vote a bien été enregistré';
    }
    else {
        $message = 'Une erreur est survenue, veuillez revoter';
    }
}

?><!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head><title>Compote ─ Vote System</title></head>
    <body>
        <form action="index.php" method="post">
        <?php
        $liste = Choice::listChoices();
        foreach($liste as $choix) {
            echo '<input type="radio" name="vote" value="'.$choix->getId().'" id="C'.$choix->getId().'">';
            echo '<label for="C'.$choix->getId().'">'.$choix->getTitle().'</label>';
        }
        ?>
        <input type="submit" value="Voter">
        </form>
        
        <?php
        echo $message.'<br>';
        
        
        // Affichage des résultats
        $liste = Choice::listChoices();
        
        /*$tVotes = 0;
        foreach($liste as $choix) {
            $vote = new Vote();
            $vote->setChoice($choix->getId());
            $tChoix = $vote->totalVotes();

            $tVotes = $tVotes + $tChoix;    
        }*/
        
        $tVotes = Vote::totalAllVotes();
        foreach ($liste as $choix) {
            $vote = new Vote();
            $vote->setChoice($choix->getId());
            $total = $vote->totalVotes();
            
            echo $choix->getTitle(). ' : '.round($total*100/$tVotes).'%<br>';
        }
        
        ?>
    </body>
</html>