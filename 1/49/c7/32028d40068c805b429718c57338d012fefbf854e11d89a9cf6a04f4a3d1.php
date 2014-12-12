<?php

/* MopaBootstrapBundle::base_lessjs.html.twig */
class __TwigTemplate_49c732028d40068c805b429718c57338d012fefbf854e11d89a9cf6a04f4a3d1 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MopaBootstrapBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head_style($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet/less\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/less/frontend.less"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_head_script($context, array $blocks = array())
    {
        // line 9
        echo "<script src=\"http://lesscss.googlecode.com/files/less-1.3.0.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_lessjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  40 => 5,  37 => 4,  11 => 1,);
    }
}
