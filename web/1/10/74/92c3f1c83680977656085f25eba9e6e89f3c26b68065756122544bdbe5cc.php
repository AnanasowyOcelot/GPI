<?php

/* GPIAuctionBundle:AddAuction:finish.html.twig */
class __TwigTemplate_107492c3f1c83680977656085f25eba9e6e89f3c26b68065756122544bdbe5cc extends Sonata\CacheBundle\Twig\TwigTemplate14
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


    ";
        // line 7
        echo "    <div class=\"tag-box tag-box-v3 form-page\" style=\"overflow: hidden;\">
        <div class=\"well\" style=\"text-align: center\">
                <span class=\"label rounded label-blue\"
                      style=\"display: inline-block; width: 31%; border: 1px solid #aaaaaa\">Kategorie</span>
            <i class=\"fa fa-angle-double-right\"></i>
                <span class=\"label rounded label-light\"
                      style=\"display: inline-block; width: 31%; border: 1px solid #aaaaaa\">Podkategorie</span>
            <i class=\"fa fa-angle-double-right\"></i>
                <span class=\"label rounded label-light\"
                      style=\"display: inline-block; width: 31%; border: 1px solid #aaaaaa\">Szczegóły aukcji</span>
        </div>
        ";
        // line 19
        echo "        Aukcja o tytule <strong>\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array()), "html", null, true);
        echo "\"</strong> została dodana. Możesz ją zobaczyć <a
                href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "id", array()))), "html", null, true);
        echo "\">tutaj</a>
    ";
        // line 22
        echo "    ";
        // line 23
        echo "        <hr/>
        <fieldset>

            <strong>Data zakończenia:</strong>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "
        </fieldset>
               <hr/>
        <fieldset>

            <strong>Treść:</strong>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "content", array()), "html", null, true);
        echo "
        </fieldset>
        <hr/>
        <fieldset>
            <strong>Kategorie:</strong>
            ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "                <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;";
            // line 42
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </fieldset>
        <hr/>
        ";
        // line 46
        if (($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array()) != null)) {
            // line 47
            echo "            <fieldset>
                <strong>Cena maksymalna:</strong>
                <br/>
                &nbsp;&nbsp;&nbsp;&nbsp; ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array(), "method"), "html", null, true);
            echo "&nbsp;PLN
            </fieldset>
        ";
        }
        // line 53
        echo "        <hr/>
        <fieldset>

            <strong>Pliki: </strong>
            <br/>
            <br/>
            <div class=\"fusion-portfolio wrapper-portfolio-grid cbp-4-col\">
                <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
                    <ul>
                        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 63
            echo "                            <li class=\"cbp-item motion\">
                                ";
            // line 64
            if ( !$this->getAttribute($context["document"], "isDownloadable", array(), "method")) {
                // line 65
                echo "                                    ";
                $context["a_tag_attributes"] = "target=\"_blank\" class=\"cbp-caption cbp-lightbox\"";
                // line 66
                echo "                                ";
            } else {
                // line 67
                echo "                                    ";
                $context["a_tag_attributes"] = "download";
                // line 68
                echo "                                ";
            }
            // line 69
            echo "
                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" ";
            echo (isset($context["a_tag_attributes"]) ? $context["a_tag_attributes"] : $this->getContext($context, "a_tag_attributes"));
            echo ">
                                    <div class=\"cbp-caption-defaultWrap\" style=\"text-align: center;\">
                                        <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebImagePath", array(), "method")), "html", null, true);
            echo "\" alt=\"\"
                                             style=\"width: auto; max-width: 100%; max-height: 100%;\">
                                    </div>
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </ul>
                </div>
            </div>
        </fieldset>

    </div>

";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:AddAuction:finish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 78,  167 => 72,  160 => 70,  157 => 69,  154 => 68,  151 => 67,  148 => 66,  145 => 65,  143 => 64,  140 => 63,  136 => 62,  125 => 53,  119 => 50,  114 => 47,  112 => 46,  108 => 44,  100 => 42,  97 => 41,  93 => 40,  85 => 35,  75 => 28,  68 => 23,  66 => 22,  62 => 20,  57 => 19,  44 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
