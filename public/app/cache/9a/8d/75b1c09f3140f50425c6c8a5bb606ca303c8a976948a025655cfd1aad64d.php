<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_9a8d75b1c09f3140f50425c6c8a5bb606ca303c8a976948a025655cfd1aad64d extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  62 => 24,  46 => 14,  26 => 3,  115 => 33,  107 => 32,  89 => 28,  77 => 25,  64 => 22,  39 => 11,  106 => 32,  102 => 30,  93 => 29,  80 => 23,  67 => 17,  58 => 15,  45 => 14,  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 48,  145 => 47,  134 => 44,  125 => 28,  111 => 27,  108 => 26,  100 => 29,  95 => 22,  90 => 21,  85 => 27,  81 => 26,  76 => 21,  73 => 24,  50 => 15,  42 => 12,  23 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 45,  142 => 46,  137 => 45,  132 => 40,  128 => 39,  124 => 38,  119 => 35,  114 => 34,  110 => 33,  96 => 28,  88 => 26,  84 => 24,  79 => 29,  74 => 20,  71 => 19,  61 => 17,  56 => 15,  48 => 11,  40 => 10,  31 => 8,  65 => 24,  63 => 18,  54 => 14,  52 => 15,  41 => 8,  28 => 8,  24 => 2,  21 => 2,  19 => 1,  140 => 7,  138 => 6,  135 => 5,  131 => 33,  127 => 48,  105 => 25,  101 => 31,  97 => 30,  92 => 27,  87 => 20,  66 => 25,  49 => 19,  44 => 12,  37 => 7,  35 => 10,  32 => 6,  30 => 5,  25 => 4,  22 => 2,  20 => 1,);
    }
}
