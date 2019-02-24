<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Description of Configurations
 *
 * @author <Garamszegi Erik>
 * */
class Configuration implements ConfigurationInterface {

    //put your code here
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder('knpu_lorem_ipsum');
        $rootNode = \method_exists(TreeBuilder::class, 'getRootNode') ? $treeBuilder->getRootNode() : $treeBuilder->root('knpu_lorem_ipsum');

        $rootNode
                ->addDefaultsIfNotSet()
                ->children()
                    ->scalarNode('word_provider')
                        ->defaultNull()
                    ->end()
                    ->booleanNode('unicorns_are_real')
                        ->defaultTrue()
                        ->info('Whether or not you believe in unicorns')
                    ->end()
                    ->integerNode('min_sunshine')
                        ->defaultValue(3)
                        ->info('How much do you like sunshine?')
                    ->end()
                ->end();

        return $treeBuilder;
    }

}
