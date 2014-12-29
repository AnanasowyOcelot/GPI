<?php

/* SonataNewsBundle:Mail:comment_notification.txt.twig */
class __TwigTemplate_d0a348553ae01888afa5b3cec84afe3e6b623d28542a06041951dbc701db6714 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 2
        echo $this->env->getExtension('translator')->trans("mail_title_comment_notification", array("%post_title%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "%blog_title%" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "%comment_message%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "message", array()), "%comment_email%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "email", array()), "%comment_url%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "url", array()), "%comment_name%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "name", array()), "%post_url%" => $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->getAttribute($this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "permalinkGenerator", array()), "generate", array(0 => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))), "method")), true), "%comment_invalid_link%" => $this->env->getExtension('routing')->getUrl("sonata_news_comment_moderation", array("commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "hash" => (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "status" => 0), true), "%comment_valid_link%" => $this->env->getExtension('routing')->getUrl("sonata_news_comment_moderation", array("commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "hash" => (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "status" => 1), true)), "SonataNewsBundle");
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Mail:comment_notification.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 12,  19 => 2,);
    }
}
