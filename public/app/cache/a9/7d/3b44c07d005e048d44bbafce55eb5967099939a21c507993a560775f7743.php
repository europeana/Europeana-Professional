<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a97d3b44c07d005e048d44bbafce55eb5967099939a21c507993a560775f7743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  202 => 94,  199 => 93,  176 => 86,  173 => 85,  165 => 83,  158 => 80,  136 => 71,  116 => 57,  62 => 27,  28 => 3,  417 => 143,  411 => 140,  407 => 138,  405 => 137,  398 => 136,  395 => 135,  388 => 134,  384 => 132,  382 => 131,  377 => 129,  374 => 128,  368 => 126,  362 => 124,  359 => 123,  350 => 120,  347 => 119,  341 => 117,  338 => 116,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 108,  262 => 93,  221 => 80,  207 => 76,  186 => 72,  183 => 71,  177 => 69,  161 => 58,  159 => 57,  135 => 46,  133 => 45,  114 => 36,  95 => 27,  38 => 7,  188 => 90,  185 => 75,  174 => 74,  171 => 73,  153 => 77,  138 => 47,  121 => 50,  118 => 49,  113 => 48,  104 => 31,  49 => 14,  27 => 3,  91 => 25,  88 => 24,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 127,  367 => 155,  361 => 152,  358 => 151,  355 => 150,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  315 => 111,  312 => 130,  309 => 129,  302 => 125,  296 => 121,  293 => 107,  290 => 119,  288 => 118,  283 => 115,  281 => 98,  274 => 96,  265 => 105,  255 => 101,  253 => 100,  248 => 97,  241 => 93,  235 => 89,  229 => 87,  227 => 86,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  203 => 73,  197 => 69,  194 => 68,  191 => 77,  189 => 66,  184 => 63,  178 => 59,  172 => 68,  170 => 84,  166 => 54,  155 => 55,  152 => 54,  144 => 42,  127 => 35,  94 => 21,  82 => 21,  76 => 34,  70 => 15,  67 => 24,  61 => 15,  79 => 18,  72 => 17,  69 => 12,  54 => 22,  45 => 9,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 70,  162 => 57,  157 => 56,  145 => 74,  139 => 45,  123 => 61,  120 => 38,  111 => 47,  108 => 33,  101 => 30,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 24,  52 => 12,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  396 => 175,  387 => 172,  383 => 171,  380 => 158,  375 => 169,  373 => 168,  365 => 125,  363 => 153,  356 => 122,  349 => 153,  342 => 149,  335 => 145,  328 => 113,  321 => 135,  314 => 133,  307 => 128,  295 => 119,  289 => 116,  285 => 100,  282 => 113,  276 => 111,  272 => 108,  269 => 107,  263 => 104,  259 => 103,  257 => 101,  254 => 100,  249 => 92,  246 => 136,  237 => 91,  234 => 90,  232 => 89,  223 => 86,  220 => 85,  212 => 79,  209 => 78,  204 => 75,  201 => 74,  196 => 92,  190 => 69,  182 => 87,  180 => 70,  175 => 58,  167 => 71,  163 => 82,  160 => 57,  154 => 54,  150 => 52,  147 => 75,  141 => 73,  137 => 46,  134 => 54,  131 => 42,  128 => 42,  125 => 41,  119 => 39,  115 => 39,  112 => 37,  110 => 36,  106 => 51,  102 => 41,  99 => 23,  96 => 37,  87 => 41,  84 => 40,  81 => 27,  75 => 18,  57 => 15,  53 => 13,  50 => 22,  47 => 21,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  122 => 52,  117 => 37,  109 => 52,  105 => 25,  103 => 43,  98 => 45,  92 => 43,  90 => 42,  83 => 33,  78 => 19,  73 => 33,  71 => 29,  68 => 30,  64 => 23,  58 => 25,  56 => 23,  51 => 21,  46 => 13,  44 => 20,  29 => 6,  26 => 3,);
    }
}
