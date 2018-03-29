<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/28/18
 * Time: 11:00 AM
 */

namespace Todstoychev\Econt\Configuration;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class EcontConfiguration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $tree = new TreeBuilder();
        $root = $tree->root('econt');
        $root->children()
                ->arrayNode('template_directories')
                ->end()
                ->scalarNode('environment')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->arrayNode('environments')
                    ->children()
                        ->arrayNode('dev')
                            ->children()
                                ->scalarNode('username')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                                ->scalarNode('password')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                                ->scalarNode('service_request_url')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                                ->scalarNode('parcel_request_url')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode('prod')
                            ->children()
                                ->scalarNode('username')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                                ->scalarNode('password')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                                ->scalarNode('service_request_url')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                                ->scalarNode('parcel_request_url')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $tree;
    }
}