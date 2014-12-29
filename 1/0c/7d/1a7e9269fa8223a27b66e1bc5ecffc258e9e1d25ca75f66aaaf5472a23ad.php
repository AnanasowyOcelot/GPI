<?php

/* MopaBootstrapBundle:Pagination:sliding.html.twig */
class __TwigTemplate_0c7d1a7e9269fa8223a27b66e1bc5ecffc258e9e1d25ca75f66aaaf5472a23ad extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "    ";
            $context["item"] = "MopaBootstrapBundle:Pagination:sliding_item.html.twig";
            // line 3
            echo "
    <ul class=\"";
            // line 4
            echo twig_escape_filter($this->env, ((array_key_exists("pagination_class", $context)) ? (_twig_default_filter((isset($context["pagination_class"]) ? $context["pagination_class"] : $this->getContext($context, "pagination_class")), "pagination")) : ("pagination")), "html", null, true);
            echo "\">
        ";
            // line 5
            $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))->display(array_merge($context, array("name" => "first", "text" => $this->env->getExtension('translator')->trans(((array_key_exists("first_text", $context)) ? (_twig_default_filter((isset($context["first_text"]) ? $context["first_text"] : $this->getContext($context, "first_text")), "«")) : ("«")), array(), "pagination"), "page" => ((array_key_exists("first", $context)) ? ((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) : (null)), "clickable" => (array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")))))));
            // line 11
            echo "
        ";
            // line 12
            $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))->display(array_merge($context, array("name" => "prev", "text" => $this->env->getExtension('translator')->trans(((array_key_exists("prev_text", $context)) ? (_twig_default_filter((isset($context["prev_text"]) ? $context["prev_text"] : $this->getContext($context, "prev_text")), "‹ Previous")) : ("‹ Previous")), array(), "pagination"), "page" => ((array_key_exists("previous", $context)) ? ((isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))) : (null)), "clickable" => array_key_exists("previous", $context))));
            // line 18
            echo "
        ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 20
                echo "            ";
                $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))->display($context);
                // line 21
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
        ";
            // line 24
            $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))->display(array_merge($context, array("name" => "next", "text" => $this->env->getExtension('translator')->trans(((array_key_exists("next_text", $context)) ? (_twig_default_filter((isset($context["next_text"]) ? $context["next_text"] : $this->getContext($context, "next_text")), "Next ›")) : ("Next ›")), array(), "pagination"), "page" => ((array_key_exists("next", $context)) ? ((isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))) : (null)), "clickable" => array_key_exists("next", $context))));
            // line 31
            echo "
        ";
            // line 33
            $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))->display(array_merge($context, array("name" => "last", "text" => $this->env->getExtension('translator')->trans(((array_key_exists("last_text", $context)) ? (_twig_default_filter((isset($context["last_text"]) ? $context["last_text"] : $this->getContext($context, "last_text")), "»")) : ("»")), array(), "pagination"), "page" => ((array_key_exists("last", $context)) ? ((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))) : (null)), "clickable" => (array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")))))));
            // line 40
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 40,  83 => 33,  80 => 31,  78 => 24,  75 => 22,  61 => 21,  58 => 20,  41 => 19,  38 => 18,  36 => 12,  33 => 11,  31 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
