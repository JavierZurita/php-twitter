<?php
    $tweets = [
        [
            "text" => "Lorem ipsum dolor sit amet.",
            "author" => "Javier", 
            "username" => "@Javier"
        ],[
            "text" => "Lorem ipsum dolor sit amet.",
            "author" => "Pepito", 
            "username" => "@Pepe123"
        ],[
            "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, exercitationem?",
            "author" => "Lolo", 
            "username" => "@Manolo12344"
        ],[
            "text" => "Lorem ipsum",
            "author" => "Beatr", 
            "username" => "@B_eatriz"
        ],[
            "text" => "Lorem ipsum dolor sit amet.",
            "author" => "Javier", 
            "username" => "@Javier"
        ],[
            "text" => "Lorem ipsum dolor sit amet.",
            "author" => "Javier", 
            "username" => "@Javier"
        ]
    ];

    $twitterJson = file_get_contents("twitter.json");
    $twitterJsonArray = json_decode($twitterJson, true);

    // die();

    require_once "index.html";