<?php

namespace Grunch\MercadopagoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * @author Francisco Calderon <fjcalderon@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('grunch_mercadopago');

        $rootNode
            ->children()
                ->variableNode('client_id')->end()
                ->variableNode('client_secret')->end()
                ->variableNode('sandbox')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
