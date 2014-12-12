<?php

/* SonataOrderBundle:Order:view.html.twig */
class __TwigTemplate_ea5358923b82d44b53985472d499d6ddd3c8c8a7422d303c3afd4ee7b3330c5c extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'sonata_order_title' => array($this, 'block_sonata_order_title'),
            'sonata_order_top' => array($this, 'block_sonata_order_top'),
            'sonata_order_dates_statuses' => array($this, 'block_sonata_order_dates_statuses'),
            'sonata_order_dates' => array($this, 'block_sonata_order_dates'),
            'sonata_order_statuses' => array($this, 'block_sonata_order_statuses'),
            'sonata_order_top_right' => array($this, 'block_sonata_order_top_right'),
            'sonata_order_delivery' => array($this, 'block_sonata_order_delivery'),
            'sonata_order_billing' => array($this, 'block_sonata_order_billing'),
            'sonata_order_elements' => array($this, 'block_sonata_order_elements'),
            'sonata_order_elements_header' => array($this, 'block_sonata_order_elements_header'),
            'sonata_order_element' => array($this, 'block_sonata_order_element'),
            'product_thumbnail' => array($this, 'block_product_thumbnail'),
            'sonata_order_elements_sumup' => array($this, 'block_sonata_order_elements_sumup'),
            'sonata_order_footer' => array($this, 'block_sonata_order_footer'),
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

    // line 15
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.title_order", array(), "SonataOrderBundle");
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "reference", array()), "html", null, true);
    }

    // line 17
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the order view template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('sonata_order_title', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('sonata_order_top', $context, $blocks);
        // line 127
        echo "
    ";
        // line 128
        $this->displayBlock('sonata_order_elements', $context, $blocks);
        // line 210
        echo "
    ";
        // line 211
        $this->displayBlock('sonata_order_footer', $context, $blocks);
        // line 213
        echo "
";
    }

    // line 20
    public function block_sonata_order_title($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"row\">
        <div class=\"col-sm-3 col-sm-offset-9\" style=\"margin-bottom:15px;\">
            <p>
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_invoice_view", array("reference" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "reference", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\"><i class=\"glyphicon glyphicon-file icon-white\"></i>&nbsp;";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view_invoice", array(), "SonataOrderBundle");
        echo "</a>
            </p>
        </div>
    </div>
    ";
    }

    // line 30
    public function block_sonata_order_top($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"row\">
        ";
        // line 32
        $this->displayBlock('sonata_order_dates_statuses', $context, $blocks);
        // line 93
        echo "    </div>
    <div class=\"row\">
        ";
        // line 95
        $this->displayBlock('sonata_order_top_right', $context, $blocks);
        // line 125
        echo "    </div>
    ";
    }

    // line 32
    public function block_sonata_order_dates_statuses($context, array $blocks = array())
    {
        // line 33
        echo "            <div class=\"col-sm-6\">
                ";
        // line 34
        $this->displayBlock('sonata_order_dates', $context, $blocks);
        // line 65
        echo "            </div>
            <div class=\"col-sm-6\">
                ";
        // line 67
        $this->displayBlock('sonata_order_statuses', $context, $blocks);
        // line 91
        echo "            </div>
        ";
    }

    // line 34
    public function block_sonata_order_dates($context, array $blocks = array())
    {
        // line 35
        echo "                    ";
        $context["date_time_size"] = twig_constant("IntlDateFormatter::SHORT");
        // line 36
        echo "                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">
                                <h4 class=\"panel-title\">";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.subtitle_dates", array(), "SonataOrderBundle");
        echo "</h4>
                            </div>
                        </div>

                        <table class=\"table\">
                            <tr>
                                <th>";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.created_at", array(), "SonataOrderBundle");
        echo "</th>
                                <td>";
        // line 46
        echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "createdAt", array()), null, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()), null, (isset($context["date_time_size"]) ? $context["date_time_size"] : $this->getContext($context, "date_time_size")), (isset($context["date_time_size"]) ? $context["date_time_size"] : $this->getContext($context, "date_time_size")));
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.validated_at", array(), "SonataOrderBundle");
        echo "</th>
                                <td>
                                    ";
        // line 51
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "validatedAt", array())) {
            // line 52
            echo "                                        ";
            echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "validatedAt", array()), null, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()), null, (isset($context["date_time_size"]) ? $context["date_time_size"] : $this->getContext($context, "date_time_size")), (isset($context["date_time_size"]) ? $context["date_time_size"] : $this->getContext($context, "date_time_size")));
            echo "
                                    ";
        } else {
            // line 54
            echo "                                        /
                                    ";
        }
        // line 56
        echo "                                </td>
                            </tr>
                            <tr>
                                <th>";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.updated_at", array(), "SonataOrderBundle");
        echo "</th>
                                <td>";
        // line 60
        echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "updatedAt", array()), null, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()), null, (isset($context["date_time_size"]) ? $context["date_time_size"] : $this->getContext($context, "date_time_size")), (isset($context["date_time_size"]) ? $context["date_time_size"] : $this->getContext($context, "date_time_size")));
        echo "</td>
                            </tr>
                        </table>
                    </div>
                ";
    }

    // line 67
    public function block_sonata_order_statuses($context, array $blocks = array())
    {
        // line 68
        echo "                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">
                                <h4 class=\"panel-title\">";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.subtitle_statuses", array(), "SonataOrderBundle");
        echo "</h4>
                            </div>
                        </div>

                        <table class=\"table\">
                            <tr>
                                <th>";
        // line 77
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.order_status", array(), "SonataOrderBundle");
        echo "</th>
                                <td><span class=\"label";
        // line 78
        echo twig_escape_filter($this->env, (($this->env->getExtension('sonata_core_status')->statusClass((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), null, "danger")) ? ((" label-" . $this->env->getExtension('sonata_core_status')->statusClass((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), null, "danger"))) : ("")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "statusName", array()), array(), "SonataOrderBundle"), "html", null, true);
        echo "</span></td>
                            </tr>
                            <tr>
                                <th>";
        // line 81
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.payment_status", array(), "SonataOrderBundle");
        echo "</th>
                                <td><span class=\"label";
        // line 82
        echo twig_escape_filter($this->env, (($this->env->getExtension('sonata_core_status')->statusClass((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "payment", "danger")) ? ((" label-" . $this->env->getExtension('sonata_core_status')->statusClass((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "payment", "danger"))) : ("")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "paymentStatusName", array()), array(), "SonataPaymentBundle"), "html", null, true);
        echo "</span></td>
                            </tr>
                            <tr>
                                <th>";
        // line 85
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.delivery_status", array(), "SonataOrderBundle");
        echo "</th>
                                <td><span class=\"label";
        // line 86
        echo twig_escape_filter($this->env, (($this->env->getExtension('sonata_core_status')->statusClass((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "delivery", "danger")) ? ((" label-" . $this->env->getExtension('sonata_core_status')->statusClass((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "delivery", "danger"))) : ("")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "deliveryStatusName", array()), array(), "SonataDeliveryBundle"), "html", null, true);
        echo "</span></td>
                            </tr>
                        </table>
                    </div>
                ";
    }

    // line 95
    public function block_sonata_order_top_right($context, array $blocks = array())
    {
        // line 96
        echo "            <div class=\"col-sm-6\">
                ";
        // line 97
        $this->displayBlock('sonata_order_delivery', $context, $blocks);
        // line 109
        echo "            </div>
            <div class=\"col-sm-6\">
                ";
        // line 111
        $this->displayBlock('sonata_order_billing', $context, $blocks);
        // line 123
        echo "            </div>
        ";
    }

    // line 97
    public function block_sonata_order_delivery($context, array $blocks = array())
    {
        // line 98
        echo "                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">
                                <h4 class=\"panel-title\">";
        // line 101
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.delivery_title", array(), "SonataOrderBundle");
        echo "</h4>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 105
        echo $this->env->getExtension('sonata_address')->renderAddress($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "deliveryAsArray", array()));
        echo "
                        </div>
                    </div>
                ";
    }

    // line 111
    public function block_sonata_order_billing($context, array $blocks = array())
    {
        // line 112
        echo "                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">
                                <h4 class=\"panel-title\">";
        // line 115
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.billing_title", array(), "SonataOrderBundle");
        echo "</h4>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 119
        echo $this->env->getExtension('sonata_address')->renderAddress($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "billingAsArray", array()));
        echo "
                        </div>
                    </div>
                ";
    }

    // line 128
    public function block_sonata_order_elements($context, array $blocks = array())
    {
        // line 129
        echo "    <!-- Elements -->
    <div class=\"clearfix\">&nbsp;</div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 135
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.elements", array(), "SonataOrderBundle");
        echo "</h4>
                </div>

                <table class=\"table\">

                    ";
        // line 140
        $this->displayBlock('sonata_order_elements_header', $context, $blocks);
        // line 151
        echo "
                    <tbody>
                        ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "orderElements", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 154
            echo "                            <tr>
                                ";
            // line 155
            $this->displayBlock('sonata_order_element', $context, $blocks);
            // line 166
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                        <tr>
                            <td><span class=\"glyphicon glyphicon-plane\" style=\"font-size:50px;\">&nbsp;</span></td>
                            <td>";
        // line 170
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.delivery", array(), "SonataOrderBundle");
        echo "</td>
                            <td class=\"number\">";
        // line 171
        echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "deliveryCost", array()), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
        echo "</td>
                            <td class=\"number\">1</td>
                            <td class=\"number\">";
        // line 173
        echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "deliveryCost", array()), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
        echo "</td>
                        </tr>
                    </tbody>

                    ";
        // line 177
        $this->displayBlock('sonata_order_elements_sumup', $context, $blocks);
        // line 203
        echo "
                </table>

            </div>
        </div>
    </div>
    ";
    }

    // line 140
    public function block_sonata_order_elements_header($context, array $blocks = array())
    {
        // line 141
        echo "                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>";
        // line 144
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.element.label", array(), "SonataOrderBundle");
        echo "</th>
                                <th>";
        // line 145
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.element.unit_price", array(), "SonataOrderBundle");
        echo "</th>
                                <th>";
        // line 146
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.element.quantity", array(), "SonataOrderBundle");
        echo "</th>
                                <th>";
        // line 147
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.total_inc", array(), "SonataOrderBundle");
        echo "</th>
                            </tr>
                        </thead>
                    ";
    }

    // line 155
    public function block_sonata_order_element($context, array $blocks = array())
    {
        // line 156
        echo "                                    <td>
                                        ";
        // line 157
        $this->displayBlock('product_thumbnail', $context, $blocks);
        // line 160
        echo "                                    </td>
                                    <td><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_product_view", array("productId" => $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "productId", array()), "slug" => $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "product", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "designation", array()), "html", null, true);
        echo "</a></td>
                                    <td class=\"number\">";
        // line 162
        echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "unitPrice", array(0 => true), "method"), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
        echo "</td>
                                    <td class=\"number\">";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "quantity", array()), "html", null, true);
        echo "</td>
                                    <td class=\"number\">";
        // line 164
        echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "total", array(0 => true), "method"), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
        echo "</td>
                                ";
    }

    // line 157
    public function block_product_thumbnail($context, array $blocks = array())
    {
        // line 158
        echo "                                            ";
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "product", array()), "image", array()), "preview", array("itemprop" => "image", "class" => "img-rounded img-responsive"));
        // line 159
        echo "                                        ";
    }

    // line 177
    public function block_sonata_order_elements_sumup($context, array $blocks = array())
    {
        // line 178
        echo "                        <tfoot>
                            <tr>
                                <td colspan=\"3\" rowspan=\"";
        // line 180
        echo twig_escape_filter($this->env, (3 + twig_length_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "getVatAmounts", array()))), "html", null, true);
        echo "\">&nbsp;</td>
                                <th style=\"text-align: right\">";
        // line 181
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.total_excl", array(), "SonataOrderBundle");
        echo "</th>
                                <td class=\"number\"><b>";
        // line 182
        echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "totalExcl", array()), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
        echo "</b></td>
                            </tr>

                            ";
        // line 185
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "getVatAmounts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 186
            echo "                                <tr>
                                    <th style=\"text-align: right\">";
            // line 187
            echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_order_view_vat", array(), "SonataOrderBundle");
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "rate", array()), 2), "html", null, true);
            echo "%</th>
                                    <td class=\"number\"><b>";
            // line 188
            echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute($context["item"], "amount", array()), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
            echo "</b></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
                            <tr>
                                <th style=\"text-align: right\">";
        // line 193
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.total_vat", array(), "SonataOrderBundle");
        echo "</th>
                                <td class=\"number\"><b>";
        // line 194
        echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "vat", array()), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
        echo "</b></td>
                            </tr>

                            <tr>
                                <th style=\"text-align: right\">";
        // line 198
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.order.view.total_inc", array(), "SonataOrderBundle");
        echo "</th>
                                <td class=\"number\"><b>";
        // line 199
        echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "totalInc", array()), $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "locale", array()));
        echo "</b></td>
                            </tr>
                        </tfoot>
                    ";
    }

    // line 211
    public function block_sonata_order_footer($context, array $blocks = array())
    {
        // line 212
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SonataOrderBundle:Order:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 212,  568 => 211,  560 => 199,  556 => 198,  549 => 194,  545 => 193,  541 => 191,  532 => 188,  526 => 187,  523 => 186,  519 => 185,  513 => 182,  509 => 181,  505 => 180,  501 => 178,  498 => 177,  494 => 159,  491 => 158,  488 => 157,  482 => 164,  478 => 163,  474 => 162,  468 => 161,  465 => 160,  463 => 157,  460 => 156,  457 => 155,  449 => 147,  445 => 146,  441 => 145,  437 => 144,  432 => 141,  429 => 140,  419 => 203,  417 => 177,  410 => 173,  405 => 171,  401 => 170,  397 => 168,  382 => 166,  380 => 155,  377 => 154,  360 => 153,  356 => 151,  354 => 140,  346 => 135,  338 => 129,  335 => 128,  327 => 119,  320 => 115,  315 => 112,  312 => 111,  304 => 105,  297 => 101,  292 => 98,  289 => 97,  284 => 123,  282 => 111,  278 => 109,  276 => 97,  273 => 96,  270 => 95,  259 => 86,  255 => 85,  247 => 82,  243 => 81,  235 => 78,  231 => 77,  222 => 71,  217 => 68,  214 => 67,  205 => 60,  201 => 59,  196 => 56,  192 => 54,  186 => 52,  184 => 51,  179 => 49,  173 => 46,  169 => 45,  160 => 39,  155 => 36,  152 => 35,  149 => 34,  144 => 91,  142 => 67,  138 => 65,  136 => 34,  133 => 33,  130 => 32,  125 => 125,  123 => 95,  119 => 93,  117 => 32,  114 => 31,  111 => 30,  100 => 24,  95 => 21,  92 => 20,  87 => 213,  85 => 211,  82 => 210,  80 => 128,  77 => 127,  75 => 30,  72 => 29,  70 => 20,  67 => 19,  62 => 18,  59 => 17,  51 => 15,  11 => 12,);
    }
}
