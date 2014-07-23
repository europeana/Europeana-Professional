<?php

/* _footer.twig */
class __TwigTemplate_eef4436d27b4dd086a9e6208124119f6dda3e3ca91daa062111bf31dd6862cb9 extends Twig_Template
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
    </div><!-- /container-fluid -->
</div> <!-- /container -->

<br><br>

<footer id=\"bolt-footer\" class=\"hidden-phone\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "general/branding/provided_by/0"), "method")) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("Provided by:");
            echo "
        <a href=\"mailto:";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "general/branding/provided_by/0"), "method"), "html", null, true);
            echo "\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "general/branding/provided_by/1"), "method"), "html", null, true);
            echo "
        </a> -
    ";
        }
        // line 14
        echo "    <i class=\"icon-cog\"></i> <b>Bolt ";
        echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : $this->getContext($context, "bolt_version")), "html", null, true);
        echo "</b>: ";
        echo $this->env->getExtension('Bolt')->trans("Sophisticated, lightweight & simple CMS");
        echo " -
    <i class=\"icon-heart\"></i > <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("About");
        echo "</a> &ndash;
    <i class=\"icon-external-link\"> </i><a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
</footer>

</body>

<script>
    var path = \"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "bolt"), "html", null, true);
        echo "\"; var asyncpath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "async"), "html", null, true);
        echo "\"; var apppath = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "\";
    var wysiwyg = {
       images: ";
        // line 24
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/images"), "method")), "html", null, true);
        echo ",
       tables: ";
        // line 25
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/tables"), "method")), "html", null, true);
        echo ",
       anchor: ";
        // line 26
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/anchor"), "method")), "html", null, true);
        echo ",
       fontcolor: ";
        // line 27
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "html", null, true);
        echo ",
       align: ";
        // line 28
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/align"), "method")), "html", null, true);
        echo ",
       subsuper: ";
        // line 29
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "html", null, true);
        echo ",
       embed: ";
        // line 30
        echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/embed"), "method")), "html", null, true);
        echo ",
       ";
        // line 31
        if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/ck"), "method"))) {
            echo "ck: ";
            echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/ck"), "method"));
            echo ",";
        }
        // line 32
        echo "       ";
        if (twig_test_iterable($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) {
            echo "filebrowser: ";
            echo twig_jsonencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "general/wysiwyg/filebrowser"), "method"));
        } else {
            echo "filebrowser: false";
        }
        // line 33
        echo "       };
</script>

</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  107 => 32,  89 => 28,  77 => 25,  64 => 22,  39 => 11,  106 => 32,  102 => 30,  93 => 29,  80 => 23,  67 => 17,  58 => 15,  45 => 14,  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 48,  145 => 47,  134 => 44,  125 => 28,  111 => 27,  108 => 26,  100 => 29,  95 => 22,  90 => 21,  85 => 27,  81 => 26,  76 => 21,  73 => 24,  50 => 12,  42 => 10,  23 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 45,  142 => 46,  137 => 45,  132 => 40,  128 => 39,  124 => 38,  119 => 35,  114 => 34,  110 => 33,  96 => 28,  88 => 26,  84 => 24,  79 => 23,  74 => 20,  71 => 19,  61 => 17,  56 => 15,  48 => 11,  40 => 10,  31 => 8,  65 => 24,  63 => 18,  54 => 14,  52 => 15,  41 => 8,  28 => 8,  24 => 3,  21 => 2,  19 => 1,  140 => 7,  138 => 6,  135 => 5,  131 => 33,  127 => 48,  105 => 25,  101 => 31,  97 => 30,  92 => 27,  87 => 20,  66 => 20,  49 => 19,  44 => 12,  37 => 7,  35 => 10,  32 => 6,  30 => 9,  25 => 4,  22 => 2,  20 => 1,);
    }
}
