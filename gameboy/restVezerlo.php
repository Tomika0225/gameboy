<?php

require_once("GamesrestKezelo.php");

$view = "";
if (isset($_GET["view"])) 
    $view = $_GET["view"];


switch($view){

    case "all";
        $Gamerest = new GamesrestKezelo();
        $Gamerest ->getAllGames();
        break;

    case "single";
        $Gamerest = new GamesrestKezelo();
        $Gamerest ->getGamesById($_GET["id"]);
        break;

    case "tipus";
        $Gamerest = new GamesrestKezelo();
        $Gamerest ->getGamesByType($_GET["id"]);
        break;

    default:
    $Gamerest = new GamesrestKezelo();
    $Gamerest ->getFault();
}
?>