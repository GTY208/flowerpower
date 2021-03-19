<?php

include_once '../Examenvoorbereiding 2021/database.php';

$DB = new database();


if(isset($_GET['id'])){
    $artikelcode =  $_GET['id'];

    
    $sql = "DELETE FROM artikel WHERE artikelcode=:code";

    
    $placeholder = ['code'=>$artikelcode];

    $DB->delete($sql, $placeholder, 'overzicht_artikelen.php');
    

}


?>