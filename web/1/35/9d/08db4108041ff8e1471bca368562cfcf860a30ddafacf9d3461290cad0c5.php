<?php

/* GPIOfferBundle:Offer:add.html.twig */
class __TwigTemplate_359d08db4108041ff8e1471bca368562cfcf860a30ddafacf9d3461290cad0c5 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 166
        echo "

";
    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-md-3\">
        <div class=\"headline\"><h3>Podsumowanie aukcji</h3></div>
        <fieldset>
            <strong>Dodano przez:</strong>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "
        </fieldset>
        <hr/>
        <fieldset>

            <strong>Data dodania:</strong>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getStartTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "
        </fieldset>
        <hr/>
        <fieldset>

            <strong>Data zakończenia:</strong>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "
        </fieldset>
        <hr/>
        <fieldset>
            <strong>Kategorie:</strong>
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;";
            // line 30
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </fieldset>
        <hr/>
        ";
        // line 34
        if (($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array()) != null)) {
            // line 35
            echo "            <fieldset>
                <strong>Cena maksymalna:</strong>
                <br/>
                &nbsp;&nbsp;&nbsp;&nbsp; ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array(), "method"), "html", null, true);
            echo "
            </fieldset>
        ";
        }
        // line 41
        echo "
    </div>
    <div class=\"col-md-9\">
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
            <div class=\"headline\"><h3>Dodaj nową ofertę</h3></div>

            <form method=\"POST\" ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"sky-form\">
                <fieldset>
                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auction", array()), 'row');
        echo "
                </fieldset>
                <hr/>
                <fieldset>
                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "
                </fieldset>
                <hr/>
                <fieldset>
                    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row');
        echo "
                    ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'help');
        echo "
                </fieldset>
                <hr/>
                <fieldset>
                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bidPercent", array()), 'row');
        echo "
                    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bidPercent", array()), 'help');
        echo "
                </fieldset>
                <hr/>
                <fieldset>
                    <label class=\"col-sm-2 control-label\">Dokumenty:</label>

                    <div class=\"col-sm-10\">
                        <ul class=\"documents\" data-prototype=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                            ";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 137
            echo "                                <li class=\"tag-box-v2\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "description", array()), 'row');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "file", array()), 'row');
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                        </ul>
                    </div>
                </fieldset>
                <hr/>
                <fieldset>
                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </fieldset>
            </form>
        </div>
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
        return "GPIOfferBundle:Offer:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 144,  235 => 139,  225 => 137,  221 => 136,  217 => 135,  207 => 128,  203 => 127,  196 => 123,  192 => 122,  185 => 118,  178 => 114,  173 => 112,  100 => 41,  94 => 38,  89 => 35,  87 => 34,  83 => 32,  75 => 30,  72 => 29,  68 => 28,  60 => 23,  50 => 16,  40 => 9,  33 => 4,  30 => 3,  24 => 166,  22 => 3,  20 => 2,);
    }
}
