<?php

class Choice {
    private $id;
    private $title;
    
    function __construct($id) {
        $res = requete_sql("SELECT * FROM choice WHERE id='".$id."'");
        
        $i = mysql_fetch_assoc($res);
        
        $this->id = $i['id'];
        $this->title = $i['title'];
    }
    
    function getId() {
        return $this->id;
    }
    
    function getTitle() {
        return $this->title;
    }
    
    static function listChoices() {
        $res = requete_sql("SELECT id FROM choice");
        
        $list = array();
        while($row = mysql_fetch_assoc($res)) {
            array_push($list, new Choice($row['id']));
        }
        return $list;
    }
}
