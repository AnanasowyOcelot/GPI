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
                <th>Dolny limit ceny:</th>
                <th>Opcje</th>
                <th>Status</th>
                <th>Aktualna pozycja</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 18
            echo "                <tr>
                    <td class=\"td-width\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "auctionName", array()), "html", null, true);
            echo "
                    </td>
                    <td class=\"td-width\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "actualPrice", array()), "html", null, true);
            echo "
                    </td>
                    <td class=\"td-width\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "price", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <p><a class=\"btn-u btn-u-blue\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_details", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">Szczegóły</a>
                        </p>
                        ";
            // line 31
            if ($this->getAttribute($context["offer"], "isActive", array())) {
                // line 32
                echo "                            <p><a class=\"btn-u btn-u-red\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_cancel", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
                echo "\">Anuluj</a>
                            </p>
                        ";
            }
            // line 35
            echo "                    </td>
                    <td>
                        <span class=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "label", array(0 => $this->getAttribute($context["offer"], "status", array())), "method"), "html", null, true);
            echo "\">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "name", array(0 => $this->getAttribute($context["offer"], "status", array())), "method"), "html", null, true);
            echo "
                        </span>
                    </td>
                    <td>
                     ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "currentPosition", array()), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>
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
        return array (  120 => 46,  110 => 42,  103 => 38,  99 => 37,  95 => 35,  88 => 32,  86 => 31,  81 => 29,  75 => 26,  69 => 23,  63 => 20,  59 => 18,  55 => 17,  39 => 3,  36 => 2,  11 => 1,);
    }
}
