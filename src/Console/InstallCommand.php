<?php

namespace Acacha\AdminLTETemplateLaravel\Console;

use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Process\Process;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InstallCommand extends Command
{
    /**
     * Configure the command options.
     */
    protected function configure()
    {
        $this->ignoreValidationErrors();

        $this->setName('install')
                ->setDescription('Install Acacha AdminLTE package into the current project.');
    }

    /**
     * Execute the command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        var_dump(__DIR__ . "/../../vendor/acacha/llum/llum package AdminLTE");


//        $composer = $this->findComposer();
//
//        $process = new Process($composer.' require acacha/admin-lte-template-laravel', null, null, null, null);
//
//        $process->run(function ($type, $line) use ($output) {
//            $output->write($line);
//        });
//
//        copy(__DIR__.'/stubs/app.php', getcwd().'/config/app.php');
//
//        passthru('php artisan vendor:publish --tag=adminlte --force');
    }

    /**
     * Get the composer command for the environment.
     *
     * @return string
     */
    private function findComposer()
    {
        if (file_exists(getcwd().'/composer.phar')) {
            return '"'.PHP_BINARY.'" composer.phar"';
        }

        return 'composer';
    }
}
