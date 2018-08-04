<?php

namespace Volosatov\Welcomer;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class WelcomeCommand extends Command
{
    public function configure()
    {
        $this->setName('welcome')
             ->setDescription('Great a user based on the time of the day')
             ->setHelp('Some help')
             ->addArgument('user', InputArgument::REQUIRED, 'The name of the user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = $input->getArgument('user');
        $output->writeln('Hello there, ' . $user . '!');
    }
}