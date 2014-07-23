<?php

/* files.twig */
class __TwigTemplate_2104992993bbaf3bf043ee19a4a2ccbcaaa7fb3cc00e2f5628e52db1b1dfb99c extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "settings")));
        // line 2
        echo "
";
        // line 3
        $context["pretty"] = $this->env->loadTemplate("_sub_pretty.twig");
        // line 4
        echo "
<h1>";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Files: %path%", array("%path%" => (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path"))));
        echo "</h1>

";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["pathsegments"]) ? $context["pathsegments"] : $this->getContext($context, "pathsegments"))) > 1)) {
            // line 8
            echo "    <p>";
            echo $this->env->getExtension('Bolt')->trans("Path:");
            echo "
    ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pathsegments"]) ? $context["pathsegments"] : $this->getContext($context, "pathsegments")));
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
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 10
                echo "    ";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                    echo " / ";
                }
                // line 11
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "html", null, true);
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </p>
";
        }
        // line 15
        echo "
";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["folders"]) ? $context["folders"] : $this->getContext($context, "folders"))) > 0)) {
            // line 17
            echo "<table class='dashboardlisting'>
    <tr><th>";
            // line 18
            echo $this->env->getExtension('Bolt')->trans("Folders");
            echo "</th><th>";
            echo $this->env->getExtension('Bolt')->trans("Modified");
            echo "</th></tr>
";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) ? $context["folders"] : $this->getContext($context, "folders")));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 20
                echo "    <tr>
        <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "newpath"))), "html", null, true);
                echo "\"><i class=\"icon-folder-open\"></i> <b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "foldername"), "html", null, true);
                echo "/</b></a></td>
        <td>
            <time class=\"moment\" datetime=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "modified"), "c"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "modified"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : $this->getContext($context, "folder")), "modified"), "html", null, true);
                echo "</time>
        </td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</table>
";
        }
        // line 29
        echo "
";
        // line 30
        if ((twig_length_filter($this->env, (isset($context["files"]) ? $context["files"] : $this->getContext($context, "files"))) > 0)) {
            // line 31
            echo "<table class='dashboardlisting'>
    <tr><th>";
            // line 32
            echo $this->env->getExtension('Bolt')->trans("Files");
            echo "</th><th>";
            echo $this->env->getExtension('Bolt')->trans("Filesize");
            echo "</th><th>&nbsp;</th><th>";
            echo $this->env->getExtension('Bolt')->trans("Modified");
            echo "</th><th>&nbsp;</th><th>&nbsp;</th></tr>
";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 34
                echo "    <tr>
        <td>
            ";
                // line 36
                if (twig_in_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "type"), array(0 => "jpeg", 1 => "jpg", 2 => "png", 3 => "gif"))) {
                    // line 37
                    echo "                ";
                    if ($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "readable")) {
                        // line 38
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "newpath"), 1000, 1000, "r"), "html", null, true);
                        echo "\" class='fancybox' rel='fancybox' title=\"Image: ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename"), "html", null, true);
                        echo "\">
                        <b>";
                        // line 39
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename"), "html", null, true);
                        echo "</b>
                    </a>
                ";
                    } else {
                        // line 42
                        echo "                    <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename"), "html", null, true);
                        echo " </b><i class=\"icon-lock\"></i>
                ";
                    }
                    // line 44
                    echo "            ";
                } elseif (twig_in_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "type"), array(0 => "twig", 1 => "txt", 2 => "html", 3 => "md", 4 => "htm", 5 => "css", 6 => "less", 7 => "js", 8 => "yml"))) {
                    // line 45
                    echo "                ";
                    if ($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "readable")) {
                        // line 46
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "newpath"))), "html", null, true);
                        echo "\"><b>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename"), "html", null, true);
                        echo "</b> </a>
                ";
                    } else {
                        // line 48
                        echo "                    <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename"), "html", null, true);
                        echo "</b>
                ";
                    }
                    // line 50
                    echo "                ";
                    if (((!$this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "readable")) || (!$this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "writable")))) {
                        // line 51
                        echo "                    <i class=\"icon-lock\"></i>
                ";
                    }
                    // line 53
                    echo "            ";
                } else {
                    // line 54
                    echo "                ";
                    if ($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "readable")) {
                        // line 55
                        echo "                    <a href=\"/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "newpath"), "html", null, true);
                        echo "\" target=\"_blank\"><b>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename"), "html", null, true);
                        echo "</b></a>
                ";
                    } else {
                        // line 57
                        echo "                    <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename"), "html", null, true);
                        echo " </b><i class=\"icon-lock\"></i>
                ";
                    }
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "        </td>
        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filesize"), "html", null, true);
                echo ".</td>
        <td>";
                // line 62
                if ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "imagesize", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "imagesize"), "html", null, true);
                    echo " px.";
                }
                echo "</td>
        <td>
            <time class=\"moment\" datetime=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "modified"), "c"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "modified"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "modified"), "html", null, true);
                echo "</time>
        </td>
        <td class='listthumb'>
            ";
                // line 67
                if ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "imagesize", array(), "any", true, true)) {
                    // line 68
                    echo "                ";
                    echo $this->env->getExtension('Bolt')->showimage($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "newpath"), 54, 40, "c");
                    echo "
            ";
                }
                // line 70
                echo "        </td>
        <td class='actions'>

            <div class=\"btn-group\">

                ";
                // line 75
                echo $context["pretty"]->getstackbutton((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")));
                echo "

                <a class=\"btn dropdown-toggle btn-mini\" data-toggle=\"dropdown\">
                    <i class=\"icon-info-sign\"></i>
                    ";
                // line 79
                echo $this->env->getExtension('Bolt')->trans("Options");
                echo "
                    <span class=\"caret\"></span>
                </a>

                <ul class=\"dropdown-menu pull-right\">
                    <li><a href=\"#\" data-action=\"files.deleteFile('";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "newpath"), "html", null, true);
                echo "', this);\">
                        <i class=\"icon-ban-circle\"></i> ";
                // line 85
                echo $this->env->getExtension('Bolt')->trans("Delete %filename%", array("%filename%" => $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename")));
                echo "</a></li>
                    <li><a href=\"#\" data-confirm=\"Not yet implemented. Sorry!\" class=\"confirm\">
                        <i class=\"icon-copy\"></i> ";
                // line 87
                echo $this->env->getExtension('Bolt')->trans("Duplicate %filename%", array("%filename%" => $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "filename")));
                echo "</a></li>
                    <li class=\"divider\"></li>
                    <li><a class=\"nolink\">";
                // line 89
                echo $this->env->getExtension('Bolt')->trans("Permissions");
                echo ":
                            <strong><code>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "permissions"), "html", null, true);
                echo "</code></strong></a></li>

                </ul>
            </div>

        </td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "</table>
