<?php

/* _sub_mainmenu.twig */
class __TwigTemplate_8903363252e4347429baeafcd73d09f696f0eb69df43986f9711c3de15b6314d extends Twig_Template
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
        echo "<div class=\"nav-collapse\">
    <ul class=\"nav pull-right\">
        ";
        // line 3
        if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method")))) {
            // line 4
            echo "
            ";
            // line 6
            echo "            <li class=\"";
            if (twig_in_filter((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")), array(0 => "", 1 => "dashboard"))) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">
                <i class=\"icon-home\"></i> ";
            // line 7
            echo $this->env->getExtension('Bolt')->trans("Dashboard");
            echo "</a></li>

            ";
            // line 10
            echo "            <li class=\"";
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "content")) {
                echo "active ";
            }
            echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-sitemap\"></i> ";
            // line 12
            echo $this->env->getExtension('Bolt')->trans("Content");
            echo " <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "config"), "get", array(0 => "contenttypes"), "method"));
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
            foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
                // line 16
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))))) {
                    // line 17
                    echo "                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")))), "html", null, true);
                    echo "\">
                                <i class=\"icon-tasks\"></i> ";
                    // line 18
                    echo $this->env->getExtension('Bolt')->trans("View %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "name")));
                    echo "</a></li>
                            ";
                    // line 19
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") < 5)) {
                        // line 20
                        echo "                                ";
                        if ($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))) . ":create"))) {
                            // line 21
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "id" => "")), "html", null, true);
                            echo "\">
                                    <i class=\"icon-plus\"></i> ";
                            // line 22
                            echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
                            echo "</a></li>
                                ";
                        }
                        // line 24
                        echo "                                ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            echo "<li class=\"divider\"></li>";
                        }
                        // line 25
                        echo "                            ";
                    }
                    // line 26
                    echo "                        ";
                }
                // line 27
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
                </ul>
            </li>

            ";
            // line 33
            echo "            ";
            $context["checkpermissions"] = array(0 => "settings", 1 => "files:config", 2 => "extensions", 3 => "dbupdate", 4 => "clearcache", 5 => "users", 6 => "activitylog", 7 => "files:theme", 8 => "files:uploads", 9 => "translation");
            // line 44
            echo "            ";
            $context["granted"] = false;
            // line 45
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["checkpermissions"]) ? $context["checkpermissions"] : $this->getContext($context, "checkpermissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["checkpermission"]) {
                // line 46
                echo "                ";
                if ($this->env->getExtension('Bolt')->isAllowed((isset($context["checkpermission"]) ? $context["checkpermission"] : $this->getContext($context, "checkpermission")))) {
                    // line 47
                    echo "                    ";
                    $context["granted"] = true;
                    // line 48
                    echo "                ";
                }
                // line 49
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkpermission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            ";
            if ((isset($context["granted"]) ? $context["granted"] : $this->getContext($context, "granted"))) {
                // line 51
                echo "            <li class=\"";
                if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "settings")) {
                    echo "active ";
                }
                echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cogs\"></i> ";
                // line 52
                echo $this->env->getExtension('Bolt')->trans("Settings");
                echo "
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                // line 56
                if (($this->env->getExtension('Bolt')->isAllowed("users") || $this->env->getExtension('Bolt')->isAllowed("files:config"))) {
                    // line 57
                    echo "                        <li class=\"nav-header\">";
                    echo $this->env->getExtension('Bolt')->trans("Configuration");
                    echo "</li>
                        ";
                    // line 58
                    if ($this->env->getExtension('Bolt')->isAllowed("users")) {
                        // line 59
                        echo "                            <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("users");
                        echo "\"><i class=\"icon-group\"></i> ";
                        echo $this->env->getExtension('Bolt')->trans("Users");
                        echo "</a></li>
                        ";
                    }
                    // line 61
                    echo "                        ";
                    if ($this->env->getExtension('Bolt')->isAllowed("files:config")) {
                        // line 62
                        echo "                            <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/config.yml"));
                        echo "\">
                                <i class=\"icon-cog\"></i> ";
                        // line 63
                        echo $this->env->getExtension('Bolt')->trans("Configuration");
                        echo "</a></li>
                            <li><a href=\"";
                        // line 64
                        echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/contenttypes.yml"));
                        echo "\">
                                <i class=\"icon-hdd\"></i> ";
                        // line 65
                        echo $this->env->getExtension('Bolt')->trans("Contenttypes");
                        echo "</a></li>
                            <li><a href=\"";
                        // line 66
                        echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/taxonomy.yml"));
                        echo "\">
                                <i class=\"icon-tags\"></i> ";
                        // line 67
                        echo $this->env->getExtension('Bolt')->trans("Taxonomy");
                        echo "</a></li>
                            <li><a href=\"";
                        // line 68
                        echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/menu.yml"));
                        echo "\">
                                <i class=\"icon-list\"></i> ";
                        // line 69
                        echo $this->env->getExtension('Bolt')->trans("Menu setup");
                        echo "</a></li>
                            <li><a href=\"";
                        // line 70
                        echo $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/routing.yml"));
                        echo "\">
                                <i class=\"icon-random\"></i> ";
                        // line 71
                        echo $this->env->getExtension('Bolt')->trans("Routing setup");
                        echo "</a></li>
                        ";
                    }
                    // line 73
                    echo "                        <li class=\"divider\"></li>
                    ";
                }
                // line 75
                echo "
                    ";
                // line 76
                if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "extensions"), "hasMenuoptions")) {
                    // line 77
                    echo "                        <li class=\"nav-header\">";
                    echo $this->env->getExtension('Bolt')->trans("Extensions");
                    echo "</li>
                        ";
                    // line 78
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "extensions"), "getMenuoptions"));
                    foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                        // line 79
                        echo "                            <li>
                                <a href=\"";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "path"), "html", null, true);
                        echo "\">
                                    <i class=\"";
                        // line 81
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "icon"), "icon-expand")) : ("icon-expand")), "html", null, true);
                        echo "\"></i>
                                    ";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "label"), "html", null, true);
                        echo "
                                </a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                        <li class=\"divider\"></li>
                    ";
                }
                // line 88
                echo "                    <li class=\"nav-header\">";
                echo $this->env->getExtension('Bolt')->trans("Maintenance");
                echo "</li>
                    ";
                // line 89
                if ($this->env->getExtension('Bolt')->isAllowed("extensions")) {
                    // line 90
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("extensions");
                    echo "\"><i class=\"icon-briefcase\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Extensions");
                    echo "</a></li>
                    ";
                }
                // line 92
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("dbupdate")) {
                    // line 93
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("dbcheck");
                    echo "\"><i class=\"icon-wrench\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Check database");
                    echo "</a></li>
                    ";
                }
                // line 95
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("clearcache")) {
                    // line 96
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("clearcache");
                    echo "\"><i class=\"icon-magic\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Clear the cache");
                    echo "</a></li>
                    ";
                }
                // line 98
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("activitylog")) {
                    // line 99
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("activitylog");
                    echo "\"><i class=\"icon-file\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Activity log");
                    echo "</a></li>
                    ";
                }
                // line 101
                echo "                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">";
                // line 102
                echo $this->env->getExtension('Bolt')->trans("File Management");
                echo "</li>
                    ";
                // line 103
                if ($this->env->getExtension('Bolt')->isAllowed("files:theme")) {
                    // line 104
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("files", array("path" => "theme"));
                    echo "\"><i class=\"icon-hdd\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("View / edit Templates");
                    echo "</a></li>
                    ";
                }
                // line 106
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("files:uploads")) {
                    // line 107
                    echo "                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("files", array("path" => "files"));
                    echo "\"><i class=\"icon-hdd\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Uploaded files");
                    echo "</a></li>
                    ";
                }
                // line 109
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("translation")) {
                    // line 110
                    echo "                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">";
                    // line 111
                    echo $this->env->getExtension('Bolt')->trans("Translations");
                    echo "</li>
                        <li><a href=\"";
                    // line 112
                    echo $this->env->getExtension('routing')->getPath("translation", array("domain" => "messages"));
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Messages");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 113
                    echo $this->env->getExtension('routing')->getPath("translation", array("domain" => "infos"));
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Long messages");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 114
                    echo $this->env->getExtension('routing')->getPath("translation", array("domain" => "contenttypes"));
                    echo "\"><i class=\"icon-flag\"></i> ";
                    echo $this->env->getExtension('Bolt')->trans("Contenttypes");
                    echo "</a></li>
                    ";
                }
                // line 116
                echo "
                </ul>
            </li>
            ";
            }
            // line 120
            echo "
            <li class=\"divider-vertical\"></li>

            ";
            // line 124
            echo "            <li>
                <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
            </li>

            <li class=\"divider-vertical\"></li>

            ";
            // line 131
            echo "            <li>
                <form action=\"";
            // line 132
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" method=\"POST\">
                    <button class=\"btn btn-link\" type=\"submit\">
                        <i class=\"icon-signout\"></i> ";
            // line 134
            echo $this->env->getExtension('Bolt')->trans("Logout %name%", array("%name%" => $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "displayname"), 16)));
            echo "
                    </button>
                </form>
            </li>
        ";
        } else {
            // line 139
            echo "
            <li class=\"divider-vertical\"></li>

            ";
            // line 143
            echo "            <li>
                <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("View site");
            echo "</a>
            </li>

            <li class=\"divider-vertical\"></li>

            ";
            // line 150
            echo "            <li>
                <a href=\"";
            // line 151
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><i class=\"icon-signin\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Login");
            echo "</a>
            </li>
        ";
        }
        // line 154
        echo "    </ul>
</div><!--/.nav-collapse -->
";
    }

    public function getTemplateName()
    {
        return "_sub_mainmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 48,  145 => 47,  134 => 44,  125 => 28,  111 => 27,  108 => 26,  100 => 24,  95 => 22,  90 => 21,  85 => 19,  81 => 18,  76 => 17,  73 => 16,  50 => 12,  42 => 10,  23 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 45,  142 => 46,  137 => 45,  132 => 40,  128 => 39,  124 => 38,  119 => 36,  114 => 34,  110 => 33,  96 => 28,  88 => 26,  84 => 25,  79 => 23,  74 => 21,  71 => 20,  61 => 17,  56 => 15,  48 => 13,  40 => 10,  31 => 8,  65 => 24,  63 => 18,  54 => 16,  52 => 14,  41 => 12,  28 => 6,  24 => 3,  21 => 2,  19 => 1,  140 => 7,  138 => 6,  135 => 5,  131 => 33,  127 => 48,  105 => 25,  101 => 30,  97 => 27,  92 => 27,  87 => 20,  66 => 20,  49 => 19,  44 => 12,  37 => 7,  35 => 9,  32 => 10,  30 => 5,  25 => 4,  22 => 2,  20 => 1,);
    }
}
