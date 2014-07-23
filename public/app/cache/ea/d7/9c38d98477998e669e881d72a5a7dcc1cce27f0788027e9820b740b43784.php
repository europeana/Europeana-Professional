<?php

/* _footer.twig */
class __TwigTemplate_ead79c38d98477998e669e881d72a5a7dcc1cce27f0788027e9820b740b43784 extends Twig_Template
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
<!-- Footer -->
        <footer class=\"large-12 columns\">
            <hr />
            <div class=\"large-6 columns\">
                <p>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
                </p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list\">
                    ";
        // line 11
        echo $this->env->getExtension('Bolt')->menu($this->env);
        echo "
                </ul>
            </div>
        </footer>
    </div>
</div>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/jquery-2.1.0.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/foundation.min.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/modernizr.js\"></script>

    ";
        // line 24
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery.magnific-popup.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/magnific-popup.css\">

    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/app.js\"></script>

</body>
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
        return array (  67 => 27,  57 => 24,  44 => 18,  123 => 50,  120 => 49,  88 => 41,  85 => 40,  75 => 37,  70 => 26,  64 => 23,  56 => 20,  43 => 15,  36 => 13,  33 => 12,  151 => 52,  144 => 50,  142 => 49,  131 => 46,  128 => 44,  124 => 42,  119 => 39,  103 => 37,  96 => 44,  92 => 33,  87 => 30,  80 => 28,  63 => 21,  61 => 20,  58 => 19,  54 => 17,  48 => 19,  37 => 9,  28 => 5,  24 => 3,  29 => 6,  23 => 3,  133 => 47,  116 => 9,  113 => 8,  106 => 5,  99 => 36,  91 => 42,  74 => 2,  62 => 25,  39 => 14,  135 => 63,  129 => 61,  122 => 41,  118 => 57,  110 => 51,  107 => 50,  89 => 39,  82 => 39,  76 => 26,  71 => 25,  60 => 16,  45 => 13,  42 => 19,  34 => 11,  26 => 6,  22 => 2,  206 => 94,  199 => 89,  196 => 88,  187 => 80,  184 => 79,  171 => 72,  164 => 70,  161 => 69,  154 => 14,  150 => 12,  147 => 63,  145 => 62,  141 => 60,  136 => 54,  132 => 58,  127 => 60,  121 => 48,  115 => 45,  111 => 47,  108 => 43,  104 => 41,  101 => 45,  95 => 36,  93 => 35,  90 => 32,  84 => 32,  78 => 38,  72 => 28,  69 => 24,  66 => 22,  59 => 21,  55 => 15,  52 => 20,  50 => 15,  47 => 17,  41 => 11,  38 => 14,  35 => 8,  32 => 7,  30 => 9,  21 => 2,  19 => 1,);
    }
}
