<?php

namespace App\src\games\calc;

use function App\src\index\playGame;

define("SIGNS", ['*', '+', '-']);
define("MIN_NUM_RANGE", 1);
define("MAX_NUM_RANGE", 10);
define("MIN_SIGN_RANGE", 0);
define("MAX_SIGN_RANGE", count(SIGNS) - 1);
const DESCRIPTION = "What is the result of the expression?";

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
        $a = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $b = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $sign = SIGNS[rand(MIN_SIGN_RANGE, MAX_SIGN_RANGE)];
        $question = "$a $sign $b";
        $correctAnswer = getCorrectAsnwer($a, $b, $sign);
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getRoundData);
}
