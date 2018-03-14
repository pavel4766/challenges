<?php

/*
*20 kids have gotten together to play baseball, but they need help making the teams as even as possible. The kids have all ranked their skill level from 1-10. In no particular order, here are their skill numbers: 8,5,6,9,3,8,2,4,6,10,8,5,6,1,7,10,5,3,7,6.
*Write an algorithm (in PHP) that will place these (or any other) kids into two teams of equal size with the total skill level being as even as possible.
*/

$players = array(8,5,6,9,3,8,2,4,6,10,8,5,6,1,7,10,5,3,7,6);
arsort($players);
$countOfPlayers = count($players);
$team1 = array();
$team2 = array();

for ($i = 0; $i < $countOfPlayers ; $i++) {
    if (($i % 2) == 0) {
        $location = &$team1;
    } else {
        $location = &$team2;
    }
    $player = array_shift($players);
    array_push($location, $player);
}

echo '<pre>'; print_r($team1); echo '</pre>';
echo '<pre>'; print_r($team2); echo '</pre>';

/* another solution would be to assign the first two players of the sorted players array to two different team arrays and then loop though the rest of the players array and put each player on the team with the lowest sum of values, and then balance the arrays by length, but for the sake of the problem, that may be overkill */

?>