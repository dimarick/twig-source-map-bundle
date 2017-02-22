<?php

namespace Knp\Bundle\PaginatorBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Processor;
use TwigSourceMapBundle\Twig\Environment;

class TwigSourceMapExtension extends Extension
{
    /**
     * Build the extension services
     *
     * @param array $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();

        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        if ($config['enabled']) {
        	$twigDefinition = $container->getDefinition('twig');
        	$twigDefinition->setClass(Environment::class);
		}
    }
}
