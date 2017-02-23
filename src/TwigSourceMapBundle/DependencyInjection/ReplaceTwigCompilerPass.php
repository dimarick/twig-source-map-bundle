<?php

namespace TwigSourceMapBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use TwigSourceMapBundle\Twig\Environment;

/**
 * Class ReplaceTwigCompilerPass
 */
class ReplaceTwigCompilerPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter('twig_source_map.enabled')) {
            $twigDefinition = $container->getDefinition('twig');
            $twigDefinition->setClass(Environment::class);
        }
    }
}
