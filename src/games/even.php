<?php

namespace BrainGames\games\even;

use function BrainGames\index\playGame;

define("MIN_QUESTION_VAL", 1);
define("MAX_QUESTION_VAL", 20);
define("EVEN_DESCRIPTION", "Answer \"yes\" if number even otherwise answer \"no\".");

function isEven($a)
{
    return $a % 2 == 0;
}

function startBrainEven()
{
    $getRoundData = function () {
        $question = rand(MIN_QUESTION_VAL, MAX_QUESTION_VAL);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    playGame(EVEN_DESCRIPTION, $getRoundData);
}
