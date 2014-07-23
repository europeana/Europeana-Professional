<?php

/* _aside.twig */
class __TwigTemplate_e6da8b1a71a3328a092d1cb0e74bd14939d9091f43e5c4992a12b75edf880b3c extends Twig_Template
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
        echo "<!-- Sidebar -->

<aside class=\"large-4 columns\">

    <div class=\"panel\">
        ";
        // line 8
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['about'] =         $template_storage->getContent("page/about", array() );
        // line 9
        echo "
        ";
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title", array(), "any", true, true)) {
            // line 13
            echo "
            <h5>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title"), "html", null, true);
            echo "</h5>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "teaser"), "html", null, true);
            echo "

            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "link"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Read more");
            echo " &raquo;</a>

        ";
        } else {
            // line 20
            echo "
            <h5>";
            // line 21
            echo $this->env->getExtension('Bolt')->trans("Alas, no about!");
            echo "</h5>

            <p>";
            // line 23
            echo $this->env->getExtension('Bolt')->trans("If there was a Page with 'about' for a slug, it would've been shown here. But there isn't one, so that's why you're seeing this placeholder.");
            echo "</p>

        ";
        }
        // line 26
        echo "
    </div>

    ";
        // line 37
        echo "
    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 39
            echo "
        ";
            // line 40
            $template_storage = new Bolt\Storage($context['app']);
            $context['records'] =             $template_storage->getContent(($this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "slug") . "/latest/5"), array() );
            // line 41
            echo "
        <h5>";
            // line 42
            echo $this->env->getExtension('Bolt')->trans("Recent %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "name")));
            echo "</h5>
        <ul>
            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 45
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
                echo "</a></li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 47
                echo "                <li>";
                echo $this->env->getExtension('Bolt')->trans("No recent %contenttype%.", array("%contenttype%" => $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "singular_name")));
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </ul>
        <p><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "slug"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("%contenttypes% overview", array("%contenttypes%" => $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "name")));
            echo " &raquo;</a></p>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "

</aside>

<!-- End Sidebar -->
";
    }

    public function getTemplateName()
    {
        return "_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  120 => 49,  88 => 41,  85 => 40,  75 => 37,  70 => 26,  64 => 23,  56 => 20,  43 => 15,  36 => 13,  33 => 12,  151 => 52,  144 => 50,  142 => 49,  131 => 46,  128 => 44,  124 => 42,  119 => 39,  103 => 37,  96 => 44,  92 => 33,  87 => 30,  80 => 28,  63 => 21,  61 => 20,  58 => 19,  54 => 17,  48 => 17,  37 => 9,  28 => 5,  24 => 3,  29 => 6,  23 => 3,  133 => 47,  116 => 9,  113 => 8,  106 => 5,  99 => 36,  91 => 42,  74 => 2,  62 => 1,  39 => 14,  135 => 63,  129 => 61,  122 => 41,  118 => 57,  110 => 51,  107 => 50,  89 => 39,  82 => 39,  76 => 26,  71 => 25,  60 => 16,  45 => 13,  42 => 19,  34 => 5,  26 => 8,  22 => 2,  206 => 94,  199 => 89,  196 => 88,  187 => 80,  184 => 79,  171 => 72,  164 => 70,  161 => 69,  154 => 14,  150 => 12,  147 => 63,  145 => 62,  141 => 60,  136 => 54,  132 => 58,  127 => 60,  121 => 48,  115 => 45,  111 => 47,  108 => 43,  104 => 41,  101 => 45,  95 => 36,  93 => 35,  90 => 32,  84 => 32,  78 => 38,  72 => 28,  69 => 24,  66 => 22,  59 => 21,  55 => 15,  52 => 19,  50 => 15,  47 => 17,  41 => 11,  38 => 14,  35 => 8,  32 => 7,  30 => 9,  21 => 2,  19 => 1,);
    }
}
