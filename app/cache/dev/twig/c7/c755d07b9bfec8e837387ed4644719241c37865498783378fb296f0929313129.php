<?php

/* EzPublishDebugBundle:Profiler/persistence:toolbar.html.twig */
class __TwigTemplate_90b8c2624ad1ec3f4e02fdbac465506f865a36908e9973fb81ba6b5665ec3558 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_4e4b66f0f5066430a0297df0e10c644b0185d0b6ae5febff94a9a9639b3a9df5 = $this->env->getExtension("native_profiler");
        $__internal_4e4b66f0f5066430a0297df0e10c644b0185d0b6ae5febff94a9a9639b3a9df5->enter($__internal_4e4b66f0f5066430a0297df0e10c644b0185d0b6ae5febff94a9a9639b3a9df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishDebugBundle:Profiler/persistence:toolbar.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-info-piece\">
    <b>SPI (persistence)</b>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>calls</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "count", array()), "html", null, true);
        echo "</span>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>handlers</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "handlerscount", array()), "html", null, true);
        echo "</span>
</div>
";
        
        $__internal_4e4b66f0f5066430a0297df0e10c644b0185d0b6ae5febff94a9a9639b3a9df5->leave($__internal_4e4b66f0f5066430a0297df0e10c644b0185d0b6ae5febff94a9a9639b3a9df5_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishDebugBundle:Profiler/persistence:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 1,);
    }
}
/* <div class="sf-toolbar-info-piece">*/
/*     <b>SPI (persistence)</b>*/
/* </div>*/
/* <div class="sf-toolbar-info-piece">*/
/*     <b>calls</b> <span class="sf-toolbar-status sf-toolbar-status-green">{{ collector.count }}</span>*/
/* </div>*/
/* <div class="sf-toolbar-info-piece">*/
/*     <b>handlers</b> <span class="sf-toolbar-status sf-toolbar-status-green">{{ collector.handlerscount }}</span>*/
/* </div>*/
/* */
