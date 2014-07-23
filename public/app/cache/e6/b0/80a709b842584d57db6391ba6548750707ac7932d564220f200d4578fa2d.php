<?php

/* _messages.twig */
class __TwigTemplate_e6b080a709b842584d57db6391ba6548750707ac7932d564220f200d4578fa2d extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "has", array(0 => "info"), "method")) {
            // line 3
            echo "    <div class=\"alert alert-info\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 6
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "has", array(0 => "error"), "method")) {
            // line 12
            echo "    <div class=\"alert alert-error\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 15
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
";
        }
        // line 19
        echo "
";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "has", array(0 => "warning"), "method")) {
            // line 21
            echo "    <div class=\"alert alert-warning\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 24
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </div>
";
        }
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "has", array(0 => "success"), "method")) {
            // line 30
            echo "    <div class=\"alert alert-success\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 33
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  102 => 30,  93 => 26,  80 => 23,  67 => 17,  58 => 15,  45 => 10,  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 48,  145 => 47,  134 => 44,  125 => 28,  111 => 27,  108 => 26,  100 => 29,  95 => 22,  90 => 21,  85 => 19,  81 => 18,  76 => 21,  73 => 16,  50 => 12,  42 => 10,  23 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 45,  142 => 46,  137 => 45,  132 => 40,  128 => 39,  124 => 38,  119 => 35,  114 => 34,  110 => 33,  96 => 28,  88 => 26,  84 => 24,  79 => 23,  74 => 20,  71 => 19,  61 => 17,  56 => 15,  48 => 11,  40 => 10,  31 => 8,  65 => 24,  63 => 18,  54 => 14,  52 => 14,  41 => 8,  28 => 5,  24 => 3,  21 => 2,  19 => 1,  140 => 7,  138 => 6,  135 => 5,  131 => 33,  127 => 48,  105 => 25,  101 => 30,  97 => 28,  92 => 27,  87 => 20,  66 => 20,  49 => 19,  44 => 12,  37 => 7,  35 => 9,  32 => 6,  30 => 5,  25 => 4,  22 => 2,  20 => 1,);
    }
}
