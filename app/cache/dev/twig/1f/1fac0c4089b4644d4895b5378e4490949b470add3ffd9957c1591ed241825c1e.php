<?php

/* EzPublishDebugBundle:Profiler:layout.html.twig */
class __TwigTemplate_59226c4c63c82eb64c9ad536d746712f2468c80629a79628af62b1720db456fe extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "EzPublishDebugBundle:Profiler:layout.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323dcb895b9271683ab6f65e129fafb9104eed59cc0c61d74d4ef33b50909c74 = $this->env->getExtension("native_profiler");
        $__internal_323dcb895b9271683ab6f65e129fafb9104eed59cc0c61d74d4ef33b50909c74->enter($__internal_323dcb895b9271683ab6f65e129fafb9104eed59cc0c61d74d4ef33b50909c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishDebugBundle:Profiler:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323dcb895b9271683ab6f65e129fafb9104eed59cc0c61d74d4ef33b50909c74->leave($__internal_323dcb895b9271683ab6f65e129fafb9104eed59cc0c61d74d4ef33b50909c74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d786113f17f5d15cac947a7455e889196ea9449f5cfec122b0e639d9d184d1f9 = $this->env->getExtension("native_profiler");
        $__internal_d786113f17f5d15cac947a7455e889196ea9449f5cfec122b0e639d9d184d1f9->enter($__internal_d786113f17f5d15cac947a7455e889196ea9449f5cfec122b0e639d9d184d1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"17\" height=\"28\" alt=\"eZ Publish Info\" style=\"vertical-align: bottom\" src=\"data:image/png;base64,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\" />
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "allCollectors", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["inner_collector"]) {
            // line 10
            echo "            ";
            $context["inner_template"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getToolbarTemplate", array(0 => $context["name"]), "method");
            // line 11
            echo "            ";
            if ((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template"))) {
                // line 12
                echo "                ";
                $this->loadTemplate((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template")), "EzPublishDebugBundle:Profiler:layout.html.twig", 12)->display(array_merge($context, array("collector" => $context["inner_collector"])));
                // line 13
                echo "
                ";
                // line 14
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<hr />";
                }
                // line 15
                echo "            ";
            }
            // line 16
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['inner_collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    ";
        // line 21
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "EzPublishDebugBundle:Profiler:layout.html.twig", 21)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_d786113f17f5d15cac947a7455e889196ea9449f5cfec122b0e639d9d184d1f9->leave($__internal_d786113f17f5d15cac947a7455e889196ea9449f5cfec122b0e639d9d184d1f9_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e1f8021e15eda9c731dd9c9429c1868a4bd636b8cad184c7fc47e2fad637435 = $this->env->getExtension("native_profiler");
        $__internal_9e1f8021e15eda9c731dd9c9429c1868a4bd636b8cad184c7fc47e2fad637435->enter($__internal_9e1f8021e15eda9c731dd9c9429c1868a4bd636b8cad184c7fc47e2fad637435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 25
        echo "<span class=\"label\">
    <span class=\"icon\"><img width=\"20\" height=\"24\" alt=\"eZ Publish Info\" style=\"vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAYCAYAAAD6S912AAAD8GlDQ1BJQ0MgUHJvZmlsZQAAOMuNVd1v21QUP4lvXKQWP6Cxjg4Vi69VU1u5GxqtxgZJk6XpQhq5zdgqpMl1bhpT1za2021Vn/YCbwz4A4CyBx6QeEIaDMT2su0BtElTQRXVJKQ9dNpAaJP2gqpwrq9Tu13GuJGvfznndz7v0TVAx1ea45hJGWDe8l01n5GPn5iWO1YhCc9BJ/RAp6Z7TrpcLgIuxoVH1sNfIcHeNwfa6/9zdVappwMknkJsVz19HvFpgJSpO64PIN5G+fAp30Hc8TziHS4miFhheJbjLMMzHB8POFPqKGKWi6TXtSriJcT9MzH5bAzzHIK1I08t6hq6zHpRdu2aYdJYuk9Q/881bzZa8Xrx6fLmJo/iu4/VXnfH1BB/rmu5ScQvI77m+BkmfxXxvcZcJY14L0DymZp7pML5yTcW61PvIN6JuGr4halQvmjNlCa4bXJ5zj6qhpxrujeKPYMXEd+q00KR5yNAlWZzrF+Ie+uNsdC/MO4tTOZafhbroyXuR3Df08bLiHsQf+ja6gTPWVimZl7l/oUrjl8OcxDWLbNU5D6JRL2gxkDu16fGuC054OMhclsyXTOOFEL+kmMGs4i5kfNuQ62EnBuam8tzP+Q+tSqhz9SuqpZlvR1EfBiOJTSgYMMM7jpYsAEyqJCHDL4dcFFTAwNMlFDUUpQYiadhDmXteeWAw3HEmA2s15k1RmnP4RHuhBybdBOF7MfnICmSQ2SYjIBM3iRvkcMki9IRcnDTthyLz2Ld2fTzPjTQK+Mdg8y5nkZfFO+se9LQr3/09xZr+5GcaSufeAfAww60mAPx+q8u/bAr8rFCLrx7s+vqEkw8qb+p26n11Aruq6m1iJH6PbWGv1VIY25mkNE8PkaQhxfLIF7DZXx80HD/A3l2jLclYs061xNpWCfoB6WHJTjbH0mV35Q/lRXlC+W8cndbl9t2SfhU+Fb4UfhO+F74GWThknBZ+Em4InwjXIyd1ePnY/Psg3pb1TJNu15TMKWMtFt6ScpKL0ivSMXIn9QtDUlj0h7U7N48t3i8eC0GnMC91dX2sTivgloDTgUVeEGHLTizbf5Da9JLhkhh29QOs1luMcScmBXTIIt7xRFxSBxnuJWfuAd1I7jntkyd/pgKaIwVr3MgmDo2q8x6IdB5QH162mcX7ajtnHGN2bov71OU1+U0fqqoXLD0wX5ZM005UHmySz3qLtDqILDvIL+iH6jB9y2x83ok898GOPQX3lk3Itl0A+BrD6D7tUjWh3fis58BXDigN9yF8M5PJH4B8Gr79/F/XRm8m241mw/wvur4BGDj42bzn+Vmc+NL9L8GcMn8F1kAcXi1s/XUAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QEPFDMKCOYbNQAAAoZJREFUOMvtlE1rU0EUhp9z5jY3SaXWWkQR0RZx5UrUWtouXFTottA/Iogfq6zc+Bes+jesUDfuRbuwQjEiAdtaNW2a5ib33jkubowmxvi19cAd5jLDO/Oe85yB//HPcfbMhI0Uhg34429s9IgHkkcPH1q1Wl0CCDbelrlz+w6zc7O0mk0Q+cUVBMxQVQCWl+8TJwnOOQACgOnpKywsLPyVw5drL0iTtFuw2WoBkCRJ5+RBYWaICEmSEEXNrrUAQNo2VRURQUQwM7z3/QUz45hZ54A4il1HsCtDbTER6dj4WYRhSD7MUcjnGDkyUu0r+FWsVquxvr5OnHpEHYZlt2rvcaqIOl6X38nO7j77y4/m+wp673HOUalUuHx1nvH6LqdHINrLbPYaGj01KuX4wD8fn7g+MzV1PRiEx8njJ7g3OcbFoyEHzQYqPxbMxFmo6HbU8Defb1swCDfnlZM5ZbLgqEuQEWDd21LvpeCMohbl8CGRYFDS49QTJQkHrZhGK+6LlG/3zUEcS5rEDBQUAUVwKqgK2qeLDFABUQERBlJsPT82uCEzlvkOUO99B2bvPfKb7WftQayNTRiGWdsE3zJQKBQQEQMTfls6E4wrlQpbW1vU63UAhotFym/K6kmdqJqZSfYKCdZrXLrnweLi4tCTlRWerq5iltkPhwI2P3zkU23ba3BULWm105L21zIwBDMI5mZmSlEU0Wg0QBUz02I+tz/6fufS573aUmCbvpAvim81RUS7SiUIKRCqEYpDNf55cm7cunVtbe3V4wvvn6Xnj41roxmJqPbWHm9CTo1qIjzYaBCUSqVeFoNSqRQNqY7lA+HuBlAfgqbPgLM+vLTfs3PDIV8AeYkiNww3NXYAAAAASUVORK5CYII=\" /></span>
    <strong>eZ Publish</strong>
</span>
";
        
        $__internal_9e1f8021e15eda9c731dd9c9429c1868a4bd636b8cad184c7fc47e2fad637435->leave($__internal_9e1f8021e15eda9c731dd9c9429c1868a4bd636b8cad184c7fc47e2fad637435_prof);

    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b0ef666bae74c1ac346ceeb203cf44f36fd9e5aa64d289b1846c32c52f5c332 = $this->env->getExtension("native_profiler");
        $__internal_6b0ef666bae74c1ac346ceeb203cf44f36fd9e5aa64d289b1846c32c52f5c332->enter($__internal_6b0ef666bae74c1ac346ceeb203cf44f36fd9e5aa64d289b1846c32c52f5c332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 32
        echo "    <h2>eZ Publish Usage Information</h2>

    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "allCollectors", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["inner_collector"]) {
            // line 35
            echo "        ";
            $context["inner_template"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getPanelTemplate", array(0 => $context["name"]), "method");
            // line 36
            echo "        ";
            if ((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template"))) {
                $this->loadTemplate((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template")), "EzPublishDebugBundle:Profiler:layout.html.twig", 36)->display(array_merge($context, array("collector" => $context["inner_collector"])));
            }
            // line 37
            echo "
        ";
            // line 38
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<hr />";
            }
            // line 39
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['inner_collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        
        $__internal_6b0ef666bae74c1ac346ceeb203cf44f36fd9e5aa64d289b1846c32c52f5c332->leave($__internal_6b0ef666bae74c1ac346ceeb203cf44f36fd9e5aa64d289b1846c32c52f5c332_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishDebugBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 41,  176 => 39,  172 => 38,  169 => 37,  164 => 36,  161 => 35,  144 => 34,  140 => 32,  134 => 31,  123 => 25,  117 => 24,  110 => 21,  107 => 20,  103 => 18,  88 => 16,  85 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  51 => 9,  49 => 8,  46 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <img width="17" height="28" alt="eZ Publish Info" style="vertical-align: bottom" src="data:image/png;base64,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" />*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         {% for name, inner_collector in collector.allCollectors %}*/
/*             {% set inner_template = collector.getToolbarTemplate( name ) %}*/
/*             {% if inner_template %}*/
/*                 {% include inner_template with { "collector": inner_collector } %}*/
/* */
/*                 {% if not loop.last %}<hr />{% endif %}*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*     {% endset %}*/
/* */
/*     {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img width="20" height="24" alt="eZ Publish Info" style="vertical-align: middle;" src="data:image/png;base64,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" /></span>*/
/*     <strong>eZ Publish</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>eZ Publish Usage Information</h2>*/
/* */
/*     {% for name, inner_collector in collector.allCollectors %}*/
/*         {% set inner_template = collector.getPanelTemplate( name ) %}*/
/*         {% if inner_template %}{% include inner_template with { "collector": inner_collector } %}{% endif %}*/
/* */
/*         {% if not loop.last %}<hr />{% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */