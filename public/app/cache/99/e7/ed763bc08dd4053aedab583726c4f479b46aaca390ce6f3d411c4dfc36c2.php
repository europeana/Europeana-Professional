<?php

/* _header.twig */
class __TwigTemplate_99e7ed763bc08dd4053aedab583726c4f479b46aaca390ce6f3d411c4dfc36c2 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 12
        echo "    <title>
      ";
        // line 13
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title")), "html", null, true);
            echo " | ";
        }
        // line 14
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
      ";
        // line 15
        if (((!$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 16
        echo "    </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    ";
        // line 22
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/foundation.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/app.css\">

    ";
        // line 26
        echo "
</head>
<body>

";
        // line 34
        echo "
<div class=\"row\">
    <header>
        <nav class=\"top-bar\" data-topbar>
            <ul class=\"title-area\">
                <li class=\"name\"><h1><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</a></h1></li>
                <li class=\"toggle-topbar menu-icon\"><a href=\"#\"></a></li>
            </ul>

            <section class=\"top-bar-section\">
                <!-- Right Nav Section -->
                <ul class=\"right\">
                    ";
        // line 47
        echo "                    ";
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_sub_menu.twig");
        echo "

                    ";
        // line 50
        echo "                    ";
        $this->env->loadTemplate("_sub_searchbox.twig")->display($context);
        // line 51
        echo "                </ul>
            </section>
        </nav>

        <!-- Header bar -->
        <div class=\"headerphoto\">
            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "images/header_3.jpg\" alt=\"\" />
            ";
        // line 59
        echo "            <p><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</span>
                ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method")) {
            // line 61
            echo "                    <br><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method"), "html", null, true);
            echo "</small>
                ";
        }
        // line 63
        echo "            </p>
        </div>

        <!-- End header -->

    </header>
</div>



<div class=\"row\">
    <div class=\"container large-12 columns\">
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 63,  129 => 61,  122 => 59,  118 => 57,  110 => 51,  107 => 50,  89 => 39,  82 => 34,  76 => 26,  71 => 23,  60 => 16,  45 => 13,  42 => 12,  34 => 5,  26 => 3,  22 => 2,  206 => 94,  199 => 89,  196 => 88,  187 => 80,  184 => 79,  171 => 72,  164 => 70,  161 => 69,  154 => 65,  150 => 64,  147 => 63,  145 => 62,  141 => 60,  136 => 59,  132 => 58,  127 => 60,  121 => 48,  115 => 45,  111 => 44,  108 => 43,  104 => 41,  101 => 47,  95 => 36,  93 => 35,  90 => 34,  84 => 32,  78 => 30,  72 => 28,  69 => 27,  66 => 22,  59 => 21,  55 => 15,  52 => 19,  50 => 14,  47 => 17,  41 => 15,  38 => 14,  35 => 13,  32 => 10,  30 => 4,  21 => 2,  19 => 1,);
    }
}
