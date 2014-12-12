<?php

/* SimpleThingsEntityAuditBundle::layout.html.twig */
class __TwigTemplate_bd87c8a0065a3db194cda2257dfbadda20f7e08c8aa747f6f615cdbc2d0854f4 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('simplethings_entityaudit_content', $context, $blocks);
        // line 9
        echo "        </div>
    </body>
</html>";
    }

    // line 8
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 9,  29 => 8,  20 => 1,);
    }
}
