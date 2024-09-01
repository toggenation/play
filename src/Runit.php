<?php

namespace Toggenation\Play;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;


class Runit
{
    public static function run()
    {
        echo "Hi" . PHP_EOL;
    }

    public static function dir()
    {
        $process = new Process(['ls', '-lsa']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}
