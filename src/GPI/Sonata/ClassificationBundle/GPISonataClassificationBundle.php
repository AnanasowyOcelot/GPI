<?php

namespace GPI\Sonata\ClassificationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GPISonataClassificationBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'ApplicationSonataClassificationBundle';
    }
}