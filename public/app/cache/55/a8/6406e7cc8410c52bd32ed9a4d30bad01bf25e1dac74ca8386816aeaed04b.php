<?php

/* _sub_pretty.twig */
class __TwigTemplate_55a86406e7cc8410c52bd32ed9a4d30bad01bf25e1dac74ca8386816aeaed04b extends Twig_Template
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
        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 39
        echo "
";
        // line 48
        echo "
";
    }

    // line 3
    public function getuserlink($_user = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "displayname"), "html", null, true);
            // line 6
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getcontentlink_by_id($_contenttype = null, $_title = null, $_content_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "title" => $_title,
            "content_id" => $_content_id,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "slug"), "id" => (isset($context["content_id"]) ? $context["content_id"] : $this->getContext($context, "content_id")))), "html", null, true);
            echo "\">";
            // line 11
            echo $this->env->getExtension('Bolt')->trim((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 70);
            // line 12
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getcontentlink($_contenttype = null, $_content = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "content" => $_content,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["crosslinks"] = $this;
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "any", true, true)) {
                // line 19
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name");
                // line 22
                echo "    ";
            }
            // line 23
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function getchangelogmutation($_raw = null)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $_raw,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 28
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : $this->getContext($context, "raw")), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : $this->getContext($context, "mapping")), (isset($context["raw"]) ? $context["raw"] : $this->getContext($context, "raw")), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : $this->getContext($context, "raw")), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getdatetime($_d = null)
    {
        $context = $this->env->mergeGlobals(array(
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "html", null, true);
            echo "</time>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettypepopover($_types = null)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $_types,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "general/accept_file_types"), "method")));
            // line 35
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt')->trans("Allowed filetypes are:") . "<code>") . twig_join_filter((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), "</code>, <code>")) . "</code>.");
            // line 36
            echo "    <span class=\"label info-pop\" data-title=\"\"
      data-html=\"true\" data-content=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Types");
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getstackbutton($_file = null)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $_file,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            if ((!$this->env->getExtension('Bolt')->stacked($this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "newpath")))) {
                // line 42
                echo "    <a href=\"#\" class=\"btn btn-mini\" data-action=\"stack.addToStack('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "newpath"), "html", null, true);
                echo "', this);\">
        <i class=\"icon-paper-clip\"></i>
        ";
                // line 44
                echo $this->env->getExtension('Bolt')->trans("Place on stack");
                echo "
    </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getdatepickervalue($_date = null)
    {
        $context = $this->env->mergeGlobals(array(
            "date" => $_date,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 50
            echo "    ";
            if (((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")) > "1970-01-01 01:01:01")) {
                // line 51
                echo "       ";
                echo twig_escape_filter($this->env, (((twig_capitalize_string_filter($this->env, $this->env->getExtension('Bolt')->localedatetime((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "%A")) . twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), ", d")) . $this->env->getExtension('Bolt')->localedatetime((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), " %B")) . twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), " Y")), "html", null, true);
                echo "
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_pretty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 51,  294 => 50,  282 => 49,  267 => 44,  261 => 42,  258 => 41,  247 => 40,  232 => 37,  229 => 36,  226 => 35,  223 => 34,  212 => 33,  166 => 27,  141 => 23,  129 => 19,  127 => 18,  124 => 17,  121 => 16,  109 => 15,  76 => 9,  63 => 6,  61 => 5,  57 => 4,  31 => 30,  22 => 8,  175 => 50,  169 => 28,  162 => 45,  159 => 44,  156 => 43,  139 => 38,  131 => 36,  122 => 34,  102 => 28,  98 => 27,  92 => 26,  88 => 25,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  45 => 3,  43 => 11,  39 => 9,  27 => 5,  148 => 53,  146 => 52,  137 => 50,  135 => 21,  132 => 20,  128 => 35,  126 => 44,  107 => 40,  103 => 39,  100 => 38,  94 => 11,  91 => 33,  84 => 31,  82 => 30,  75 => 28,  73 => 27,  67 => 24,  58 => 19,  50 => 16,  46 => 14,  42 => 12,  40 => 48,  37 => 39,  33 => 7,  29 => 6,  25 => 14,  199 => 65,  190 => 59,  185 => 31,  178 => 52,  172 => 51,  168 => 50,  164 => 46,  158 => 46,  155 => 26,  149 => 43,  147 => 41,  142 => 40,  138 => 22,  133 => 37,  123 => 42,  119 => 33,  110 => 31,  96 => 12,  93 => 23,  90 => 10,  87 => 21,  83 => 24,  81 => 19,  78 => 18,  60 => 20,  55 => 18,  53 => 17,  48 => 10,  34 => 32,  32 => 8,  28 => 25,  21 => 2,  19 => 2,);
    }
}
