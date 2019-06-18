<?php

namespace Php\Project1\Games\Calc;

use function Php\Project1\Index\playGame;

define("SIGNS", ['*', '+', '-']);
define("MIN_NUM_RANGE", 1);
define("MAX_NUM_RANGE", 10);
define("MIN_SIGN_RANGE", 0);
define("MAX_SIGN_RANGE", count(SIGNS) - 1);
define("CALC_DESCRIPTION", "What is the result of the expression?");

function getCorrectAsnwer($randNum1, $randNum2, $sign)
{
    switch ($sign) {
        case '*':
            return $randNum1 * $randNum2;
        case '+':
            return $randNum1 + $randNum2;
        case '-':
            return $randNum1 - $randNum2;
    }
}

function startBrainCalc()
{
    $getRoundData = function () {
        $a = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $b = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $sign = SIGNS[rand(MIN_SIGN_RANGE, MAX_SIGN_RANGE)];
        var_dump(MAX_SIGN_RANG
        $question = "$a $sign $b";
        $correctAnswer = getCorrectAsnwer($a, $b, $sign);
        return [$question, $correctAnswer];
    };
    // Question for mentor: Why if i keep in all game files the same constant name for the description,
    // for example plainly DESCRIPTION instead of CALC_DESCRIPTION,
    // then the program will not correctly and give to all games the same description?
    // in order for it to work i had to name all constants with the game name prefix: GAME_DESCRIPTION
    playGame(CALC_DESCRIPTION, $getRoundData);
}
