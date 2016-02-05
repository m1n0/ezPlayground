<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d7dafdf3fb79b4d51e8671c2b7c8d393bda8969f69d1d90fdd1f5e207aa2587f extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_899e6ba9b8ac00703a651d998d2f57f83984ebfc344e5b80744f3aeb72f04add = $this->env->getExtension("native_profiler");
        $__internal_899e6ba9b8ac00703a651d998d2f57f83984ebfc344e5b80744f3aeb72f04add->enter($__internal_899e6ba9b8ac00703a651d998d2f57f83984ebfc344e5b80744f3aeb72f04add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899e6ba9b8ac00703a651d998d2f57f83984ebfc344e5b80744f3aeb72f04add->leave($__internal_899e6ba9b8ac00703a651d998d2f57f83984ebfc344e5b80744f3aeb72f04add_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3addc82b826f66bb2dff185751271b825bb608d0818fd8d396bf70daea56484 = $this->env->getExtension("native_profiler");
        $__internal_a3addc82b826f66bb2dff185751271b825bb608d0818fd8d396bf70daea56484->enter($__internal_a3addc82b826f66bb2dff185751271b825bb608d0818fd8d396bf70daea56484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3addc82b826f66bb2dff185751271b825bb608d0818fd8d396bf70daea56484->leave($__internal_a3addc82b826f66bb2dff185751271b825bb608d0818fd8d396bf70daea56484_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4706188944c2aff785b438390d1cab4b52a574e3021fb2be80aa5157dce57539 = $this->env->getExtension("native_profiler");
        $__internal_4706188944c2aff785b438390d1cab4b52a574e3021fb2be80aa5157dce57539->enter($__internal_4706188944c2aff785b438390d1cab4b52a574e3021fb2be80aa5157dce57539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4706188944c2aff785b438390d1cab4b52a574e3021fb2be80aa5157dce57539->leave($__internal_4706188944c2aff785b438390d1cab4b52a574e3021fb2be80aa5157dce57539_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e5092045ce730020bc46644c3b1c0e1c05d20b03658f8c9f7f513a54e97248a = $this->env->getExtension("native_profiler");
        $__internal_0e5092045ce730020bc46644c3b1c0e1c05d20b03658f8c9f7f513a54e97248a->enter($__internal_0e5092045ce730020bc46644c3b1c0e1c05d20b03658f8c9f7f513a54e97248a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0e5092045ce730020bc46644c3b1c0e1c05d20b03658f8c9f7f513a54e97248a->leave($__internal_0e5092045ce730020bc46644c3b1c0e1c05d20b03658f8c9f7f513a54e97248a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
