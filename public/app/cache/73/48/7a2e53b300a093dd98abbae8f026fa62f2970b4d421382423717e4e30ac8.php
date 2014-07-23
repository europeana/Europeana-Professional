<?php

/* error.twig */
class __TwigTemplate_73487a2e53b300a093dd98abbae8f026fa62f2970b4d421382423717e4e30ac8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Bolt - Fatal error.");
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
        echo "view/css/bootstrap.min.css\" />
</head>
<body style=\"padding: 20px;\">

    <div style=\"max-width: 530px; margin: auto;\">

    <h1>";
        // line 12
        echo $this->env->getExtension('Bolt')->trans("Bolt - Fatal error.");
        echo "</h1>

    <ul>
        <li>";
        // line 15
        echo $this->env->getExtension('Bolt')->trans("Class:");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "</li>
        <li>";
        // line 16
        echo $this->env->getExtension('Bolt')->trans("Message:");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</li>
        <li>";
        // line 17
        echo $this->env->getExtension('Bolt')->trans("Code:");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "html", null, true);
        echo "</li>
    </ul>
    
    ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "general/debug"), "method") && (!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))))) {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "            ";
                if (($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "line", array(), "any", true, true) && $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "class", array(), "any", true, true))) {
                    // line 23
                    echo "                <p>
                    <strong>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "class"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "type"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "function"), "html", null, true);
                    echo "()</strong><br>
                    <em>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "file"), "html", null, true);
                    echo ", line ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "line"), "html", null, true);
                    echo "</em>
                    ";
                    // line 26
                    if ($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "args", array(), "any", true, true)) {
                        // line 27
                        echo "                        ";
                        echo $this->env->getExtension('Bolt')->printDump($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "args"));
                        echo "
                    ";
                    }
                    // line 29
                    echo "                </p>
            ";
                }
                // line 31
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    </div>
    <hr>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  107 => 32,  101 => 31,  97 => 29,  91 => 27,  89 => 26,  83 => 25,  77 => 24,  74 => 23,  71 => 22,  66 => 21,  64 => 20,  56 => 17,  50 => 16,  44 => 15,  38 => 12,  29 => 6,  25 => 5,  19 => 1,);
    }
}
