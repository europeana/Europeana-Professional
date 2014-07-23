<?php

/* @BoltProfiler/toolbar/bolt.html.twig */
class __TwigTemplate_6fe0013b1fa561a4bf2986cbe151c3744afd5ea7b170382c77e924b46c48e56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "<style>
.sf-minitoolbar {
    background-color: transparent;
    background-image: url(data:image/png;base64,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) ;
    background-size: 32px 32px;
    background-repeat: no-repeat;
}
.sf-minitoolbar img {
    border: 1px dashed #0F0;
    opacity: 0;
}
</style>

    ";
        // line 17
        ob_start();
        // line 18
        echo "        <img width=\"32\" height=\"32\" alt=\"Bolt\" style=\"width: 32px; height: 32px; margin-top: -2px;\"
            src=\"data:image/png;base64,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\">

        <span></span><strong>Bolt ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "version"), "html", null, true);
        echo "</strong></span>

        ";
        // line 23
        if ((!twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "versionname")))) {
            // line 24
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "versionname"), "html", null, true);
            echo "</span>
        ";
        }
        // line 26
        echo "
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
    ";
        // line 29
        ob_start();
        // line 30
        echo "
        <div class=\"sf-toolbar-info-piece\">

            <strong>Bolt - </strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "payoff"), "html", null, true);
        echo "<br>

            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "fullversion"), "html", null, true);
        echo " - ";
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "aboutlink");
        echo " - Visit <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a></strong> <br>

            ";
        // line 37
        if ((!twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "branding")))) {
            // line 38
            echo "                ";
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "branding");
            echo "
            ";
        }
        // line 40
        echo "
        </div>

        ";
        // line 43
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "editlink")) {
            // line 44
            echo "        <div class=\"sf-toolbar-info-piece\">
            <hr style=\"margin: 0;\">
            Edit: <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "editlink"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Bolt')->excerpt($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "edittitle"), 40), "(no title)"), "html", null, true);
            echo "</a>
        </div>
        ";
        }
        // line 49
        echo "

    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    public function getTemplateName()
    {
        return "@BoltProfiler/toolbar/bolt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 52,  117 => 49,  109 => 46,  105 => 44,  103 => 43,  98 => 40,  92 => 38,  90 => 37,  83 => 35,  78 => 33,  73 => 30,  71 => 29,  68 => 28,  64 => 26,  58 => 24,  56 => 23,  51 => 21,  46 => 18,  44 => 17,  29 => 4,  26 => 3,);
    }
}
