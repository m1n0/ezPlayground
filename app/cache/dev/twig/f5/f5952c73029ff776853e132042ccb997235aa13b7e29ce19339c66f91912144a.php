<?php

/* EzPublishCoreBundle:default:content/full.html.twig */
class __TwigTemplate_8df470f4b99659e5f6e7111fc4c40f3888894175b278ffa43fe1ae1633045a8f extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_f012dbb63429db1961a2b40a0414a108c8d10fa1c7b9a18b262729887db4303f = $this->env->getExtension("native_profiler");
        $__internal_f012dbb63429db1961a2b40a0414a108c8d10fa1c7b9a18b262729887db4303f->enter($__internal_f012dbb63429db1961a2b40a0414a108c8d10fa1c7b9a18b262729887db4303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishCoreBundle:default:content/full.html.twig"));

        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "</h2>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "fieldsByLanguage", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 3
            echo "    <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldDefIdentifier", array()), "html", null, true);
            echo "</h3>
    ";
            // line 4
            echo $this->env->getExtension('ezpublish.field_rendering')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), $this->getAttribute($context["field"], "fieldDefIdentifier", array()));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f012dbb63429db1961a2b40a0414a108c8d10fa1c7b9a18b262729887db4303f->leave($__internal_f012dbb63429db1961a2b40a0414a108c8d10fa1c7b9a18b262729887db4303f_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:default:content/full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <h2>{{ ez_content_name(content) }}</h2>*/
/* {% for field in content.fieldsByLanguage %}*/
/*     <h3>{{ field.fieldDefIdentifier }}</h3>*/
/*     {{ ez_render_field(content, field.fieldDefIdentifier) }}*/
/* {% endfor %}*/
/* */
