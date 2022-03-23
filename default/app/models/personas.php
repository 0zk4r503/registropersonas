<?php
class Personas extends ActiveRecord {
    public function getPersonas($page, $ppage=20){
return $this-> paginite("page: $page", "per_page: $ppage", 'order: id desc'); 
    }
    
}