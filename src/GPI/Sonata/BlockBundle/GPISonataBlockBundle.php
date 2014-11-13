<?php

namespace GPI\Sonata\BlockBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GPISonataBlockBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataBlockBundle';
    }
}