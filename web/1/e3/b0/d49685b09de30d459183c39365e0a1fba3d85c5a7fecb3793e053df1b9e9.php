<?php

/* SonataUserBundle:Profile:edit_authentication.html.twig */
class __TwigTemplate_e3b0d49685b09de30d459183c39365e0a1fba3d85c5a7fecb3793e053df1b9e9 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "

<div class=\"row\">
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_change_password_link", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 34
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_user_change_password"), array());
        // line 35
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 35,  59 => 34,  53 => 31,  42 => 23,  37 => 21,  33 => 20,  27 => 17,  19 => 11,);
    }
}
