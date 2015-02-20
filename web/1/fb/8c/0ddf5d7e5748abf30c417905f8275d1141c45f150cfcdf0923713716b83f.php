<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_fb8c0ddf5d7e5748abf30c417905f8275d1141c45f150cfcdf0923713716b83f extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_widget($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 16
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 17
            echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
    ";
        }
    }

    // line 21
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 23
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 28
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_money_widget($context, array $blocks = array())
    {
        // line 32
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 33
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 35
            echo "        ";
            $context["currencySymbol"] = trim(strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 36
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 37
                echo "            <div class=\"input-group\">";
                // line 38
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 39
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 42
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 44
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 45
                echo "</div>
        ";
            }
            // line 47
            echo "    ";
        }
    }

    // line 50
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        ob_start();
        // line 52
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 53
        echo "        <div class=\"input-group\">
            ";
        // line 54
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_form_label($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "
    ";
        // line 64
        $context["label_class"] = "";
        // line 65
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 66
            echo "        ";
            $context["label_class"] = " control-label col-sm-3";
            // line 67
            echo "    ";
        } else {
            // line 68
            echo "        ";
            $context["label_class"] = " control-label";
            // line 69
            echo "    ";
        }
        // line 70
        echo "
    ";
        // line 72
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 73
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 74
            echo "
        ";
            // line 75
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 76
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 77
                echo "        ";
            }
            // line 78
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 79
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 80
                echo "        ";
            }
            // line 81
            echo "
        ";
            // line 82
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 83
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 84
                echo "        ";
            }
            // line 85
            echo "
        ";
            // line 86
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
                // line 87
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 88
                echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                echo "
                <span>
                    ";
                // line 90
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 95
                echo "                </span>
            </label>
        ";
            } else {
                // line 98
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 99
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 102
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 104
                echo "            </label>
        ";
            }
            // line 106
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 110
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        ob_start();
        // line 112
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
        ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            if (($context["attrname"] == "class")) {
                echo "list-unstyled ";
            }
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")))) {
            echo "class=\"list-unstyled\"";
        }
        // line 115
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 118
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 119
        ob_start();
        // line 120
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 122
            echo "            <li>
                ";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 124
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 131
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 132
        ob_start();
        // line 133
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 134
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 135
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo "            <li>
                ";
                // line 137
                ob_start();
                // line 138
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
                echo " ";
                // line 139
                echo "                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 140
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array()), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "        </ul>
    ";
        } else {
            // line 145
            echo "    ";
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "use_select2"), "method"))) {
                // line 146
                echo "        ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
                // line 147
                echo "    ";
            }
            // line 148
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 149
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 150
                echo "            <option value=\"\">
                ";
                // line 151
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 152
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 154
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 156
                echo "            </option>
        ";
            }
            // line 158
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 159
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 160
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 161
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 162
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
            ";
                }
                // line 164
                echo "        ";
            }
            // line 165
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 166
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 172
    public function block_form_row($context, array $blocks = array())
    {
        // line 173
        echo "    ";
        $context["label_class"] = "";
        // line 174
        echo "    ";
        $context["div_class"] = "";
        // line 175
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 176
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 177
            echo "        ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 178
            echo "    ";
        } else {
            // line 179
            echo "        ";
            $context["label_class"] = "control-label";
            // line 180
            echo "    ";
        }
        // line 181
        echo "
    ";
        // line 182
        if ((( !array_key_exists("sonata_admin", $context) ||  !(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) ||  !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 183
            echo "        <div class=\"form-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 184
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"";
            // line 185
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 186
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 187
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 188
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 189
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 192
            echo "            </div>
        </div>
    ";
        } else {
            // line 195
            echo "        <div class=\"form-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
            ";
            // line 196
            $this->displayBlock('label', $context, $blocks);
            // line 203
            echo "
            ";
            // line 204
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) ||  !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false));
            // line 205
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
            echo " sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ( !(isset($context["has_label"]) ? $context["has_label"] : $this->getContext($context, "has_label"))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 207
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 208
            echo "
                ";
            // line 209
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 210
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 211
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 214
            echo "
                ";
            // line 215
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array())) {
                // line 216
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
                echo "</span>
                ";
            }
            // line 218
            echo "            </div>
        </div>
    ";
        }
    }

    // line 196
    public function block_label($context, array $blocks = array())
    {
        // line 197
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 198
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 200
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 202
        echo "            ";
    }

    // line 223
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 224
        ob_start();
        // line 225
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 226
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 227
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 229
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 234
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 235
        ob_start();
        // line 236
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 237
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 238
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 239
            echo "    ";
        }
        // line 240
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 242
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 243
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 246
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 247
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 249
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 253
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 254
        echo "    ";
        ob_start();
        // line 255
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 258
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 259
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "
            ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 267
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 268
        echo "    ";
        ob_start();
        // line 269
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 273
        $context["div_class"] = "";
        // line 274
        echo "            ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 275
            echo "                ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 276
            echo "            ";
        }
        // line 277
        echo "
            <div class=\"";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 280
        echo "            </div>

            ";
        // line 282
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 283
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 284
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 287
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 291
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 292
        ob_start();
        // line 293
        echo "
    ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "

    ";
        // line 296
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 297
            echo "        ";
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 298
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
            }
            // line 300
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "
    <script>
        (function (\$) {
            var autocompleteInput = \$(\"#";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\");
            autocompleteInput.select2({
                placeholder: \"";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\",
                allowClear: ";
        // line 307
        echo (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 308
        echo (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 309
        echo (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : $this->getContext($context, "minimum_input_length")), "html", null, true);
        echo ",
                multiple: ";
        // line 311
        echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("true") : ("false"));
        echo ",
                ajax: {
                    url:  \"";
        // line 313
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : ($this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name", array()), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array()), array())) : (array()))))), "html", null, true);
        echo "\",
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        return {
                                //search term
                                \"";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : $this->getContext($context, "req_param_name_search")), "html", null, true);
        echo "\": term,

                                // page size
                                \"";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : $this->getContext($context, "req_param_name_items_per_page")), "html", null, true);
        echo "\": ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : $this->getContext($context, "items_per_page")), "html", null, true);
        echo ",

                                // page number
                                \"";
        // line 325
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : $this->getContext($context, "req_param_name_page_number")), "html", null, true);
        echo "\": page,

                                // admin
                                'uniqid': \"";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "uniqid", array()), "html", null, true);
        echo "\",
                                'code':   \"";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "code", array()), "html", null, true);
        echo "\",
                                'field':  \"";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"

                                // other parameters
                                ";
        // line 333
        if ( !twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")))) {
            echo ",";
            // line 334
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 335
                echo "\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "\": \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "\"";
                // line 336
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 339
        echo "                            };
                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 347
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 350
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                dropdownCssClass: \"";
        // line 352
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : $this->getContext($context, "dropdown_css_class")), "html", null, true);
        echo "\",
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on(\"change\", function(e) {

                // console.log(\"change \"+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    if(!\$.isArray(addedItems)) {
                        addedItems = [addedItems];
                    }

                    var length = addedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = addedItems[i];
                        \$(\"#";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").append('<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "[]\" value=\"'+el.id+'\" />');
                    }
                }

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    if(!\$.isArray(removedItems)) {
                        removedItems = [removedItems];
                    }

                    var length = removedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = removedItems[i];
                        \$('#";
        // line 388
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo " input:hidden[value=\"'+el.id+'\"]').remove();
                    }
                }
            });

            // Initialise the autocomplete
            var data = [];
            ";
        // line 395
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 396
            echo "data = [";
            // line 397
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["label_text"]) {
                // line 398
                echo "{id: '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), $context["key"], array(), "array"), "js"), "html", null, true);
                echo "', label:'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["label_text"], "js"), "html", null, true);
                echo "'}";
                // line 399
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "];";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "labels", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 403
            echo "data = {id: '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "', label:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "'};";
        }
        // line 405
        echo "            if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 347
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        echo "'<span class=\"sonata-autocomplete-dropdown-item\">'+item.label+'</span>'";
    }

    // line 350
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        echo "item.label";
    }

    // line 413
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 414
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 415
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 416
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 418
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 419
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            showMaskChoiceEl = jQuery('#";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 430
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1218 => 430,  1205 => 421,  1200 => 419,  1196 => 418,  1192 => 416,  1190 => 415,  1185 => 414,  1182 => 413,  1176 => 350,  1170 => 347,  1160 => 405,  1153 => 403,  1150 => 401,  1134 => 399,  1128 => 398,  1111 => 397,  1109 => 396,  1107 => 395,  1097 => 388,  1077 => 373,  1053 => 352,  1048 => 350,  1042 => 347,  1032 => 339,  1015 => 336,  1009 => 335,  992 => 334,  989 => 333,  983 => 330,  979 => 329,  975 => 328,  969 => 325,  961 => 322,  955 => 319,  946 => 313,  941 => 311,  937 => 310,  933 => 309,  929 => 308,  925 => 307,  921 => 306,  916 => 304,  911 => 301,  905 => 300,  899 => 298,  896 => 297,  892 => 296,  887 => 294,  884 => 293,  882 => 292,  879 => 291,  873 => 287,  867 => 284,  864 => 283,  862 => 282,  858 => 280,  855 => 279,  843 => 278,  840 => 277,  837 => 276,  834 => 275,  831 => 274,  829 => 273,  824 => 271,  812 => 269,  809 => 268,  806 => 267,  798 => 262,  795 => 261,  778 => 259,  761 => 258,  756 => 256,  751 => 255,  748 => 254,  745 => 253,  739 => 249,  735 => 247,  733 => 246,  728 => 245,  711 => 243,  694 => 242,  690 => 241,  685 => 240,  682 => 239,  679 => 238,  676 => 237,  673 => 236,  671 => 235,  668 => 234,  659 => 229,  655 => 227,  653 => 226,  650 => 225,  648 => 224,  645 => 223,  641 => 202,  635 => 200,  629 => 198,  626 => 197,  623 => 196,  616 => 218,  610 => 216,  608 => 215,  605 => 214,  599 => 211,  596 => 210,  594 => 209,  591 => 208,  588 => 207,  570 => 205,  568 => 204,  565 => 203,  563 => 196,  554 => 195,  549 => 192,  543 => 189,  540 => 188,  537 => 187,  534 => 186,  528 => 185,  524 => 184,  517 => 183,  515 => 182,  512 => 181,  509 => 180,  506 => 179,  503 => 178,  500 => 177,  497 => 176,  494 => 175,  491 => 174,  488 => 173,  485 => 172,  475 => 166,  472 => 165,  469 => 164,  463 => 162,  461 => 161,  456 => 160,  453 => 159,  450 => 158,  446 => 156,  443 => 154,  440 => 152,  438 => 151,  435 => 150,  433 => 149,  425 => 148,  422 => 147,  419 => 146,  416 => 145,  412 => 143,  402 => 140,  399 => 139,  395 => 138,  393 => 137,  390 => 136,  386 => 135,  381 => 134,  378 => 133,  376 => 132,  373 => 131,  367 => 127,  357 => 124,  354 => 123,  351 => 122,  347 => 121,  342 => 120,  340 => 119,  337 => 118,  332 => 115,  327 => 114,  312 => 113,  307 => 112,  304 => 111,  301 => 110,  295 => 106,  291 => 104,  285 => 102,  282 => 100,  280 => 99,  264 => 98,  259 => 95,  256 => 93,  253 => 91,  251 => 90,  246 => 88,  230 => 87,  228 => 86,  225 => 85,  222 => 84,  219 => 83,  217 => 82,  214 => 81,  211 => 80,  208 => 79,  205 => 78,  202 => 77,  199 => 76,  197 => 75,  194 => 74,  191 => 73,  188 => 72,  185 => 70,  182 => 69,  179 => 68,  176 => 67,  173 => 66,  170 => 65,  168 => 64,  165 => 63,  163 => 62,  160 => 61,  151 => 54,  148 => 53,  145 => 52,  142 => 51,  139 => 50,  134 => 47,  130 => 45,  128 => 44,  125 => 43,  122 => 42,  115 => 39,  113 => 38,  111 => 37,  108 => 36,  105 => 35,  102 => 33,  100 => 32,  97 => 31,  90 => 28,  87 => 27,  84 => 26,  77 => 23,  74 => 22,  71 => 21,  63 => 17,  61 => 16,  57 => 15,  54 => 14,  11 => 12,);
    }
}
