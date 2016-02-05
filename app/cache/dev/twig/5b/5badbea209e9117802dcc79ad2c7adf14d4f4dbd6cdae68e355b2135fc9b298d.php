<?php

/* TedivmStashBundle:Profiler:layout.html.twig */
class __TwigTemplate_22a42f675f40bd9cd6c9be1e76a72270c5b7490508edc750a74c7de95954722c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "TedivmStashBundle:Profiler:layout.html.twig", 1);
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
        $__internal_a5f249f0e376fc4d2e11ec2cd05685110aa6a2574e3b0dbdab48daa837acfbf6 = $this->env->getExtension("native_profiler");
        $__internal_a5f249f0e376fc4d2e11ec2cd05685110aa6a2574e3b0dbdab48daa837acfbf6->enter($__internal_a5f249f0e376fc4d2e11ec2cd05685110aa6a2574e3b0dbdab48daa837acfbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TedivmStashBundle:Profiler:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f249f0e376fc4d2e11ec2cd05685110aa6a2574e3b0dbdab48daa837acfbf6->leave($__internal_a5f249f0e376fc4d2e11ec2cd05685110aa6a2574e3b0dbdab48daa837acfbf6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92d8fac711d53b0c990750ee4931bf78374b519653cd8fc522e10cf06ac86421 = $this->env->getExtension("native_profiler");
        $__internal_92d8fac711d53b0c990750ee4931bf78374b519653cd8fc522e10cf06ac86421->enter($__internal_92d8fac711d53b0c990750ee4931bf78374b519653cd8fc522e10cf06ac86421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"22\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wHGAALFQCM6LQAAAFwSURBVEjH7ZW9S4JRFIefRAoaAmlpbguCiKaGIqjh1FI0SV+vH6G2BmW4RlJG0Rj08RcE0aI3bGqPioagD6IpSEISGiSiBt/ATK+91ynwLBfOOffhx+/cD6jHv40GpVQ7EDXcnxCR+7JgAKVUGhgyAJ8CAyLyWVpw2esC8GEA7gesiopt1btA0AD+AnSISKacYoAYkDMAtwKJSlYgIs/AmuEQLaXUYHHCXdKwBdxqAFlN7UkH7jQ8Hd9z2gZuROTNXZQcBg6AZgPmOxAC2gAvEHXZUC9wZAjNASPAgy2ssdiKa6DX0IEM0GJfluYfHi8txi5qeRdWE/F5wFPpHNf05pQm3Lru4GyAyakJPJ6CmO6unkqtLkdgf8DHxvomyWSKfD7vSLHWipXlOGPjo6RPjglHQo680YJTKYU17ScSnsPyzehamxxZcX55VrjH2Sx7O/t/teKxKlgzrHLgV8AvIodVwQ7iDugTkav6b/8rvgBcMlqf0kD/YAAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
        echo " call";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()) != 1)) {
            echo "s";
        }
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
        echo " hit";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()) != 1)) {
            echo "s";
        }
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
                <b>Total Response</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
                <b>Default Queue</b> <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "default", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
                <b>Av. Drivers</b> <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "drivers", array()), ", "), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "caches", array()));
        foreach ($context['_seq'] as $context["name"] => $context["details"]) {
            // line 19
            echo "            <hr style=\"border: 1px solid #ccc;\">
            <div class=\"sf-toolbar-info-piece\">
                <b><i>";
            // line 21
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</i></b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "calls", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "hits", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Drivers</b> <span>";
            // line 24
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array()), ", "), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "TedivmStashBundle:Profiler:layout.html.twig", 28)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_92d8fac711d53b0c990750ee4931bf78374b519653cd8fc522e10cf06ac86421->leave($__internal_92d8fac711d53b0c990750ee4931bf78374b519653cd8fc522e10cf06ac86421_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        $__internal_163b55fb0d5575695bc7b2ff72031aac957209eea832a8801fa25290cbc87614 = $this->env->getExtension("native_profiler");
        $__internal_163b55fb0d5575695bc7b2ff72031aac957209eea832a8801fa25290cbc87614->enter($__internal_163b55fb0d5575695bc7b2ff72031aac957209eea832a8801fa25290cbc87614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tedivmstash/images/stash.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Stash</strong>
    <span class=\"count\">
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_163b55fb0d5575695bc7b2ff72031aac957209eea832a8801fa25290cbc87614->leave($__internal_163b55fb0d5575695bc7b2ff72031aac957209eea832a8801fa25290cbc87614_prof);

    }

    // line 41
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcb56b0b0b2833aaf79baaaa0a4cd18f32862c1c830dfed7ff3f5cb94efe9ebe = $this->env->getExtension("native_profiler");
        $__internal_dcb56b0b0b2833aaf79baaaa0a4cd18f32862c1c830dfed7ff3f5cb94efe9ebe->enter($__internal_dcb56b0b0b2833aaf79baaaa0a4cd18f32862c1c830dfed7ff3f5cb94efe9ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 42
        echo "    <h2>Cache Information</h2>
    <table>
        <tr>
            <th>Default Cache</th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "default", array()), "html", null, true);
        echo "</td>
        <tr>
            <th>Available Drivers</th>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "drivers", array()), ", "), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Total Requests</th>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Total Hits</th>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>

    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "caches", array()));
        foreach ($context['_seq'] as $context["name"] => $context["details"]) {
            // line 62
            echo "
        <h2>Cache Service: <i>";
            // line 63
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</i></h2>
        <table>
            <tr>
                <th>Drivers</th>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array()), ", "), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Calls</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "calls", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Hits</th>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "hits", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Doctrine Adapter</th>
                <td>";
            // line 79
            echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "registerDoctrineAdapter", array())) ? ("true") : ("false"));
            echo "</td>
            </tr>
            <tr>
                <th>Cache In-Memory</th>
                <td>";
            // line 83
            echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "inMemory", array())) ? ("true") : ("false"));
            echo "</td>
            </tr>
        </table>

        <h3>Driver Options</h3>
        <table>
            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "options", array()));
            foreach ($context['_seq'] as $context["name"] => $context["options"]) {
                // line 90
                echo "                ";
                if ((($context["name"] != "drivers") && twig_in_filter($context["name"], $this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array())))) {
                    // line 91
                    echo "                    <tr>
                        <th colspan=\"2\"><h3 style=\"font-size: 16px; margin-bottom: 0;\">";
                    // line 92
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " settings</h3></th>
                    </tr>
                    ";
                    // line 94
                    if (twig_in_filter($context["name"], array(0 => "Memcache", 1 => "Redis"))) {
                        // line 95
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["options"], "servers", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["ovalue"]) {
                            // line 96
                            echo "                            <tr>
                                <th>Server</th>
                                <td>";
                            // line 98
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "server", array()), "html", null, true);
                            echo ":";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "port", array()), "html", null, true);
                            echo " ";
                            if ($this->getAttribute($context["ovalue"], "weight", array(), "any", true, true)) {
                                echo "(weight ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "weight", array()), "html", null, true);
                                echo ")";
                            }
                            echo "</td>
                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ovalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        echo "                    ";
                    } else {
                        // line 102
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["options"]);
                        foreach ($context['_seq'] as $context["oname"] => $context["ovalue"]) {
                            // line 103
                            echo "                            <tr>
                                <th>";
                            // line 104
                            echo twig_escape_filter($this->env, $context["oname"], "html", null, true);
                            echo "</th>
                                ";
                            // line 105
                            if ((($context["oname"] == "filePermissions") || ($context["oname"] == "dirPermissions"))) {
                                // line 106
                                echo "                                    <td>";
                                echo twig_escape_filter($this->env, sprintf("%o", $context["ovalue"]), "html", null, true);
                                echo "
                                ";
                            } else {
                                // line 108
                                echo "                                    <td>";
                                echo twig_escape_filter($this->env, $context["ovalue"], "html", null, true);
                                echo "</td>
                                ";
                            }
                            // line 110
                            echo "                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['oname'], $context['ovalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 112
                        echo "                    ";
                    }
                    // line 113
                    echo "                ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "        </table>

        <h3>Query Record</h3>
        <table>
            <tr>
                <th>Request Key</th>
                <th>Hit?</th>
                <th>Returned Value</th>
            </tr>
            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "queries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 125
                echo "                <tr>
                    <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "key", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "hit", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "value", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "        </table>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dcb56b0b0b2833aaf79baaaa0a4cd18f32862c1c830dfed7ff3f5cb94efe9ebe->leave($__internal_dcb56b0b0b2833aaf79baaaa0a4cd18f32862c1c830dfed7ff3f5cb94efe9ebe_prof);

    }

    public function getTemplateName()
    {
        return "TedivmStashBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 131,  361 => 128,  357 => 127,  353 => 126,  350 => 125,  346 => 124,  335 => 115,  329 => 114,  326 => 113,  323 => 112,  316 => 110,  310 => 108,  304 => 106,  302 => 105,  298 => 104,  295 => 103,  290 => 102,  287 => 101,  270 => 98,  266 => 96,  261 => 95,  259 => 94,  254 => 92,  251 => 91,  248 => 90,  244 => 89,  235 => 83,  228 => 79,  221 => 75,  214 => 71,  207 => 67,  200 => 63,  197 => 62,  193 => 61,  186 => 57,  179 => 53,  172 => 49,  166 => 46,  160 => 42,  154 => 41,  141 => 36,  135 => 33,  132 => 32,  126 => 31,  118 => 28,  115 => 27,  106 => 24,  96 => 21,  92 => 19,  88 => 18,  83 => 16,  77 => 13,  69 => 10,  66 => 9,  63 => 8,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <img width="22" height="28" alt="Memory Usage" style="vertical-align: middle;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wHGAALFQCM6LQAAAFwSURBVEjH7ZW9S4JRFIefRAoaAmlpbguCiKaGIqjh1FI0SV+vH6G2BmW4RlJG0Rj08RcE0aI3bGqPioagD6IpSEISGiSiBt/ATK+91ynwLBfOOffhx+/cD6jHv40GpVQ7EDXcnxCR+7JgAKVUGhgyAJ8CAyLyWVpw2esC8GEA7gesiopt1btA0AD+AnSISKacYoAYkDMAtwKJSlYgIs/AmuEQLaXUYHHCXdKwBdxqAFlN7UkH7jQ8Hd9z2gZuROTNXZQcBg6AZgPmOxAC2gAvEHXZUC9wZAjNASPAgy2ssdiKa6DX0IEM0GJfluYfHi8txi5qeRdWE/F5wFPpHNf05pQm3Lru4GyAyakJPJ6CmO6unkqtLkdgf8DHxvomyWSKfD7vSLHWipXlOGPjo6RPjglHQo680YJTKYU17ScSnsPyzehamxxZcX55VrjH2Sx7O/t/teKxKlgzrHLgV8AvIodVwQ7iDugTkav6b/8rvgBcMlqf0kD/YAAAAABJRU5ErkJggg=="/>*/
/*         <span class="sf-toolbar-status sf-toolbar-status-green">{{ collector.calls }} call{% if collector.calls != 1 %}s{% endif %} / {{ collector.hits }} hit{% if collector.hits != 1 %}s{% endif %}</span>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*                 <b>Total Response</b> <span class="sf-toolbar-status sf-toolbar-status-green">{{ collector.calls }} / {{ collector.hits }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*                 <b>Default Queue</b> <span>{{ collector.default }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*                 <b>Av. Drivers</b> <span>{{ collector.drivers|join(', ') }}</span>*/
/*         </div>*/
/*         {% for name, details in collector.caches %}*/
/*             <hr style="border: 1px solid #ccc;">*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b><i>{{ name }}</i></b> <span class="sf-toolbar-status sf-toolbar-status-green">{{ details.calls }} / {{ details.hits }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Drivers</b> <span>{{ details.options.drivers|join(', ') }}</span>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endset %}*/
/*     {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="{{ asset('bundles/tedivmstash/images/stash.png') }}" alt="" /></span>*/
/*     <strong>Stash</strong>*/
/*     <span class="count">*/
/*         <span>{{ collector.calls }} / {{ collector.hits }}</span>*/
/*     </span>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Cache Information</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Default Cache</th>*/
/*             <td>{{ collector.default }}</td>*/
/*         <tr>*/
/*             <th>Available Drivers</th>*/
/*             <td>{{ collector.drivers|join(', ') }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Total Requests</th>*/
/*             <td>{{ collector.calls }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Total Hits</th>*/
/*             <td>{{ collector.hits }}</td>*/
/*         </tr>*/
/*     </table>*/
/* */
/*     {% for name, details in collector.caches %}*/
/* */
/*         <h2>Cache Service: <i>{{ name }}</i></h2>*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Drivers</th>*/
/*                 <td>{{ details.options.drivers|join(', ') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Calls</th>*/
/*                 <td>{{ details.calls }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Hits</th>*/
/*                 <td>{{ details.hits }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Doctrine Adapter</th>*/
/*                 <td>{{ details.options.registerDoctrineAdapter ? 'true' : 'false' }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cache In-Memory</th>*/
/*                 <td>{{ details.options.inMemory ? 'true' : 'false' }}</td>*/
/*             </tr>*/
/*         </table>*/
/* */
/*         <h3>Driver Options</h3>*/
/*         <table>*/
/*             {% for name, options in details.options %}*/
/*                 {% if name != 'drivers' and name in details.options.drivers %}*/
/*                     <tr>*/
/*                         <th colspan="2"><h3 style="font-size: 16px; margin-bottom: 0;">{{ name }} settings</h3></th>*/
/*                     </tr>*/
/*                     {% if name in ['Memcache', 'Redis'] %}*/
/*                         {% for ovalue in options.servers %}*/
/*                             <tr>*/
/*                                 <th>Server</th>*/
/*                                 <td>{{ ovalue.server }}:{{ ovalue.port }} {% if ovalue.weight is defined %}(weight {{ ovalue.weight }}){% endif %}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         {% for oname, ovalue in options %}*/
/*                             <tr>*/
/*                                 <th>{{ oname }}</th>*/
/*                                 {% if oname == 'filePermissions' or oname == 'dirPermissions' %}*/
/*                                     <td>{{ "%o"|format(ovalue) }}*/
/*                                 {% else %}*/
/*                                     <td>{{ ovalue }}</td>*/
/*                                 {% endif %}*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </table>*/
/* */
/*         <h3>Query Record</h3>*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Request Key</th>*/
/*                 <th>Hit?</th>*/
/*                 <th>Returned Value</th>*/
/*             </tr>*/
/*             {% for query in details.queries %}*/
/*                 <tr>*/
/*                     <td>{{ query.key }}</td>*/
/*                     <td>{{ query.hit }}</td>*/
/*                     <td>{{ query.value }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/* */
/* */
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
