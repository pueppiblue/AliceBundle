<?php


namespace Hautelook\AliceBundle\Console\Command\Doctrine;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @package Hautelook\AliceBundle\Console\Command\Doctrine
 * @author Dennis Langen <langendennis81@gmail.com>
 */
final class DoctrineOrmMissingBundleInformationCommand extends Command
{
    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this
            ->setName('hautelook:fixtures:load')
            ->setAliases(['hautelook:fixtures:load'])
            ->setDescription('Load data fixtures to your database.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Attention',
            '============',
            '',
            'No ORM bridge has been installed. Please install one to be able to use this command.',
            'See https://github.com/hautelook/AliceBundle#installation for more information.'
        ]);
    }
}