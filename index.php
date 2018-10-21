<?php

$id = rand(1, 493);
$character = file_get_contents("https://rickandmortyapi.com/api/character/$id");

$parsed_character = json_decode($character, true);
?>

<html>
<head>
    <title>Rick and Morty Characters</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 5px; /* 5px rounded corners */
            background-color: #03132b;
            color: white;
            font-family: 'Montserrat', sans-serif;
            padding: 1rem;
        }

        /* Add rounded corners to the top left and the top right corner of the image */
        img {
            border-radius: 5px 5px 0 0;
            width:100%;
            max-width: 500px;
        }
    </style>
</head>


<div class="card">
    <h1><b><?=$parsed_character['name'];?></b></h1>
    <img src="<?=$parsed_character['image']?>" alt="Avatar" style="">
    <div class="container">
    <p>Status: <?=$parsed_character['status'];?></p>
    <p>Gender: <?=$parsed_character['gender'];?></p>
    <p>Location: <?=$parsed_character['origin']['name'];?></p>
</div>
</html>