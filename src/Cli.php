<?php

namespace Php\Project\Cli;

use function cli\line;
use function cli\prompt;

function getUserName()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have you name?');
    line('Hello, %s!', $name);
}
