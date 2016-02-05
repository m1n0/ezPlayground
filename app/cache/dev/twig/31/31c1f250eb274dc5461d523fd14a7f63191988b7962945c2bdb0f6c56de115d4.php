<?php

/* eZPlatformUIBundle:PlatformUI:shell.html.twig */
class __TwigTemplate_281dc54c0c0d46b4ac63c855f61179f5f9ec35dc1ce4d496376e13b12de39a1c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_b667d456e06f1fd4b2c945a6b85534c252135f69675408e03ebb25fe1e45d4a2 = $this->env->getExtension("native_profiler");
        $__internal_b667d456e06f1fd4b2c945a6b85534c252135f69675408e03ebb25fe1e45d4a2->enter($__internal_b667d456e06f1fd4b2c945a6b85534c252135f69675408e03ebb25fe1e45d4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eZPlatformUIBundle:PlatformUI:shell.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\" class=\"ez-platformui-app-page\">
";
        // line 4
        echo "<head>
    <title>eZ Platform UI</title>
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <meta charset=\"utf-8\"/>
";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "64dd8c5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_base-context-min_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_grids-min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_buttons-min_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_tables-min_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_forms-min_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_flag-icon.min_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_alloy-editor-ez_7.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_layout_8.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_navigationhub_9.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_9") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_confirmbox_10.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_10") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_languageselectionbox_11.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_11") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_notificationhub_12.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_12") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_notification_13.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_13") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_universaldiscovery_14.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_14") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_browse_15.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_15") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_search_16.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_16") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selected_17.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_17") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_confirmedlist_18.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_18") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_tree_19.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_19") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_loginform_20.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_20") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_contentedit_21.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_21") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_locationview_22.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_22") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_subitemlist_23.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_23") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_rawcontent_24.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_24") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_languageswitcher_25.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_25") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_details_26.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_26") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_relations_27.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_27") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_locations_28.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_28"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_28") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_field_29.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_29"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_29") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_user_30.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_30"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_30") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_author_31.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_31"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_31") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_maplocation_32.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_32"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_32") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selection_33.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_33") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_keyword_34.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_34"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_34") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_country_35.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_35"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_35") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_media_36.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_36"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_36") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_richtext_37.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_37"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_37") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_contenteditform_38.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_38"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_38") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_bar_39.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_39"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_39") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_discoverybar_40.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_40"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_40") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_contenttypeselector_41.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_41"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_41") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_tree_42.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_42"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_42") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_button_43.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_43") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_preview_44.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_44"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_44") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_create-content_45.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_45"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_45") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_translate_46.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_46"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_46") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_editpreview_47.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_47"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_47") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_fieldedit_48.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_48"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_48") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_error_49.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_49"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_49") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_asynchronous_50.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_50"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_50") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_dashboard_51.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_51"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_51") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_studiopresentation_52.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_52"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_52") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_studiopluspresentation_53.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_53"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_53") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_checkbox_54.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_54"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_54") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_country_55.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_55"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_55") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_textline_56.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_56"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_56") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_keyword_57.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_57"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_57") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_textblock_58.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_58"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_58") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_xmltext_59.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_59"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_59") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_emailaddress_60.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_60"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_60") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_url_61.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_61"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_61") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_float_62.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_62"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_62") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_integer_63.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_63"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_63") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_maplocation_64.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_64"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_64") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_author_65.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_65"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_65") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_binarybase_66.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_66"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_66") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_image_67.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_67"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_67") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_media_68.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_68"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_68") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_binaryfile_69.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_69") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selection_70.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_70"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_70") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_time_71.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_71"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_71") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_date_72.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_72") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_dateandtime_73.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_73"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_73") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_relation_74.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_74"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_74") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_relationlist_75.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_75"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_75") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_richtext_76.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_76"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_76") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_isbn_77.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_77"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_77") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_user_78.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_78"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_78") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_tabs_79.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_79"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_79") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_page-header_80.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_80"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_80") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_serverside-content_81.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_81"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_81") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selection-filter_82.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_82"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_82") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_button_83.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_83"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_83") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_table-data_84.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_84"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_84") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_breadcrumbs_85.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_85"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_85") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_yui-calendar_86.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_86"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_86") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_pure-grid_87.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_87"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_87") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_general_88.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_88"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_88") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_content_89.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_89"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_89") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_labeled-button_90.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_90"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_90") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_app_91.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_91"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_91") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_error_92.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_92"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_92") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_loginform_93.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_93"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_93") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_bar_94.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_94") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_confirmbox_95.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_95"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_95") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_languageselectionbox_96.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_96"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_96") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_notificationhub_97.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_97"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_97") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_notification_98.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_98"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_98") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_universaldiscovery_99.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_99"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_99") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_browse_100.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_100"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_100") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_search_101.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_101"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_101") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selected_102.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_102"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_102") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_confirmedlist_103.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_103"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_103") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_tree_104.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_104"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_104") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_discoverybar_105.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_105"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_105") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_contenttypeselector_106.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_106"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_106") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_tree_107.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_107"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_107") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_button_108.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_108"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_108") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_preview_109.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_109"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_109") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_create-content_110.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_110"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_110") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_translate_111.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_111"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_111") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_dashboard_112.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_112"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_112") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_studiopresentation_113.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_113"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_113") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_studiopluspresentation_114.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_114"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_114") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_serverside_115.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_115"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_115") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_navigationhub_116.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_116"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_116") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_locationview_117.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_117"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_117") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_subitemlist_118.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_118"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_118") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_rawcontent_119.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_119"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_119") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_languageswitcher_120.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_120"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_120") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_asynchronous_121.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_121"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_121") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_details_122.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_122"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_122") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_relations_123.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_123"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_123") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_locations_124.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_124"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_124") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_field_125.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_125"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_125") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_url_126.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_126"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_126") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_binaryfile_127.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_127") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_maplocation_128.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_128"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_128") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_xmltext_129.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_129"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_129") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_media_130.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_130"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_130") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_richtext_131.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_131"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_131") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_contentedit_132.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_132"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_132") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_contenteditform_133.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_133"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_133") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_editpreview_134.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_134"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_134") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_fieldedit_135.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_135"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_135") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_keyword_136.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_136"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_136") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_country_137.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_137"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_137") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_maplocation_138.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_138"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_138") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_author_139.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_139"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_139") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selection_140.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_140"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_140") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_binarybase_141.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_141"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_141") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_image_142.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_142"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_142") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_media_143.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_143"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_143") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_binaryfile_144.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_144"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_144") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_date_145.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_145"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_145") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_dateandtime_146.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_146"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_146") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_relation_147.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_147"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_147") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_relationlist_148.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_148"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_148") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_country_149.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_149"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_149") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_richtext_150.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_150"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_150") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_user_151.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_151"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_151") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_icons_152.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_152"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_152") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_tabs_153.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_153"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_153") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_page-header_154.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_154"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_154") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_serverside-content_155.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_155"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_155") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selection-filter_156.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_156"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_156") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_button_157.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_157"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_157") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_selection-table_158.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_158"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_158") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_breadcrumbs_159.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_159"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_159") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_yui-calendar_160.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_160"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_160") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_general_161.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_161"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_161") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_content_162.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_162"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_162") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_labeled-button_163.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_163"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_163") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_blockremove_164.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
            // asset "64dd8c5_164"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5_164") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5_part_1_embedhref_165.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
        } else {
            // asset "64dd8c5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_64dd8c5") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/64dd8c5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    <style>
        .ez-loading-message {
            display: none;
        }

        .yui3-js-enabled .ez-loading-message {
            font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            font-size: 40px;
            margin-top: 50px;
            text-align: center;
            display: block;
            color: #888;
        }
        .ez-platformui-app-ready .ez-loading-message {
            display: none;
        }
    </style>
</head>
<body class=\"ez-platformui-app-body yui3-skin-platformui\">
    <div class=\"ez-loading-message\"><em>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("loading.application", array(), "general"), "html", null, true);
        echo "</em></div>
    <div class=\"ez-platformui-app pure is-menu-hidden is-navigation-hidden is-universaldiscovery-hidden is-confirmbox-hidden is-languageselectionbox-hidden\">
        <div class=\"ez-universaldiscovery-container\"></div>
        <div class=\"ez-confirmbox-container\"></div>
        <div class=\"ez-languageselectionbox-container\"></div>
        <div class=\"ez-navigation-container\"></div>
        <div class=\"ez-mainviews pure-g\">
            <div class=\"ez-menu-container pure-u\"></div>
            <div class=\"ez-view-container pure-u\"></div>
        </div>
        <div class=\"ez-notification-container\"></div>
        <div class=\"ez-errorview-container is-hidden pure-u\"></div>
    </div>

    <noscript>
        <p>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.disabled.required", array(), "general"), "html", null, true);
        echo "</p>
        <p><strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("javascript.enable", array(), "general"), "html", null, true);
        echo "</strong></p>
    </noscript>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ezplatformuiassets/vendors/yui3/build/yui/yui-min.js"), "html", null, true);
        echo "\"></script>
    <script>
        ";
        // line 50
        echo $this->env->getExtension('twig_yui_config_extension')->yuiConfigLoaderFunction("YUI.GlobalConfig");
        echo "

        var CKEDITOR_BASEPATH = ALLOYEDITOR_BASEPATH = \"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ezplatformuiassets/vendors/alloy-editor/dist/alloy-editor/"), "html", null, true);
        echo "\";

        YUI().use('ez-platformuiapp', function (Y) {
            var app = new Y.eZ.PlatformUIApp({
                    container: '.ez-platformui-app',
                    viewContainer: '.ez-view-container',
                    config: ";
        // line 58
        echo twig_jsonencode_filter((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
        echo ",
                    plugins: Y.eZ.PluginRegistry.getPlugins(Y.eZ.PlatformUIApp.NAME),
                });
            app.on('ready', function () {
                Y.one(Y.config.doc.documentElement).addClass('ez-platformui-app-ready');
            });
            app.render().dispatch();

            if ( !Y.config.doc.location.hash ) {
                Y.config.doc.location.hash = '#/login';
            }
        });
    </script>
</body>
</html>
";
        
        $__internal_b667d456e06f1fd4b2c945a6b85534c252135f69675408e03ebb25fe1e45d4a2->leave($__internal_b667d456e06f1fd4b2c945a6b85534c252135f69675408e03ebb25fe1e45d4a2_prof);

    }

    public function getTemplateName()
    {
        return "eZPlatformUIBundle:PlatformUI:shell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1104 => 58,  1095 => 52,  1090 => 50,  1085 => 48,  1080 => 46,  1076 => 45,  1058 => 30,  1037 => 11,  39 => 9,  35 => 8,  29 => 4,  25 => 2,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="{{ app.request.locale }}" class="ez-platformui-app-page">*/
/* {% trans_default_domain "general" %}*/
/* <head>*/
/*     <title>eZ Platform UI</title>*/
/*     <meta name="viewport" content="width=device-width"/>*/
/*     <meta charset="utf-8"/>*/
/* {% stylesheets '$css.files;ez_platformui$' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}"/>*/
/* {% endstylesheets %}*/
/*     <style>*/
/*         .ez-loading-message {*/
/*             display: none;*/
/*         }*/
/* */
/*         .yui3-js-enabled .ez-loading-message {*/
/*             font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
/*             font-size: 40px;*/
/*             margin-top: 50px;*/
/*             text-align: center;*/
/*             display: block;*/
/*             color: #888;*/
/*         }*/
/*         .ez-platformui-app-ready .ez-loading-message {*/
/*             display: none;*/
/*         }*/
/*     </style>*/
/* </head>*/
/* <body class="ez-platformui-app-body yui3-skin-platformui">*/
/*     <div class="ez-loading-message"><em>{{ 'loading.application'|trans }}</em></div>*/
/*     <div class="ez-platformui-app pure is-menu-hidden is-navigation-hidden is-universaldiscovery-hidden is-confirmbox-hidden is-languageselectionbox-hidden">*/
/*         <div class="ez-universaldiscovery-container"></div>*/
/*         <div class="ez-confirmbox-container"></div>*/
/*         <div class="ez-languageselectionbox-container"></div>*/
/*         <div class="ez-navigation-container"></div>*/
/*         <div class="ez-mainviews pure-g">*/
/*             <div class="ez-menu-container pure-u"></div>*/
/*             <div class="ez-view-container pure-u"></div>*/
/*         </div>*/
/*         <div class="ez-notification-container"></div>*/
/*         <div class="ez-errorview-container is-hidden pure-u"></div>*/
/*     </div>*/
/* */
/*     <noscript>*/
/*         <p>{{ 'javascript.disabled.required'|trans }}</p>*/
/*         <p><strong>{{ 'javascript.enable'|trans }}</strong></p>*/
/*     </noscript>*/
/*     <script src="{{ asset( "bundles/ezplatformuiassets/vendors/yui3/build/yui/yui-min.js" ) }}"></script>*/
/*     <script>*/
/*         {{ ez_platformui_yui_config( "YUI.GlobalConfig" ) }}*/
/* */
/*         var CKEDITOR_BASEPATH = ALLOYEDITOR_BASEPATH = "{{ asset("bundles/ezplatformuiassets/vendors/alloy-editor/dist/alloy-editor/") }}";*/
/* */
/*         YUI().use('ez-platformuiapp', function (Y) {*/
/*             var app = new Y.eZ.PlatformUIApp({*/
/*                     container: '.ez-platformui-app',*/
/*                     viewContainer: '.ez-view-container',*/
/*                     config: {{ parameters|json_encode|raw }},*/
/*                     plugins: Y.eZ.PluginRegistry.getPlugins(Y.eZ.PlatformUIApp.NAME),*/
/*                 });*/
/*             app.on('ready', function () {*/
/*                 Y.one(Y.config.doc.documentElement).addClass('ez-platformui-app-ready');*/
/*             });*/
/*             app.render().dispatch();*/
/* */
/*             if ( !Y.config.doc.location.hash ) {*/
/*                 Y.config.doc.location.hash = '#/login';*/
/*             }*/
/*         });*/
/*     </script>*/
/* </body>*/
/* </html>*/
/* */
