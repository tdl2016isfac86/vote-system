<?php

class Vote {
    private $choiceId;
    // On ne créé pas de propriété pour id et date dans la BDD
    
    function setChoice($c) {
        $this->choiceId = $c;
    }
    
    function write() {
        $res = requete_sql("INSERT INTO vote VALUES(NULL, now(), '".$this->choiceId."');");
        if(!$res) {
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
    function totalVotes() {
        $res = requete_sql("
        SELECT count(*) as total
        FROM vote
        WHERE choice_id='".$this->choiceId."'
        ");
        
        $total_array = mysql_fetch_assoc($res);
        $total = $total_array['total'];

        // On peut réduire les deux lignes ci-dessus en une seule
        // $total = mysql_fetch_assoc($res)['total'];
        
        return $total;
        
    }
    
    static function totalAllVotes() {
        $res = requete_sql("
        SELECT count(*) as total
        FROM vote
        ");
        
        $total_array = mysql_fetch_assoc($res);
        $total = $total_array['total'];
        
        return $total;
        
        // return  mysql_fetch_assoc($res)['total'];
    }
}