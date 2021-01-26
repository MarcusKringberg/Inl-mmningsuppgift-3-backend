<?php
// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");


        

$diskArray = [
    array(
        "id"=>1,
        "title"=>"Beatles, Help",
        "picture"=> "Beatels_Help.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>2,
        "title"=>"Beatles, For Sale",
        "picture"=> "Beatels_for_sale.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>3,
        "title"=>"Djungelboken del 2",
        "picture"=> "Djungelboken_Del_2.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>4,
        "title"=>"Du är den ende",
        "picture"=> "Du_Ar_Den_Ende.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>5,
        "title"=>"Karl-Bertil Jonssons Julafton",
        "picture"=> "Karl_Bertil_Jonsons_jul.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>6,
        "title"=>"StatusQuo",
        "picture"=> "Status_quo.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>7,
        "title"=>"Sven-Ingvars",
        "picture"=> "Sven_Ingvars.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>8,
        "title"=>"Världens bästa Karlsson",
        "picture"=> "Karlsson_pa_taket.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>9,
        "title"=>"Lady och Lufsen",
        "picture"=> "Lady_och_lufsen.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    ),
    array(
        "id"=>10,
        "title"=>" Amitas och Televinkens trafikskiva",
        "picture"=> "Anitas_och_Televinkens_trafikskiva.jpg",
        "description"=>"Beskrivande text om skivan. Den är kanon!",
        "price"=>"200kr"
    )
    ];
// 4. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($diskArray, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
// Skicka JSON till klienten.
echo $json;
