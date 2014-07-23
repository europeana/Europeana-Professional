<?php

/* dashboard-activity.twig */
class __TwigTemplate_4d73ae475fb8ea519e65ab9d14c5d2eed48b23b8b58b73f3b957083bc66ed67e extends Twig_Template
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
        $context["pretty"] = $this->env->loadTemplate("_sub_pretty.twig");
        // line 2
        echo "
<section class=\"news\">
    <h2>";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("Latest activity");
        echo "</h2>
    <ul class='activity'>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) ? $context["activity"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 7
            echo "    ";
            if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"), array(), "any", true, true)) {
                // line 8
                echo "        ";
                $context["userlink"] = $context["pretty"]->getuserlink($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username")));
                // line 9
                echo "    ";
            } else {
                // line 10
                echo "        ";
                $context["userlink"] = $this->env->getExtension('Bolt')->trans("unknown");
                // line 11
                echo "    ";
            }
            // line 12
            echo "    <li>
        ";
            // line 13
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "save content")) {
                // line 14
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "contenttypes"), "method", false, true), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "contenttype"), array(), "array", true, true)) {
                    // line 15
                    echo "                ";
                    $context["contenttype"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "contenttype"), array(), "array");
                    // line 16
                    echo "                ";
                    $context["contenttype_display_name"] = $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name");
                    // line 17
                    echo "                ";
                    $context["content_display_name"] = $context["pretty"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "content_id"));
                    // line 18
                    echo "            ";
                } else {
                    // line 19
                    echo "                ";
                    $context["contenttype_display_name"] = $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "contenttype");
                    // line 20
                    echo "                ";
                    $context["content_display_name"] = $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message");
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "
            ";
                // line 23
                echo $this->env->getExtension('Bolt')->trans("Saved");
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["contenttype_display_name"]) ? $context["contenttype_display_name"] : null), "html", null, true);
                echo "
            \"<strong>";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["content_display_name"]) ? $context["content_display_name"] : null), "html", null, true);
                echo "</strong>\" ";
                echo $this->env->getExtension('Bolt')->trans("by");
                echo " <em>";
                echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                echo "</em>
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "login")) {
                // line 26
                echo "            <em>";
                echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                echo "</em> ";
                echo $this->env->getExtension('Bolt')->trans("logged in");
                echo "
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "logout")) {
                // line 28
                echo "            <em>";
                echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                echo "</em> ";
                echo $this->env->getExtension('Bolt')->trans("logged out");
                echo "
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "fixme")) {
                // line 30
                echo "            <b>";
                echo $this->env->getExtension('Bolt')->trans("Fixme:");
                echo "</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code") == "user")) {
                // line 32
                echo "            <b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "</b> ";
                echo $this->env->getExtension('Bolt')->trans("by");
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["userlink"]) ? $context["userlink"] : null), "html", null, true);
                echo "
        ";
            } else {
                // line 34
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
            }
            // line 36
            echo "        <small>(<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
            echo "</time>)</small>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </ul>

    <p>&nbsp;<a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("activitylog");
        echo "\" class=\"morelink\">";
        echo $this->env->getExtension('Bolt')->trans("more activity");
        echo " »</a></p>

</section>

";
    }

    public function getTemplateName()
    {
        return "dashboard-activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  136 => 36,  130 => 34,  120 => 32,  104 => 28,  96 => 26,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  63 => 17,  57 => 15,  54 => 14,  52 => 13,  49 => 12,  46 => 11,  40 => 9,  37 => 8,  30 => 6,  25 => 4,  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 95,  245 => 92,  228 => 88,  223 => 86,  218 => 85,  212 => 83,  210 => 82,  205 => 81,  199 => 80,  196 => 79,  179 => 78,  171 => 75,  161 => 68,  152 => 61,  145 => 52,  140 => 50,  132 => 45,  128 => 44,  121 => 40,  113 => 34,  92 => 29,  87 => 24,  81 => 23,  79 => 25,  67 => 23,  64 => 22,  47 => 21,  28 => 5,  24 => 3,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 57,  164 => 56,  159 => 53,  157 => 52,  154 => 41,  137 => 50,  133 => 48,  129 => 46,  123 => 45,  117 => 42,  112 => 30,  109 => 40,  105 => 39,  102 => 38,  97 => 31,  91 => 34,  85 => 31,  80 => 30,  77 => 29,  73 => 24,  66 => 18,  62 => 22,  60 => 16,  56 => 19,  51 => 16,  45 => 14,  43 => 10,  39 => 12,  34 => 7,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
