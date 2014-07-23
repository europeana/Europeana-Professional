<?php

/* @BoltProfiler/toolbar/twig.html.twig */
class __TwigTemplate_7b3d100c54e2ebacf7cf5c2c8974cfd3d2d5536833549a75c6dc5777d65ec878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img height=\"28\" alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\"/>
            <span> Twig</span>
            <span class=\"sf-toolbar-status\">";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "
            ";
            // line 12
            if ((!twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "chosentemplate")))) {
                // line 13
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Primary template:</b>
                    <span>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "chosentemplate"), "html", null, true);
                echo "
                        ";
                // line 16
                if ((!twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templateerror")))) {
                    // line 17
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templateerror"), "html", null, true);
                    echo "
                        ";
                }
                // line 19
                echo "                    </span>
                </div>
            ";
            }
            // line 22
            echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Used templates:</b>
                    <span>
                        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates"));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 27
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "html", null, true);
                echo "<br>
                        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 29
                echo "                            None. (probably cached page)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </span>
            </div>

            ";
            // line 71
            echo "
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 73
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 74
            echo "    ";
        }
    }

    // line 77
    public function block_menu($context, array $blocks = array())
    {
        // line 78
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\" />
        </span>
        <strong>Twig</strong>
        <span class=\"count\">
            <span>";
        // line 84
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions")), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 89
    public function block_panel($context, array $blocks = array())
    {
        // line 90
        echo "    <h2>Twig Templates</h2>
    <table>
        <tr>
            <th>Template</th>
            <th>Parameters</th>
        </tr>
        ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates"));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 97
            echo "        <tr>
            <th>
                ";
            // line 99
            if ($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path")) {
                // line 100
                echo "                    <a href=\"";
                echo $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path"), 1);
                echo "\">
                        ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 104
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "html", null, true);
                echo "
                ";
            }
            // line 106
            echo "            </th>
            <td>
                ";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "parameters"));
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
            foreach ($context['_seq'] as $context["parameter"] => $context["metadata"]) {
                // line 109
                echo "                    ";
                if (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type") == "boolean")) {
                    // line 110
                    echo "                        ";
                    $context["value"] = (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value")) ? ("true") : ("false"));
                    // line 111
                    echo "                    ";
                } elseif (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type") == "string")) {
                    // line 112
                    echo "                        ";
                    $context["maxStrLength"] = 40;
                    // line 113
                    echo "                        ";
                    $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value");
                    // line 114
                    echo "                        ";
                    if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength")))) {
                        // line 115
                        echo "                            ";
                        $context["value"] = (twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength"))) . "…");
                        // line 116
                        echo "                        ";
                    }
                    // line 117
                    echo "                        ";
                    $context["value"] = (("\"" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "\"");
                    // line 118
                    echo "                    ";
                } else {
                    // line 119
                    echo "                        ";
                    $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value");
                    // line 120
                    echo "                    ";
                }
                // line 121
                echo "                    <code>
                        ";
                // line 122
                echo twig_escape_filter($this->env, (isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), "html", null, true);
                echo ": <em style=\"color: #aaa\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type"), "html", null, true);
                echo "</em>
                        <span style=\"color: #009E00\">";
                // line 123
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</span>
                    </code>
                    ";
                // line 125
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo "<br />";
                }
                // line 126
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['parameter'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </table>
    <br />
    <h2>Twig Extensions</h2>
    <table>
        <tr>
            <th>Extension</th>
            <th>Class</th>
        </tr>
        ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions"));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 139
            echo "            <tr>
                <th>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "class"), "html", null, true);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "    </table>

    <h2>Twig Tests available</h2>
    <table>
        <tr>
            <th>Test</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests"));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 154
            echo "            <tr>
                <th>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </table>

    <h2>Twig Filters available</h2>
    <table>
        <tr>
            <th>Filter</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 169
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters"));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 170
            echo "            <tr>
                <th>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "    </table>

    <h2>Twig Functions available</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 185
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions"));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 186
            echo "            <tr>
                <th>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "@BoltProfiler/toolbar/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 192,  421 => 189,  413 => 187,  410 => 186,  406 => 185,  360 => 160,  351 => 157,  336 => 153,  325 => 144,  316 => 141,  287 => 127,  273 => 126,  264 => 123,  252 => 120,  243 => 117,  240 => 116,  231 => 113,  228 => 112,  225 => 111,  219 => 109,  198 => 106,  192 => 104,  181 => 100,  179 => 99,  124 => 31,  149 => 56,  142 => 52,  132 => 49,  129 => 71,  107 => 37,  86 => 26,  65 => 15,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  258 => 122,  251 => 182,  93 => 27,  85 => 23,  77 => 20,  59 => 11,  34 => 5,  31 => 4,  810 => 529,  807 => 528,  796 => 521,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 479,  698 => 477,  694 => 470,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 416,  522 => 406,  517 => 404,  202 => 108,  199 => 93,  176 => 86,  173 => 85,  165 => 83,  158 => 80,  136 => 74,  116 => 57,  62 => 16,  28 => 3,  417 => 188,  411 => 140,  407 => 138,  405 => 137,  398 => 136,  395 => 176,  388 => 134,  384 => 132,  382 => 172,  377 => 129,  374 => 128,  368 => 126,  362 => 124,  359 => 123,  350 => 120,  347 => 156,  341 => 117,  338 => 116,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 138,  262 => 188,  221 => 80,  207 => 76,  186 => 101,  183 => 71,  177 => 69,  161 => 58,  159 => 57,  135 => 46,  133 => 73,  114 => 40,  95 => 27,  38 => 6,  188 => 90,  185 => 75,  174 => 74,  171 => 96,  153 => 57,  138 => 47,  121 => 43,  118 => 49,  113 => 48,  104 => 36,  49 => 11,  27 => 3,  91 => 25,  88 => 24,  63 => 18,  389 => 160,  386 => 173,  378 => 171,  371 => 169,  367 => 155,  361 => 152,  358 => 151,  355 => 150,  353 => 121,  345 => 147,  343 => 155,  340 => 154,  334 => 141,  331 => 140,  326 => 138,  315 => 111,  312 => 140,  309 => 139,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 118,  283 => 115,  281 => 98,  274 => 96,  265 => 105,  255 => 121,  253 => 100,  248 => 97,  241 => 93,  235 => 89,  229 => 87,  227 => 86,  222 => 110,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  203 => 73,  197 => 69,  194 => 68,  191 => 77,  189 => 66,  184 => 63,  178 => 59,  172 => 68,  170 => 84,  166 => 54,  155 => 55,  152 => 84,  144 => 78,  127 => 35,  94 => 21,  82 => 21,  76 => 34,  70 => 19,  67 => 24,  61 => 13,  79 => 21,  72 => 19,  69 => 16,  54 => 13,  45 => 9,  42 => 7,  40 => 11,  37 => 6,  22 => 1,  164 => 70,  162 => 57,  157 => 56,  145 => 74,  139 => 45,  123 => 44,  120 => 38,  111 => 47,  108 => 33,  101 => 30,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 11,  52 => 12,  43 => 12,  41 => 8,  35 => 5,  32 => 4,  396 => 175,  387 => 172,  383 => 171,  380 => 158,  375 => 170,  373 => 168,  365 => 125,  363 => 153,  356 => 122,  349 => 153,  342 => 149,  335 => 145,  328 => 113,  321 => 135,  314 => 133,  307 => 128,  295 => 130,  289 => 196,  285 => 100,  282 => 113,  276 => 193,  272 => 108,  269 => 125,  263 => 104,  259 => 103,  257 => 101,  254 => 100,  249 => 119,  246 => 118,  237 => 115,  234 => 114,  232 => 89,  223 => 86,  220 => 85,  212 => 79,  209 => 78,  204 => 75,  201 => 74,  196 => 92,  190 => 69,  182 => 87,  180 => 70,  175 => 97,  167 => 63,  163 => 90,  160 => 89,  154 => 54,  150 => 52,  147 => 75,  141 => 77,  137 => 46,  134 => 54,  131 => 42,  128 => 42,  125 => 41,  119 => 39,  115 => 39,  112 => 37,  110 => 36,  106 => 51,  102 => 41,  99 => 27,  96 => 31,  87 => 41,  84 => 40,  81 => 26,  75 => 22,  57 => 15,  53 => 13,  50 => 22,  47 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  122 => 52,  117 => 29,  109 => 52,  105 => 25,  103 => 43,  98 => 45,  92 => 30,  90 => 26,  83 => 25,  78 => 22,  73 => 33,  71 => 29,  68 => 30,  64 => 17,  58 => 15,  56 => 23,  51 => 13,  46 => 10,  44 => 9,  29 => 3,  26 => 3,);
    }
}
