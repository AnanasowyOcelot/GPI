<?php

/* FOSCommentBundle:Thread:new.html.twig */
class __TwigTemplate_f24f7fe478532964fc42e89444c3e60c391950ac7f97eca0b993ad079d121c52 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<form class=\"fos_comment_comment_form\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("fos_comment_post_threads");
        echo "\" method=\"POST\">

    ";
        // line 14
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 23
        echo "
    <div class=\"fos_comment_submit\">
        ";
        // line 25
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 28
        echo "    </div>

</form>
";
    }

    // line 14
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permalink", array()), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permalink", array()), 'widget');
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 26
        echo "            <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
        ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  75 => 25,  69 => 21,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  47 => 15,  44 => 14,  37 => 28,  35 => 25,  31 => 23,  29 => 14,  24 => 12,  21 => 11,);
    }
}
