<?php

namespace TwigSourceMapBundle\Twig;

use Dimarick\TwigSourceMap\Generator;

/**
 * Class Environment
 */
class Environment extends \Twig_Environment
{
    /**
     * @param string $name
     * @param null $index
     * @return \Twig_Template
     */
    public function loadTemplate($name, $index = null)
    {
        $template = parent::loadTemplate($name, $index);

        $generator = new Generator();
        $map = $generator->generate($template);
        file_put_contents($map->getPath(), $map->getSource());

        return $template;
    }
}
