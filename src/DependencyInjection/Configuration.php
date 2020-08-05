<?php

namespace Rikudou\ClockBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Yaml\Yaml;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $tree = new TreeBuilder('rikudou_clock');
        $availableServices = array_keys(Yaml::parseFile(__DIR__ . '/../Resources/config/services.yaml')['services']);

        $rootNode = $tree->getRootNode();

        $rootNode
            ->children()
                ->enumNode('default_clock')
                    ->info('The clock that will be used as default when injecting interface')
                    ->values($availableServices)
                    ->defaultValue(reset($availableServices))
                ->end()
                ->scalarNode('timezone')
                    ->info('The timezone used for timezoned clocks')
                    ->defaultValue('UTC')
                ->end()
            ->end();

        return $tree;
    }
}
