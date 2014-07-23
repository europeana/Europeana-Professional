<?php

/* _sub_pager.twig */
class __TwigTemplate_73f49ba703d1210580c9b0af3efa8e9dcf39c9bf1c0894150d8b2456a55d35c4 extends Twig_Template
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
        if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all")))) {
            // line 2
            echo "    ";
            $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all"), "filter")) . "&");
        } elseif (twig_in_filter("search", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all")))) {
            // line 4
            echo "    ";
            $context["filter"] = (("search=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all"), "search")) . "&");
        } elseif (twig_in_filter("q", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all")))) {
            // line 6
            echo "    ";
            $context["filter"] = (("q=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all"), "q")) . "&");
        } else {
            // line 8
            echo "    ";
            $context["filter"] = "";
        }
        // line 10
        echo "
";
        // line 11
        if (twig_in_filter("order", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all")))) {
            // line 12
            echo "    ";
            $context["order"] = (("order=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all"), "order")) . "&");
        } else {
            // line 14
            echo "    ";
            $context["order"] = "";
        }
        // line 16
        echo "
";
        // line 17
        $context["link"] = ((("?" . (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter"))) . (isset($context["order"]) ? $context["order"] : $this->getContext($context, "order"))) . "page=");
        // line 18
        echo "
";
        // line 19
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "totalpages") > 1)) {
            // line 20
            echo "<div class=\"pagination pagination-centered ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">
    <ul>
        <li><span>
    ";
            // line 24
            echo "    ";
            echo $this->env->getExtension('Bolt')->trans("Showing %pager_for% %from% - %to% of %count%", array("%pager_for%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "for"), "%from%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "showing_from"), "%to%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "showing_to"), "%count%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "count")));
            echo "
        </span></li>
";
            // line 27
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") > 1) && ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")) != "narrow"))) {
                // line 28
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") - 1), "html", null, true);
                echo "\"><i class=\"icon-angle-left\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 30
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") > ((isset($context["surr"]) ? $context["surr"] : $this->getContext($context, "surr")) + 1))) {
                // line 31
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo 1;
                echo "\"><i class=\"icon-double-angle-left\" style=\"font-weight: bold;\"></i> 1</a></li>
";
            }
            // line 33
            echo "
";
            // line 35
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") > ((isset($context["surr"]) ? $context["surr"] : $this->getContext($context, "surr")) + 2))) {
                // line 36
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 38
            echo "
";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->env->getExtension('Bolt')->max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") - (isset($context["surr"]) ? $context["surr"] : $this->getContext($context, "surr")))), $this->env->getExtension('Bolt')->min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") + (isset($context["surr"]) ? $context["surr"] : $this->getContext($context, "surr"))), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "totalpages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 40
                echo "    <li ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current"))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
";
            // line 44
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "totalpages") - (isset($context["surr"]) ? $context["surr"] : $this->getContext($context, "surr"))) - 1))) {
                // line 45
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 47
            echo "
";
            // line 49
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "totalpages") - (isset($context["surr"]) ? $context["surr"] : $this->getContext($context, "surr"))))) {
                // line 50
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "totalpages"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "totalpages"), "html", null, true);
                echo " <i class=\"icon-double-angle-right\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 52
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "totalpages")) && ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")) != "narrow"))) {
                // line 53
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current") + 1), "html", null, true);
                echo "\"><i class=\"icon-angle-right\" style=\"font-weight: bold;\"></i></a></li>
";
            }
            // line 55
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 53,  146 => 52,  137 => 50,  135 => 49,  132 => 47,  128 => 45,  126 => 44,  107 => 40,  103 => 39,  100 => 38,  94 => 35,  91 => 33,  84 => 31,  82 => 30,  75 => 28,  73 => 27,  67 => 24,  58 => 19,  50 => 16,  46 => 14,  42 => 12,  40 => 11,  37 => 10,  33 => 8,  29 => 6,  25 => 4,  199 => 65,  190 => 59,  185 => 57,  178 => 52,  172 => 51,  168 => 50,  164 => 49,  158 => 46,  155 => 55,  149 => 43,  147 => 42,  142 => 40,  138 => 39,  133 => 37,  123 => 42,  119 => 28,  110 => 26,  96 => 36,  93 => 23,  90 => 22,  87 => 21,  83 => 20,  81 => 19,  78 => 18,  60 => 20,  55 => 18,  53 => 17,  48 => 10,  34 => 9,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
