<?php

    $matches = [
        [
            "team1" => "Torino",
            "team2" => "Bari",
            "score1" => 10,
            "score2" => 5
        ],
        [
            "team1" => "Bologna",
            "team2" => "Genova",
            "score1" => 20,
            "score2" => 8
        ],
        [
            "team1" => "Inter",
            "team2" => "Lecce",
            "score1" => 11,
            "score2" => 4
        ]
    ];
?>

<div>
    <ul>
        <?php foreach($matches as $match) { ?>
            <li>
                <?php
                    echo $match["team1"] . " - " . $match["team2"] . " | " . $match["score1"] . "-" . $match["score2"];
                ?>
            </li>
        <?php } ?>
    </ul>
</div>