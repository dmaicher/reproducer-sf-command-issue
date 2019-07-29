<?php

namespace App\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Routing\RouterInterface;

class MyCommand extends \Symfony\Component\Console\Command\Command
{
    protected static $defaultName = 'foo-command';

    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @required
     */
    public function setRouter(RouterInterface $router): void
    {
        $this->router = $router;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->router->match('/'));
    }
}
