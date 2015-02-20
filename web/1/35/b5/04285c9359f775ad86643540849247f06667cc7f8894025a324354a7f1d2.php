<?php

/* GPIAuctionBundle:EditAuction:partly.html.twig */
class __TwigTemplate_35b504285c9359f775ad86643540849247f06667cc7f8894025a324354a7f1d2 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"alert alert-warning fade in\">Do aukcji dodane zostały już oferty. Edycja została wyłączona. Można
        jedynie dodać uwagi.
    </div>
    <div class=\"tag-box tag-box-v3 form-page\" style=\"overflow: hidden;\">
        <div class=\"headline\"><h3>Edytuj aukcję</h3></div>
        <form method=\"POST\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"sky-form\">
            <fieldset>
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "
            </fieldset>

            <hr/>
            <fieldset>
                <label>Dodatkowe uwagi:</label>
                <br/>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 24
            echo "                    <div><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "created", array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo ":</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </fieldset>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributeValues", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attributeValue"]) {
            // line 28
            echo "
                <hr/>
                <fieldset>
                    <label class=\"col-sm-2 control-label\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attributeValue"], "vars", array()), "value", array()), "html", null, true);
            echo "</label>

                    <div class=\"col-sm-10\">
                        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["attributeValue"], "name", array()), 'widget');
            echo "
                        ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["attributeValue"], "value", array()), 'widget');
            echo "
                    </div>
                </fieldset>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            <hr/>

            <fieldset>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maxRealizationDate", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                <label class=\"col-sm-2 control-label\">Dokumenty:</label>
                ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 56
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\">
                        <img class=\"thumbnail\" src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebImagePath", array(), "method")), "html", null, true);
            echo "\" alt=\"\">
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </fieldset>
        </form>
    </div>

    <style>
        form ul.documents {
            padding: 0;
        }

        form ul.documents li {
            list-style: none;
            margin-bottom: 8px;
            padding: 5px;
        }

        form ul.documents li .document-buttons {
            text-align: right;
        }

        form .thumbnail {
            width: 90px;
            height: 90px;
            margin-left: 10px;
            display: inline;
        }

    </style>
";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:EditAuction:partly.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  164 => 60,  155 => 57,  150 => 56,  146 => 55,  138 => 50,  131 => 46,  124 => 42,  119 => 39,  109 => 35,  105 => 34,  99 => 31,  94 => 28,  90 => 27,  87 => 26,  76 => 24,  72 => 23,  62 => 16,  55 => 12,  50 => 10,  42 => 4,  39 => 3,  35 => 1,  33 => 2,  11 => 1,);
    }
}
