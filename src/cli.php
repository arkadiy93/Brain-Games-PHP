<?php

namespace Php\Project1\Cli;

use function \cli\line;
use function \cli\prompt;

function run()
{
  line("Welcome to the Brain Game!\n");
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
}
