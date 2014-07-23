<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_feee6b2027c3ccb60a2875500b781fc7a9ed3b471eeabef3c94db3819acb65c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/ico;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABMLAAATCwAAAAAAAAAAAAAAAAAAAAAAADIvMQAyLzEIMi8xSzEuMKoyLzHkMi8x/TIvMf0yLzHlMi8xrDIvMU4yLzEJMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEYMS4wkTMwMu45Njj/MS4w/zEuMP8yLzH/Mi8x/zIvMf8yLzHvMi8xlDIvMRkyLzEAAAAAADIvMQAyLzEXMS4wrTk2OPyVk5T7kI6P/nl3ef8+Oz3/MS4w/zIvMf8yLzH/Mi8x/zIvMf4yLzGxMi8xGjIvMQAyLzEGMi8xkDEuMP4/PD79wcDA+oB+gP6Ni4z/paOk/zk2OP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMZQyLzEIMi8xSTIvMewyLzH/MS4w/z06PP81MjT+TktN/93c3f97eXv/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHuMi8xTzIvMaUyLzH/Mi8x/0lHSf9kYmP/XFpb/zs4Ov/DwsL+ycjI/zs4Ov8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMawyLzHfMC0v/1tYWv+opqf/YV5g/8bFxf96eHn+m5qb/u7u7v9WVFX/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHkMi8x+jAtL/9iYGH/mZiZ/2dlZv/p6On/oJ+g/np4ev/6+vr/dXN1/y0qLP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/DIvMfoyLzH/MzAy/0A+QP7JyMj85eXl/1tYWv9XVVf/8fDx/6qpqv9ZV1j/Q0BC/zIvMf8yLzH/Mi8x/zIvMfwyLzHeMi8x/zEuMP8/PD762dnZ9JWTlP81MjT/ZmRm/+Dg4P/DwsP/YV5g/6Wkpf9BPkD/MS4w/zIvMf8yLzHjMi8xozIvMf8yLzH/Mi8x/nZ0dv2amJn4dXN0+V5bXf+Pjo//0tLS/0hFR/9vbG7/Ozg6/zEuMP8yLzH/Mi8xqTIvMUcyLzHrMi8x/zIvMf8xLjD/Ozg6/Do3OfwwLS//REFD/728vP9nZWb/TktN/4mIif05Nzn/Mi8x7jMwMkwyLzEGMi8xjDIvMf4yLzH/Mi8x/zIvMf8yLzH/Mi8x/zAtL/9XVFb/goGC+Hx6e+6qqanwOzg6/DMwMpJDQEIIMi8xADIvMRUyLzGrMi8x/jIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w/zg2N/xBPkD3OTY4/DIvMa8yLzEYMi8xAAAAAAAyLzEAMi8xGDIvMY0yLzHqMi8x/zIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w7DEuMJEyLzEaMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEGMi8xQzIvMZ4yLzHdMi8x+jIvMfoyLzHeMi8xoDIvMUUyLzEGMi8xAAAAAAAAAAAA4AcAAMADAACAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAADAAwAA4AcAAA==\">
        <style>
            ";
        // line 9
        $this->env->loadTemplate("@WebProfiler/Profiler/body.css.twig")->display($context);
        // line 10
        echo "        </style>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "        <style>
            ";
        // line 17
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 18
        echo "        </style>
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Profiler";
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "            <style>
                ";
        // line 13
        $this->env->loadTemplate("@WebProfiler/Profiler/profiler.css.twig")->display($context);
        // line 14
        echo "            </style>
        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  72 => 13,  69 => 12,  54 => 22,  45 => 17,  42 => 16,  40 => 11,  37 => 10,  22 => 1,  164 => 58,  162 => 57,  157 => 56,  145 => 46,  139 => 45,  123 => 41,  120 => 40,  111 => 38,  108 => 37,  101 => 33,  80 => 24,  74 => 14,  66 => 11,  60 => 6,  55 => 16,  52 => 21,  43 => 9,  41 => 8,  35 => 9,  32 => 4,  396 => 175,  387 => 172,  383 => 171,  380 => 170,  375 => 169,  373 => 168,  365 => 162,  363 => 161,  356 => 157,  349 => 153,  342 => 149,  335 => 145,  328 => 141,  321 => 137,  314 => 133,  307 => 129,  295 => 119,  289 => 116,  285 => 114,  282 => 113,  276 => 110,  272 => 108,  269 => 107,  263 => 104,  259 => 102,  257 => 101,  254 => 100,  249 => 98,  246 => 32,  237 => 95,  234 => 94,  232 => 93,  223 => 86,  220 => 85,  212 => 79,  209 => 78,  204 => 75,  201 => 74,  196 => 71,  190 => 69,  182 => 67,  180 => 66,  175 => 63,  167 => 60,  163 => 58,  160 => 57,  154 => 54,  150 => 52,  147 => 51,  141 => 48,  137 => 46,  134 => 45,  131 => 42,  128 => 43,  125 => 42,  119 => 39,  115 => 39,  112 => 37,  110 => 36,  106 => 36,  102 => 34,  99 => 33,  96 => 31,  87 => 29,  84 => 28,  81 => 27,  75 => 24,  57 => 15,  53 => 13,  50 => 14,  47 => 18,  39 => 7,  36 => 6,  33 => 4,  30 => 3,  122 => 52,  117 => 49,  109 => 46,  105 => 44,  103 => 43,  98 => 32,  92 => 29,  90 => 31,  83 => 25,  78 => 33,  73 => 30,  71 => 29,  68 => 20,  64 => 19,  58 => 24,  56 => 23,  51 => 21,  46 => 18,  44 => 17,  29 => 6,  26 => 3,);
    }
}
