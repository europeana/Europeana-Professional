<?php

/* _sub_stack.twig */
class __TwigTemplate_a7227fc0e2e92703400f3efc69f4944edf4cb45215c33caf9d43448e6492593c extends Twig_Template
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
        if ((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack"))) {
            // line 2
            echo "    ";
            if (((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")) == "full")) {
                // line 3
                echo "
    <section>
        <h2><i class=\"icon-paper-clip\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt')->trans("Files on the stack");
                echo "</h2>

        <div id=\"protostack\">

            <div class=\"stackitem image info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
                <img src=\"\" width=\"100\" height=\"100\">
            </div>

            <div class=\"stackitem other info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
                <strong>HTML</strong>
                <small>index.html</small>
            </div>

        </div>

        <div id=\"stackholder\">
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 22
                    echo "
            <div class=\"stackitem item-";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type"), "html", null, true);
                    echo " info-pop\"
                 data-placement=\"bottom\" data-html=\"true\" data-title=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "basename"), "html", null, true);
                    echo "\" data-content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "info"), "html", null, true);
                    echo "\">
                ";
                    // line 25
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "image")) {
                        // line 26
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filepath"), 100, 100), "html", null, true);
                        echo "\" width=\"100\" height=\"100\">
                ";
                    } else {
                        // line 28
                        echo "                   <strong>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extension")), "html", null, true);
                        echo "</strong>
                   <small>";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "basename"), "html", null, true);
                        echo "</small>
                ";
                    }
                    // line 31
                    echo "            </div>

            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </div>


        <div class=\"btn-group\">
            <span class=\"btn fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 40
                echo $this->env->getExtension('Bolt')->trans("Upload");
                echo "</span>
                <input id=\"fileupload-stack\"
                       type=\"file\"
                       name=\"fileupload-stack[]\"
                       data-url=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
                echo "classes/upload/\"
                       accept=\".";
                // line 45
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["filetypes"]) ? $context["filetypes"] : $this->getContext($context, "filetypes")), ",."), "html", null, true);
                echo "\">
            </span>
        </div>

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-stack\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "async"), "html", null, true);
                echo "browse/files?key=stack\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 52
                echo $this->env->getExtension('Bolt')->trans("Select");
                echo "
            </a>
        </div>

        ";
                // line 61
                echo "        
        <!-- Modal \"select from server\"  -->
        <div class=\"modal hide modal-wide\" id=\"selectModal-stack\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

            <div class=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 68
                echo $this->env->getExtension('Bolt')->trans("Cancel");
                echo "</button>
            </div>
        </div>

    </section>

    ";
            } elseif (((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")) == "minimal")) {
                // line 75
                echo "
        <h2><i class=\"icon-paper-clip\"></i> ";
                // line 76
                echo $this->env->getExtension('Bolt')->trans("Files on the stack");
                echo "</h2>
        <div id=\"stackholder\">
            ";
                // line 78
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 79
                    echo "
                <div class=\"stackitem stackitem-wide item-";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type"), "html", null, true);
                    echo "\">
                    <a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "paths"), "files"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filepath"), "html", null, true);
                    echo "\" class=\"filebrowserCallbackLink\">
                    ";
                    // line 82
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "image")) {
                        // line 83
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filepath"), 100, 100), "html", null, true);
                        echo "\" width=\"100\" height=\"100\">
                    ";
                    } else {
                        // line 85
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extension")), "html", null, true);
                        echo "</strong>
                        <small>";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "basename"), "html", null, true);
                        echo "</small>
                    ";
                    }
                    // line 88
                    echo "                    </a>
                </div>

            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "        </div>

    ";
            } elseif (((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")) == "list")) {
                // line 95
                echo "
        <ul>
        ";
                // line 97
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 98
                    echo "            <li>
                <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "paths"), "files"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filepath"), "html", null, true);
                    echo "\" class=\"filebrowserCallbackLink\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "basename"), "html", null, true);
                    echo "
                    <small>(";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filesize"), "html", null, true);
                    // line 101
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "imagesize")) {
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "imagesize"), "html", null, true);
                        echo " px";
                    }
                    echo ")</small></a>
            </li>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "        </ul>

    ";
            }
            // line 108
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 108,  284 => 105,  270 => 101,  268 => 100,  254 => 97,  250 => 95,  245 => 92,  228 => 88,  218 => 85,  210 => 82,  205 => 81,  196 => 79,  179 => 78,  174 => 76,  171 => 75,  161 => 68,  152 => 61,  145 => 52,  140 => 50,  113 => 34,  97 => 31,  79 => 25,  64 => 22,  47 => 21,  24 => 3,  297 => 51,  294 => 50,  282 => 49,  267 => 44,  261 => 99,  258 => 98,  247 => 40,  232 => 37,  229 => 36,  226 => 35,  223 => 86,  212 => 83,  166 => 27,  141 => 23,  129 => 19,  127 => 18,  124 => 17,  121 => 40,  109 => 15,  76 => 9,  63 => 6,  61 => 5,  57 => 4,  31 => 30,  22 => 8,  175 => 50,  169 => 28,  162 => 45,  159 => 44,  156 => 43,  139 => 38,  131 => 36,  122 => 34,  102 => 28,  98 => 27,  92 => 29,  88 => 25,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  45 => 3,  43 => 11,  39 => 9,  27 => 5,  148 => 53,  146 => 52,  137 => 50,  135 => 21,  132 => 45,  128 => 44,  126 => 44,  107 => 40,  103 => 39,  100 => 38,  94 => 11,  91 => 33,  84 => 31,  82 => 30,  75 => 28,  73 => 24,  67 => 23,  58 => 19,  50 => 16,  46 => 14,  42 => 12,  40 => 48,  37 => 39,  33 => 7,  29 => 6,  25 => 14,  199 => 80,  190 => 59,  185 => 31,  178 => 52,  172 => 51,  168 => 50,  164 => 46,  158 => 46,  155 => 26,  149 => 43,  147 => 41,  142 => 40,  138 => 22,  133 => 37,  123 => 42,  119 => 33,  110 => 31,  96 => 12,  93 => 23,  90 => 10,  87 => 28,  83 => 24,  81 => 26,  78 => 18,  60 => 20,  55 => 18,  53 => 17,  48 => 10,  34 => 32,  32 => 8,  28 => 5,  21 => 2,  19 => 1,);
    }
}
