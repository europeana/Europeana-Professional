<?php

/* _sub_searchbox.twig */
class __TwigTemplate_71f5531f98b4a093948d5de9b76952f0a375c2d059fa1e79288c86909d56a001 extends Twig_Template
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
        echo "<li class=\"divider\"></li>
<li class=\"has-form\">
\t<form method=\"get\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "search\" id=\"searchform\" enctype=\"text/plain\">
  \t\t<div class=\"row collapse\">
    \t\t<div class=\"large-8 small-9 columns\">
        \t\t<input type=\"search\" value=\"";
        // line 6
        if (array_key_exists("search", $context)) {
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt')->trans("Search…");
        echo "\" name=\"search\">
        \t</div>
        \t<div class=\"large-4 small-3 columns\">
\t\t     \t<button type=\"submit\" class=\"alert button expand\">Search</button>
\t\t    </div>
  \t\t</div>
  </form>
</li>";
    }

    public function getTemplateName()
    {
        return "_sub_searchbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  133 => 10,  116 => 9,  113 => 8,  106 => 5,  99 => 4,  91 => 3,  74 => 2,  62 => 1,  39 => 18,  135 => 63,  129 => 61,  122 => 59,  118 => 57,  110 => 51,  107 => 50,  89 => 39,  82 => 34,  76 => 26,  71 => 23,  60 => 16,  45 => 13,  42 => 19,  34 => 5,  26 => 3,  22 => 17,  206 => 94,  199 => 89,  196 => 88,  187 => 80,  184 => 79,  171 => 72,  164 => 70,  161 => 69,  154 => 14,  150 => 12,  147 => 63,  145 => 62,  141 => 60,  136 => 59,  132 => 58,  127 => 60,  121 => 48,  115 => 45,  111 => 7,  108 => 43,  104 => 41,  101 => 47,  95 => 36,  93 => 35,  90 => 34,  84 => 32,  78 => 30,  72 => 28,  69 => 27,  66 => 22,  59 => 21,  55 => 15,  52 => 19,  50 => 14,  47 => 17,  41 => 15,  38 => 14,  35 => 13,  32 => 10,  30 => 4,  21 => 2,  19 => 1,);
    }
}
