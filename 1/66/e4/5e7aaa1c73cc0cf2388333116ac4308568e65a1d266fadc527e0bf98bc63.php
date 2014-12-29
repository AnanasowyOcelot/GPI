<?php

/* SonataMediaBundle:Extra:pixlr_exit.html.twig */
class __TwigTemplate_66e45e7aaa1c73cc0cf2388333116ac4308568e65a1d266fadc527e0bf98bc63 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_exit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 11,);
    }
}
