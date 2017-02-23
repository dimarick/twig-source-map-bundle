<?php

namespace TwigSourceMapBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use TwigSourceMapBundle\DependencyInjection\ReplaceTwigCompilerPass;

/**
 * Class TwigSourceMapBundle
 */
class TwigSourceMapBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ReplaceTwigCompilerPass());
    }
}
