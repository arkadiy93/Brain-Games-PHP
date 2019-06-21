<?php

namespace BrainGames\games\progression;

use function BrainGames\index\playGame;

define("MIN_STEP_RANGE", 2);
define("MAX_STEP_RANGE", 50);
define("MIN_INDEX_RANGE", 0);
define("MAX_INDEX_RANGE", 9);
define("STEP", 2);
define("PROGRESSION_LENGTH", 10);
define("PROG_DESCRIPTION", "What number is missing in the progression?");

function startBrainProgression()
{
    $getRoundData = function () {
        $progression = [];
        $initialProgStep = rand(MIN_STEP_RANGE, MAX_STEP_RANGE);
        $hiddenStepPos = rand(MIN_INDEX_RANGE, MAX_INDEX_RANGE);
        for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
            $currentProgStep = $initialProgStep + ($i * STEP);
            if ($hiddenStepPos == $i) {
                $progression[] = '..';
                $correctAnswer = $currentProgStep;
            } else {
                $progression[] = $currentProgStep;
            }
        }
        $question = implode(' ', $progression);
        return [$question, $correctAnswer];
    };
    playGame(PROG_DESCRIPTION, $getRoundData);
}
