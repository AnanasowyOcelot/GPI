<?php

/* GPIAuctionBundle:EditAuction:index.html.twig */
class __TwigTemplate_48785db9fd5c7cddca47733819d1da9d9010c788f44815bc733127259ac79a9e extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 17
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(17);

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
        // line 18
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 17
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 20
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
        <div class=\"headline\"><h3>Edytuj aukcję</h3></div>

        <form method=\"POST\" ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"sky-form\">
            <fieldset>
                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maxPrice", array()), 'row');
        echo "
                <br/>
                <div class=\"note\">Wypełnij jeśli znasz</div>
            </fieldset>
            <hr />
            <fieldset>
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
            </fieldset>
            <hr/>
            <fieldset>
                <label class=\"col-sm-2 control-label\">Dokumenty:</label>

                <div class=\"col-sm-10\">
                    <ul class=\"documents\" data-prototype=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                        ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 114
            echo "                            <li class=\"tag-box-v2\">
                                <a href=\"/";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["document"], "vars", array()), "data", array()), "getWebPath", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\">
                                    <img class=\"thumbnail\" src=\"/";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["document"], "vars", array()), "data", array()), "getWebPath", array(), "method"), "html", null, true);
            echo "\" alt=\"\">
                                </a>
                                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "description", array()), 'row');
            echo "
                                ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "file", array()), 'row');
            echo "
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                    </ul>
                </div>
            </fieldset>
            <hr/>
            <fieldset>
                ";
        // line 127
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

        form ul.documents .thumbnail {
            width: 90px;
            height: 90px;
            margin: 0 auto;
            display: block;
            border-radius: 50% !important;
        }

    </style>
";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:EditAuction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 127,  184 => 122,  175 => 119,  171 => 118,  166 => 116,  162 => 115,  159 => 114,  155 => 113,  151 => 112,  141 => 105,  132 => 99,  125 => 95,  118 => 91,  113 => 89,  42 => 20,  39 => 19,  35 => 17,  33 => 18,  11 => 17,);
    }
}
