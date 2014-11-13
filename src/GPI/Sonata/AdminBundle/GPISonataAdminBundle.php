<?php

namespace GPI\Sonata\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GPISonataAdminBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}