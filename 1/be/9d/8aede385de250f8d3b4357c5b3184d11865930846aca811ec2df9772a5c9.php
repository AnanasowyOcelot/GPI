<?php

/* SonataSeoBundle:Block:_facebook_sdk.html.twig */
class __TwigTemplate_be9d8aede385de250f8d3b4357c5b3184d11865930846aca811ec2df9772a5c9 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'facebook_sdk' => array($this, 'block_facebook_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "
    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_facebook_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 13,  26 => 12,  20 => 11,);
    }
}
