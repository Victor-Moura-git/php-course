<?php

$suits = array("clubs", "diamonds", "hearts", "spades");
$cards = array("Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King");

$rSuit = array_rand($suits);
$rCard = array_rand($cards);

echo "The random select card is the $cards[$rCard] of $suits[$rSuit].";
