<?php


namespace Hautelook\AliceBundle\Functional;

use Hautelook\AliceBundle\HautelookAliceBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class WithoutDoctrineKernel
 * @package Hautelook\AliceBundle\Functional
 * @author Dennis Langen <dennis.langen@i22.de>
 */
class WithoutDoctrineKernel extends Kernel
{

    private $addedBundles = [];

    /**
     * @inheritdoc
     */
    public function registerBundles()
    {
        return array_merge(
            [
                new FrameworkBundle(),
                new HautelookAliceBundle(),
            ],
            $this->addedBundles
        );
    }

    public function addBundle(Bundle $bundle): self
    {
        $this->addedBundles[] = $bundle;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_without_doctrine.yml');
    }
}
