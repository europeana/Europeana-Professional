<?php

/* _sub_csrf_token.twig */
class __TwigTemplate_497744d07052bfa4b2b5fbf1018590b047b94b618e70efec70a63e2977564695 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->token(), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "_sub_csrf_token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 240,  509 => 233,  504 => 231,  486 => 216,  471 => 206,  467 => 205,  446 => 187,  434 => 182,  418 => 171,  396 => 151,  390 => 149,  380 => 147,  378 => 146,  369 => 140,  365 => 139,  361 => 138,  354 => 134,  347 => 130,  340 => 126,  334 => 123,  324 => 115,  318 => 113,  308 => 111,  306 => 110,  299 => 106,  292 => 102,  285 => 98,  278 => 93,  263 => 91,  259 => 90,  253 => 89,  249 => 88,  244 => 85,  229 => 83,  224 => 82,  222 => 81,  216 => 80,  212 => 79,  208 => 77,  199 => 76,  195 => 75,  187 => 74,  182 => 73,  180 => 72,  177 => 71,  167 => 63,  165 => 62,  161 => 61,  154 => 60,  150 => 59,  144 => 57,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 50,  116 => 42,  114 => 41,  106 => 40,  101 => 38,  96 => 37,  92 => 36,  86 => 34,  82 => 33,  76 => 30,  73 => 29,  71 => 28,  65 => 25,  58 => 21,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 11,  35 => 10,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
