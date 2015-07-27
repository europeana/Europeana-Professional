<?php

namespace Bolt\Extension\Europeana\ZohoImport;

use Bolt\Nut\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Console extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('zoho:import')
            ->setDescription('Import ZOHO Contacts');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = $this->app['extensions.ZohoImport']->testPage();

        $output->writeln($text);
    }
}
