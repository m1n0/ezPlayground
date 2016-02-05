<?php

/* EzPublishCoreBundle::viewbase_layout.html.twig */
class __TwigTemplate_5cc3d0f20a174bff69b2d724b893e5cc2a6c772c221458ec558e88a0c9b1ca53 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47ee5bac5b2356489af443bad74d046fe492a6581c37e90717ca22aa9b8d4591 = $this->env->getExtension("native_profiler");
        $__internal_47ee5bac5b2356489af443bad74d046fe492a6581c37e90717ca22aa9b8d4591->enter($__internal_47ee5bac5b2356489af443bad74d046fe492a6581c37e90717ca22aa9b8d4591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishCoreBundle::viewbase_layout.html.twig"));

        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_47ee5bac5b2356489af443bad74d046fe492a6581c37e90717ca22aa9b8d4591->leave($__internal_47ee5bac5b2356489af443bad74d046fe492a6581c37e90717ca22aa9b8d4591_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_c21fcae3b7d9bdf6ac6c69a9c122cfc845f7c2a08d4dea37da043eb8ce38000a = $this->env->getExtension("native_profiler");
        $__internal_c21fcae3b7d9bdf6ac6c69a9c122cfc845f7c2a08d4dea37da043eb8ce38000a->enter($__internal_c21fcae3b7d9bdf6ac6c69a9c122cfc845f7c2a08d4dea37da043eb8ce38000a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c21fcae3b7d9bdf6ac6c69a9c122cfc845f7c2a08d4dea37da043eb8ce38000a->leave($__internal_c21fcae3b7d9bdf6ac6c69a9c122cfc845f7c2a08d4dea37da043eb8ce38000a_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle::viewbase_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,);
    }
}
/* {# this is the layout used when we want to render a block with any decoration*/
/*  # ie with using the complete pagelayout.*/
/*  #}*/
/* {% block content %}{% endblock %}*/
/* */
