<?php

/* GPIOfferBundle:Profile:show.html.twig */
class __TwigTemplate_20e5ce8c947a25abbe63f6b74f38316a8619bf95227396ef6129b2a34f978cd6 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 3
        echo "
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th class=\"hidden-sm\">Nazwa aukcji</th>
                    <th>Cena minimalna</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 15
            echo "                    <tr>
                        <td class=\"td-width\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "auction", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"td-width\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "price", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <p><a class=\"btn-u btn-u-blue\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_details", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">Szczegóły</a></p>
                            ";
            // line 24
            if ($this->getAttribute($context["offer"], "isActive", array(), "method")) {
                // line 25
                echo "                                <p><a class=\"btn-u btn-u-red\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_cancel", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
                echo "\">Anuluj</a></p>
                            ";
            }
            // line 27
            echo "                        </td>
                        <td>
                        <span class=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "label", array(0 => $this->getAttribute($context["offer"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "name", array(0 => $this->getAttribute($context["offer"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "
                        </span>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
            </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GPIOfferBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  92 => 30,  88 => 29,  84 => 27,  78 => 25,  76 => 24,  72 => 23,  66 => 20,  60 => 17,  56 => 15,  52 => 14,  39 => 3,  36 => 2,  11 => 1,);
    }
}
