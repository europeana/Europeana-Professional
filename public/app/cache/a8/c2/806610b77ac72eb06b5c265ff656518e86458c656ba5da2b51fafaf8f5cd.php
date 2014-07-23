<?php

/* _header_basic.twig */
class __TwigTemplate_a8c2806610b77ac72eb06b5c265ff656518e86458c656ba5da2b51fafaf8f5cd extends Twig_Template
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
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "
        ";
        // line 9
        if (array_key_exists("title", $context)) {
            echo "- ";
            echo twig_escape_filter($this->env, strip_tags((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        }
        // line 10
        echo "    </title>

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/jquery-1.10.2.min.js\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/underscore-min.js\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/backbone-min.js\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/jquery-ui-1.10.3.custom.min.js\"></script>

    ";
        // line 17
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true) && ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "locale") != "en")) && $this->env->getExtension('Bolt')->file_exists(((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "apppath") . "/view/js/i18n/datepicker-") . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "locale")) . ".js")))) {
            // line 18
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
            echo "view/js/i18n/datepicker-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "locale"), "html", null, true);
            echo ".js\"></script>
    ";
        }
        // line 20
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/css/smoothness/jquery-ui-1.10.3.custom.min.css\">

    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/jquery.plugins.js\"></script>

    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/css/bootstrap-responsive.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/css/font-awesome.min.css\">

    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/select2/select2.css\">
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/select2/select2.min.js\"></script>

    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/ckeditor/ckeditor.js\"></script>

    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/upload/jquery.iframe-transport.js\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload-ui.css\">

    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/moment.min.js\"></script>
    <script type=\"text/javascript\">
        moment.lang('";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "');
        var ckeditor_lang=\"";
        // line 45
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "\";
    </script>

    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/modernizr.custom.2.8.1.js\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/js/bolt.js\"></script>

    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/css/bolt.css\">

    <link rel=\"shortcut icon\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/img/favicon-bolt.ico\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/img/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-144x144.png\">

</head>
<body ";
        // line 61
        if (array_key_exists("class", $context)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\"";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_header_basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 61,  183 => 58,  179 => 57,  175 => 56,  171 => 55,  167 => 54,  162 => 52,  156 => 49,  152 => 48,  146 => 45,  142 => 44,  137 => 42,  132 => 40,  128 => 39,  124 => 38,  119 => 36,  114 => 34,  110 => 33,  96 => 28,  88 => 26,  84 => 25,  79 => 23,  74 => 21,  71 => 20,  61 => 17,  56 => 15,  48 => 13,  40 => 10,  31 => 8,  65 => 24,  63 => 18,  54 => 16,  52 => 14,  41 => 12,  28 => 4,  24 => 3,  21 => 2,  19 => 1,  140 => 7,  138 => 6,  135 => 5,  131 => 50,  127 => 48,  105 => 31,  101 => 30,  97 => 27,  92 => 27,  87 => 22,  66 => 20,  49 => 19,  44 => 12,  37 => 11,  35 => 9,  32 => 10,  30 => 5,  25 => 3,  22 => 2,  20 => 1,);
    }
}
