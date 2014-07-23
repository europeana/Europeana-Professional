<?php

/* form_bolt_layout.twig */
class __TwigTemplate_7ab2720249ab33f51ab4583e7cdbabeb04c223ef86c39089ebe1c030830a9f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_errors', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 39
        echo "
";
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "error";
        }
        echo "\">
            <div class=\"controls\">
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_errors($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "            <span class=\"help-inline\">";
            echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"))), "html", null, true);
            // line 22
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        <fieldset class=\"checkbox\">
            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "                <div>
                    ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </fieldset>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_bolt_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  112 => 31,  99 => 27,  94 => 24,  64 => 9,  60 => 8,  30 => 15,  27 => 14,  106 => 32,  102 => 28,  97 => 28,  93 => 26,  80 => 23,  67 => 17,  58 => 15,  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 48,  145 => 47,  134 => 44,  131 => 33,  125 => 28,  111 => 27,  108 => 30,  100 => 29,  95 => 22,  90 => 21,  87 => 22,  85 => 19,  81 => 18,  76 => 16,  73 => 15,  50 => 12,  42 => 3,  25 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 45,  142 => 46,  137 => 45,  132 => 40,  128 => 36,  124 => 38,  119 => 33,  114 => 34,  110 => 33,  105 => 29,  101 => 30,  96 => 28,  92 => 27,  88 => 26,  84 => 18,  79 => 17,  74 => 20,  71 => 19,  61 => 17,  56 => 7,  48 => 5,  44 => 12,  40 => 10,  35 => 27,  31 => 8,  22 => 2,  65 => 24,  63 => 18,  54 => 14,  52 => 14,  41 => 8,  28 => 5,  24 => 3,  45 => 4,  37 => 39,  32 => 26,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
