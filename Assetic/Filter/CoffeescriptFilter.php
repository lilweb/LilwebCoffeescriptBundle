<?php

namespace Lilweb\CoffeescriptBundle\Assetic\Filter;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;

use CoffeeScript\Compiler;

/**
 * Simple implementation of a filter for assetic based on alxlit's port.
 */
class CoffeescriptFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function filterLoad(AssetInterface $asset)
    {
    }

    /**
     * @param AssetInterface $asset
     */
    public function filterDump(AssetInterface $asset)
    {
        $content = $asset->getContent();
        $compiled = Compiler::compile($content, array('filename' => 'test'));
        $asset->setContent($compiled);
    }
}
