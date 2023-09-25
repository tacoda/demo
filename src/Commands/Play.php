<?php

namespace Ianjohnson\Demo\Commands;

use Ianjohnson\Demo\Services\InputOutput;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Play extends Command
{
    /**
     * The name of the command (the part after "bin/demo").
     *
     * @var string
     */
    protected static $defaultName = 'play';

    /**
     * The command description shown when running "php bin/demo list".
     *
     * @var string
     */
    protected static $defaultDescription = 'Play the game!';

    /**
     * Execute the command
     *
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @return int 0 if everything went fine, or an exit code.
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $term1 = rand(1, 10);
        $term2 = rand(1, 10);
        $result = $term1 + $term2;

        $io = new InputOutput($input, $output);

        $answer = (int) $io->ask(sprintf('What is %s + %s?', $term1, $term2));

        if ($answer === $result) {
            $io->success('Well done!');
        } else {
            $io->error(sprintf('Aww, so close. The answer was %s', $result));
        }

        if ($io->confirm('Play again?')) {
            return $this->execute($input, $output);
        }

        return Command::SUCCESS;
    }
}
