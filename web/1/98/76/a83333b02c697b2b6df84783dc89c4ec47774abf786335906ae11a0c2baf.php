<?php

/* GPIAuctionBundle:AddAuction:index.html.twig */
class __TwigTemplate_9876a83333b02c697b2b6df84783dc89c4ec47774abf786335906ae11a0c2baf extends Sonata\CacheBundle\Twig\TwigTemplate14
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
    <script type=\"text/javascript\">
        var \$collectionHolder;

        // setup an \"add a document\" link
        var \$addDocumentLink = \$('<a href=\"#\" class=\"btn-u btn-u-blue\">Dodaj kolejny dokument</a>');
        var \$newLinkLi = \$('<li></li>').append(\$addDocumentLink);

        function addDocumentFormDeleteLink(\$documentFormLi) {
            var \$removeFormA = \$('<div class=\"document-buttons\"><a href=\"#\" class=\"btn-u btn-u-blue\">Usuń dokument</a></div>');
            \$documentFormLi.append(\$removeFormA);

            \$removeFormA.on('click', function (e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // remove the li for the document form
                \$documentFormLi.remove();
            });
        }

        function addDocumentForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');

            // get the new index
            var index = \$collectionHolder.data('index');

            // Replace '\$\$name\$\$' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a document\" link li
            var \$newFormLi = \$('<li class=\"tag-box-v2\"></li>').append(newForm);
            \$newLinkLi.before(\$newFormLi);
            addDocumentFormDeleteLink(\$newFormLi);
        }

        jQuery(document).ready(function () {
            // Get the ul that holds the collection of documents
            \$collectionHolder = \$('ul.documents');

            \$collectionHolder.find('li').each(function () {
                addDocumentFormDeleteLink(\$(this));
            });

            // add the \"add a document\" anchor and li to the documents ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

            \$addDocumentLink.on('click', function (e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new document form (see next code block)
                addDocumentForm(\$collectionHolder, \$newLinkLi);
            });
        });
    </script>

    <div class=\"tag-box tag-box-v3 form-page\" style=\"overflow: hidden;\">
        <div class=\"well\">
            <span class=\"label rounded label-blue\" style=\"display: inline-block; width: 33%; border: 1px solid black\">&nbsp;</span>
            <span class=\"label rounded label-blue\" style=\"display: inline-block; width: 33%; border: 1px solid black\">&nbsp;</span>
            <span class=\"label rounded label-green\" style=\"display: inline-block; width: 33%; border: 1px solid black\">&nbsp;</span>
        </div>
        <div class=\"headline\"><h3>Dodaj nową aukcję</h3></div>

        <form method=\"POST\" ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"sky-form\">
            <fieldset>
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maxPrice", array()), 'row');
        echo "
                <br/>

                <div class=\"note\">Pole opcjonalne</div>
            </fieldset>

            <fieldset>
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maxRealizationDate", array()), 'row');
        echo "
                <br/>

                <div class=\"note\">Pole opcjonalne</div>
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timePeriod", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
            </fieldset>

            ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributeValues", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attributeValue"]) {
            // line 110
            echo "
                <hr/>
                <fieldset>
                    <label class=\"col-sm-2 control-label\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attributeValue"], "vars", array()), "value", array()), "html", null, true);
            echo "</label>

                    <div class=\"col-sm-10\">
                        ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["attributeValue"], "name", array()), 'widget');
            echo "
                        ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["attributeValue"], "value", array()), 'widget');
            echo "
                    </div>
                </fieldset>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            <hr/>
            <fieldset>
                <label class=\"col-sm-2 control-label\">Dokumenty:</label>

                <div class=\"col-sm-10\">
                    <ul class=\"documents\" data-prototype=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                        ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 128
            echo "                            <li class=\"tag-box-v2\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "description", array()), 'row');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "file", array()), 'row');
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                    </ul>
                </div>
            </fieldset>


            <fieldset>
                ";
        // line 137
        echo "                ";
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
    </style>
";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:AddAuction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 137,  224 => 130,  214 => 128,  210 => 127,  206 => 126,  199 => 121,  189 => 117,  185 => 116,  179 => 113,  174 => 110,  170 => 109,  164 => 106,  157 => 102,  147 => 95,  137 => 88,  130 => 84,  123 => 80,  118 => 78,  42 => 4,  39 => 3,  35 => 1,  33 => 2,  11 => 1,);
    }
}
