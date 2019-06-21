<?php

namespace BrainGames\games\calc;

use function BrainGames\index\playGame;

define("SIGNS", ['*', '+', '-']);
define("MIN_QUESTION_VAL", 1);
define("MAX_QUESTION_VAL", 10);
define("MIN_SIGN_RANGE", 0);
define("MAX_SIGN_RANGE", count(SIGNS) - 1);
define("CALC_DESCRIPTION", "What is the result of the expression?");

function getCorrectAsnwer($a, $b, $sign)
{
    switch ($sign) {
        case '*':
            return $a * $b;
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
    }
}

function startBrainCalc()
{
    $getRoundData = function () {
        $a = rand(MIN_QUESTION_VAL, MAX_QUESTION_VAL);
        $b = rand(MIN_QUESTION_VAL, MAX_QUESTION_VAL);
        $sign = SIGNS[rand(MIN_SIGN_RANGE, MAX_SIGN_RANGE)];
        $question = "$a $sign $b";
        $correctAnswer = getCorrectAsnwer($a, $b, $sign);
        return [$question, $correctAnswer];
    };
    playGame(CALC_DESCRIPTION, $getRoundData);
}
