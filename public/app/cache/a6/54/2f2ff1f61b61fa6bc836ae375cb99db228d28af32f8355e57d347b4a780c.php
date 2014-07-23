<?php

/* dashboard-news.twig */
class __TwigTemplate_a6542f2ff1f61b61fa6bc836ae375cb99db228d28af32f8355e57d347b4a780c extends Twig_Template
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
        if ($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array(), "any", true, true)) {
            // line 2
            echo "    <section class=\"news\">
    <h2>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title"), "html", null, true);
            echo "</h2>
    ";
            // line 4
            echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "teaser");
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "dashboard-news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 60,  168 => 57,  164 => 56,  159 => 53,  157 => 52,  154 => 51,  137 => 50,  133 => 48,  129 => 46,  123 => 45,  117 => 42,  112 => 41,  109 => 40,  105 => 39,  102 => 38,  97 => 35,  91 => 34,  85 => 31,  80 => 30,  77 => 29,  73 => 28,  66 => 24,  62 => 22,  60 => 21,  56 => 19,  51 => 16,  45 => 14,  43 => 13,  39 => 12,  34 => 9,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
