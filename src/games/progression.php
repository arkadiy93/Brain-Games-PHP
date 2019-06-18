<?php

namespace Php\Project1\Games\Progression;

use function Php\Project1\Index\playGame;

define("MIN_NUM_RANGE", 2);
define("MAX_NUM_RANGE", 50);
define("MIN_INDEX_RANGE", 0);
define("MAX_INDEX_RANGE", 9);
define("STEP", 2);
define("PROGRESSION_LENGTH", 10);
define("PROG_DESCRIPTION", "What number is missing in the progression?");

function startBrainProgression()
{
    $getRoundData = function () {
        $progression = [];
        $randNum = rand(MIN_NUM_RANGE, MAX_NUM_RANGE);
        $randIndex = rand(MIN_INDEX_RANGE, MAX_INDEX_RANGE);
        for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
            $a = $randNum + ($i * STEP);
            if ($randIndex == $i) {
                $progression[] = '..';
                $correctAnswer = $a;
            } else {
                $progression[] = $a;
            }
        }
        $question = implode(' ', $progression);
        return [$question, $correctAnswer];
    };
    playGame(PROG_DESCRIPTION, $getRoundData);
}
