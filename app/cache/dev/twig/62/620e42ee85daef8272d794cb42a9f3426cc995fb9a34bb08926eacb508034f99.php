<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9a6cd7e62c119bfc3611891b877e428e5b7e29d4c561b133421e8138f7fcb738 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_d10acb572f6b99ba7c59c501543b4df7669e732328cc17bd67bb6dc787aa2fa7 = $this->env->getExtension("native_profiler");
        $__internal_d10acb572f6b99ba7c59c501543b4df7669e732328cc17bd67bb6dc787aa2fa7->enter($__internal_d10acb572f6b99ba7c59c501543b4df7669e732328cc17bd67bb6dc787aa2fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d10acb572f6b99ba7c59c501543b4df7669e732328cc17bd67bb6dc787aa2fa7->leave($__internal_d10acb572f6b99ba7c59c501543b4df7669e732328cc17bd67bb6dc787aa2fa7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