";
        }
        // line 100
        echo "
";
        // line 102
        if (((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) != false)) {
            // line 103
            echo "    <hr />
    <form action=\"\" method=\"post\" ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
        <fieldset>
            ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            <button type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 4px;\">
                <i class=\"icon-upload\"></i>
                <span>";
            // line 109
            echo $this->env->getExtension('Bolt')->trans("Upload file");
            echo "</span>
            </button>
            ";
            // line 111
            echo $context["pretty"]->gettypepopover();
            echo "
        </fieldset>
    </form>

    <script type=\"text/javascript\">
        \$(function() {
            \$('input[type=file]').bootstrapFileInput();
        });
    </script>
";
        } else {
            // line 121
            echo "    <p><i class=\"icon-exclamation-sign\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Uploading to this folder is not allowed.");
            echo "</p>
";
        }
        // line 123
        echo "

";
        // line 125
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 125,  364 => 123,  358 => 121,  345 => 111,  340 => 109,  334 => 106,  329 => 104,  326 => 103,  324 => 102,  321 => 100,  317 => 98,  303 => 90,  299 => 89,  294 => 87,  289 => 85,  285 => 84,  277 => 79,  270 => 75,  263 => 70,  257 => 68,  255 => 67,  245 => 64,  237 => 62,  233 => 61,  230 => 60,  227 => 59,  221 => 57,  213 => 55,  210 => 54,  207 => 53,  203 => 51,  200 => 50,  194 => 48,  186 => 46,  183 => 45,  180 => 44,  174 => 42,  168 => 39,  161 => 38,  158 => 37,  156 => 36,  152 => 34,  148 => 33,  140 => 32,  137 => 31,  135 => 30,  132 => 29,  128 => 27,  114 => 23,  107 => 21,  104 => 20,  100 => 19,  94 => 18,  91 => 17,  89 => 16,  86 => 15,  82 => 13,  63 => 11,  58 => 10,  41 => 9,  36 => 8,  34 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
