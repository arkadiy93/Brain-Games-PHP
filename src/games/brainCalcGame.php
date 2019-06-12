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
    $introLine = "Answer \"yes\" if number even otherwise answer \"no\". \n";
    $getRoundData = function () {
        $minNumRange = 1;
        $maxNumRange = 10;
        $minSignRange = 0;
        $maxSignRange = 2;
        $signs = ['*', '+', '-'];
        $randNum1 = rand($minNumRange, $maxNumRange);
        $randNum2 = rand($minNumRange, $maxNumRange);
        $randSignIndex = rand($minSignRange, $maxSignRange);
        $sign = $signs[$randomSignIndex];
        $question = "{$randNum1} {$sign} {$randNum2}";
        $correctAnswer = getCorrectAsnwer($randNum1, $randNum2, $sign);
        return [$question, $correctAnswer];
    };
    startGame($introLine, $getRoundData);
}
