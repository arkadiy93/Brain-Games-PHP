<?php

namespace Php\Project1\Games\BrainCalcGame;

use function Php\Project1\Index\startGame;

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
    $introLine = "What is the result of the expression?\n";
    define("MIN_NUM_RANGE", 1);
    define("MAX_NUM_RANGE", 10);
    define("MIN_SIGN_RANGE", 0);
    define("MAX_SIGN_RANGE", 2);
    define("SIGNS", ['*', '+', '-']);
    $getRoundData = function () {
        $randNum1 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $randNum2 = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $randSignIndex = rand(MIN_SIGN_RANGE, MAX_SIGN_RANGE);
        $sign = SIGNS[$randSignIndex];
        $question = "{$randNum1} {$sign} {$randNum2}";
        $correctAnswer = getCorrectAsnwer($randNum1, $randNum2, $sign);
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
