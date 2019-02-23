<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Description of KnpULoremIpsumExtension
 *
 * @author <Garamszegi Erik>
 * */
class KnpULoremIpsumExtension extends Extension {

    /**
     * 
     * @param array $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container) {
        
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
                
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
        
        $definition = $container->getDefinition('knpu_lorem_ipsum.knpu_ipsum');
        
        if (null !== $config['word_provider']) {
            $definition->setArgument(0,new Reference($config['word_provider']));
        }
        
        $definition->setArgument(1, $config['unicorns_are_real']);
        $definition->setArgument(2, $config['min_sunshine']);
              
    }
    
    public function getAlias() {
        return 'knpu_lorem_ipsum';
    }

}
