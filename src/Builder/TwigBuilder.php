<?php

namespace Todstoychev\Econt\Builder;

class TwigBuilder
{
    /**
     * @return \Twig_Environment
     */
    public function build()
    {
        $configBuilder = new ConfigBuilder();
        $config = $configBuilder->build();
        $directories = [__DIR__.'/../Resources/views'];
        $directories = array_merge($directories, $config['template_directories']);
        $loader = new \Twig_Loader_Filesystem($directories);

        return new \Twig_Environment(
            $loader,
            [
                'cache' => false,
            ]
        );
    }
}