<?php

namespace Todstoychev\Econt\Builder;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Yaml;
use Todstoychev\Econt\Configuration\EcontConfiguration;

class ConfigBuilder
{
    /**
     * @return array
     */
    public function build()
    {
        $configDirectories = [__DIR__.'/../Resources/config', __DIR__.'/../../'];
        $locator = new FileLocator($configDirectories);
        $files = $locator->locate('econt.yml', null, false);
        $configs = [];

        foreach ($files as $file) {
            $configs = array_merge($configs, Yaml::parseFile($file));
        }

        $processor = new Processor();
        $configuration = new EcontConfiguration();

        return $processor->processConfiguration($configuration, $configs);
    }
}