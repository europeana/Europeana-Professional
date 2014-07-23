<?php

/* _listing-base.twig */
class __TwigTemplate_61fc13dc696d8169dee683834f359cbdc3d944d7b40d20b9dca0cffb2c78a70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "            ";
        // line 2
        echo "            ";
        if (((((!(isset($context["compact"]) ? $context["compact"] : null)) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name") != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))) && ($this->env->getExtension('Bolt')->request("order") == ""))) {
            // line 3
            echo "                <tr class=\"grouping\">
                    <th colspan=\"";
            // line 4
            $this->displayBlock('listing_columns', $context, $blocks);
            echo "\">
                        <h3 ";
            // line 5
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"first\"";
            }
            echo ">
                            ";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name")) {
                // line 7
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name"), "html", null, true);
                echo "
                            ";
            } else {
                // line 9
                echo "                                ";
                echo $this->env->getExtension('Bolt')->trans("(no group)");
                echo "
                            ";
            }
            // line 11
            echo "                        </h3>
                    </th>
                </tr>
            ";
        }
        // line 15
        echo "

            ";
        // line 18
        echo "            ";
        if (((!(isset($context["compact"]) ? $context["compact"] : null)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") || (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name") != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))) && ($this->env->getExtension('Bolt')->request("order") == ""))))) {
            // line 19
            echo "                ";
            $context["lastgroup"] = (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name"))) : (""));
            // line 20
            echo "                ";
            if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all")))) {
                // line 21
                echo "                    ";
                $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), "filter")) . "&");
                // line 22
                echo "                ";
            } else {
                // line 23
                echo "                    ";
                $context["filter"] = "";
                // line 24
                echo "                ";
            }
            // line 25
            echo "
                ";
            // line 26
            $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
            // line 27
            echo "                <tr>
                    ";
            // line 28
            $this->displayBlock('listing_header', $context, $blocks);
            // line 40
            echo "                </tr>
            ";
        }
        // line 42
        echo "

            <tr ";
        // line 44
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") != "published")) {
            echo "class=\"dim\"";
        }
        echo ">

                ";
        // line 46
        $this->displayBlock('listing_id', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        $this->displayBlock('listing_content', $context, $blocks);
        // line 72
        echo "
                ";
        // line 73
        if ((!(isset($context["compact"]) ? $context["compact"] : null))) {
            // line 74
            echo "                    ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 93
            echo "                ";
        }
        // line 94
        echo "
                ";
        // line 95
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 187
        echo "
            </tr>
";
    }

    // line 4
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "5";
    }

    // line 28
    public function block_listing_header($context, array $blocks = array())
    {
        // line 29
        echo "                    <th class=\"hide-phone\"><a href='";
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "id")) {
            echo "-";
        }
        echo "id'>#</a></th>

                    <th style=\"width:80%\"><a href='";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method"))) {
            echo "-";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method"), "html", null, true);
        echo "'>
                        ";
        // line 32
        echo $this->env->getExtension('Bolt')->trans("Title");
        echo " / ";
        echo $this->env->getExtension('Bolt')->trans("Excerpt");
        echo "</a></th>

                    <th>&nbsp;</th>

                    <th class='username hide-phone'><a href='";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "datecreated")) {
            echo "-";
        }
        echo "datecreated'>";
        echo $this->env->getExtension('Bolt')->trans("Meta");
        echo "</a></th>

                    <th><a href='?'>";
        // line 38
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</a></th>
                    ";
    }

    // line 46
    public function block_listing_id($context, array $blocks = array())
    {
        // line 47
        echo "                    <td class='id hide-phone'>№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo "</td>
                ";
    }

    // line 50
    public function block_listing_content($context, array $blocks = array())
    {
        // line 51
        echo "                    <td class='excerpt ";
        if ((!(isset($context["compact"]) ? $context["compact"] : null))) {
            echo "large";
        }
        echo "'><span>
                        <strong class=\"show-phone\">№ ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo ". </strong>
                        <strong>
                            ";
        // line 54
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 55
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), "html", null, true);
            echo "\">
                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
            echo "
                            </a>
                            ";
        } else {
            // line 59
            echo "                            <strong>
                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle"), "html", null, true);
            echo "
                            </strong>
                            ";
        }
        // line 63
        echo "                        </strong>
                        ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => (isset($context["excerptlength"]) ? $context["excerptlength"] : null)), "method"), "html", null, true);
        echo "
                                    </span></td>
                    <td class='listthumb'>
                        ";
        // line 67
        if ((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage")))) {
            // line 68
            echo "                            ";
            echo $this->env->getExtension('Bolt')->fancybox($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage"), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), ((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75), "c");
            echo "
                        ";
        }
        // line 70
        echo "                    </td>
                ";
    }

    // line 74
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 75
        echo "                        <td class='username hide-phone'>
                            <i class=\"icon-user\"></i>
                                ";
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 78
            echo "                                    ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user"), "displayname"), 15);
            echo "
                                ";
        } else {
            // line 80
            echo "                                    <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values"), "ownerid"), "html", null, true);
            echo " </s>
                                ";
        }
        // line 81
        echo "<br>
                            ";
        // line 82
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "timed")) {
            // line 83
            echo "                                <i class=\"icon-time\"></i> <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
            echo "</time><br>
                            ";
        } else {
            // line 85
            echo "                                <i class=\"icon-calendar\"></i> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "d/m/Y"), "html", null, true);
            echo "<br>
                            ";
        }
        // line 87
        echo "
                            ";
        // line 88
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) && (!($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder") === false)))) {
            // line 89
            echo "                                <i class=\"icon-sort\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder")));
            echo " <br>
                            ";
        }
        // line 91
        echo "                        </td>
                    ";
    }

    // line 95
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 96
        echo "                    <td class='actions'>
                        <div class=\"btn-group\">
                            ";
        // line 98
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 99
            echo "                            <a class=\"btn btn-mini\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\">
                                <i class=\"icon-edit\"></i> ";
            // line 100
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
                            </a>
                            ";
        }
        // line 103
        echo "                            <button class=\"btn dropdown-toggle btn-mini\" data-toggle=\"dropdown\">
                                <i class=\"icon-info-sign\"></i>
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\">
                            ";
        // line 108
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == "published") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array(), "any", true, true))) {
            // line 109
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link"), "html", null, true);
            echo "\" target=\"_blank\">
                                    <i class=\"icon-external-link\"></i> ";
            // line 110
            echo $this->env->getExtension('Bolt')->trans("View on site");
            echo "</a></li>
                            ";
        }
        // line 112
        echo "
                            ";
        // line 129
        echo "                            ";
        $context["__internal_501fcc88b99c9c06ba14b756619df16fae367fbc90903dbc7ea84fe3815dafb7"] = $this;
        // line 130
        echo "                            ";
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 131
            echo "                                ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") != "published")) {
                // line 132
                echo "                                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("publish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 133
                    echo "                                    <li>
                                        ";
                    // line 134
                    echo $context["__internal_501fcc88b99c9c06ba14b756619df16fae367fbc90903dbc7ea84fe3815dafb7"]->getactionform((isset($context["content"]) ? $context["content"] : null), "publish", "icon-star-empty", $this->env->getExtension('Bolt')->trans("Publish %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name"))));
                    echo "
                                    </li>
                                    ";
                }
                // line 137
                echo "                                ";
            } else {
                // line 138
                echo "                                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("depublish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 139
                    echo "                                    <li>";
                    echo $context["__internal_501fcc88b99c9c06ba14b756619df16fae367fbc90903dbc7ea84fe3815dafb7"]->getactionform((isset($context["content"]) ? $context["content"] : null), "held", "icon-star", $this->env->getExtension('Bolt')->trans("Change status to 'held'"));
                    echo "</li>
                                    <li>";
                    // line 140
                    echo $context["__internal_501fcc88b99c9c06ba14b756619df16fae367fbc90903dbc7ea84fe3815dafb7"]->getactionform((isset($context["content"]) ? $context["content"] : null), "draft", "icon-pencil", $this->env->getExtension('Bolt')->trans("Change status to 'draft'"));
                    echo "</li>
                                    ";
                }
                // line 142
                echo "                                ";
            }
            // line 143
            echo "                                ";
            if ($this->env->getExtension('Bolt')->isAllowed("create", (isset($context["content"]) ? $context["content"] : null))) {
                // line 144
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "duplicate" => 1)), "html", null, true);
                echo "\">
                                    <i class=\"icon-copy\"></i> ";
                // line 145
                echo $this->env->getExtension('Bolt')->trans("Duplicate %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name")));
                echo "</a></li>
                                ";
            }
            // line 147
            echo "                                ";
            if ($this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["content"]) ? $context["content"] : null))) {
                // line 148
                echo "                                    <li>
                                        ";
                // line 149
                echo $context["__internal_501fcc88b99c9c06ba14b756619df16fae367fbc90903dbc7ea84fe3815dafb7"]->getactionform((isset($context["content"]) ? $context["content"] : null), "delete", "icon-trash", $this->env->getExtension('Bolt')->trans("Delete %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_name"))), (("Are you sure you want to delete '" . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle")) . "'?"));
                // line 152
                echo "
                                    </li>
                                ";
            }
            // line 155
            echo "                                <li class=\"divider\"></li>
                            ";
        }
        // line 157
        echo "                                <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt')->trans("Author:");
        echo " <strong><i class=\"icon-user\"></i>
                                    ";
        // line 158
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 159
            echo "                                        ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user"), "displayname"), 15);
            echo "
                                    ";
        } else {
            // line 161
            echo "                                        <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values"), "ownerid"), "html", null, true);
            echo " </s>
                                    ";
        }
        // line 162
        echo "</strong></a></li>
                                <li><a class=\"nolink\">";
        // line 163
        echo $this->env->getExtension('Bolt')->trans("Current status:");
        echo "
                                    <strong>";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status"), "html", null, true);
        echo "</strong></a></li>
                                <li><a class=\"nolink\">";
        // line 165
        echo $this->env->getExtension('Bolt')->trans("Slug:");
        echo "
                                    <code title=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug"), 24);
        echo "</code></a></li>
                                <li><a class=\"nolink\">";
        // line 167
        echo $this->env->getExtension('Bolt')->trans("Created on:");
        echo "
                                    <i class=\"icon-asterisk\"></i> ";
        // line 168
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                                <li><a class=\"nolink\">";
        // line 169
        echo $this->env->getExtension('Bolt')->trans("Published on:");
        echo "
                                    <i class=\"icon-calendar\"></i> ";
        // line 170
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                                <li><a class=\"nolink\">";
        // line 171
        echo $this->env->getExtension('Bolt')->trans("Last edited on:");
        echo "
                                    <i class=\"icon-refresh\"></i> ";
        // line 172
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                                ";
        // line 173
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy"));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 174
            echo "                                    ";
            if ((twig_length_filter($this->env, (isset($context["values"]) ? $context["values"] : null)) > 1)) {
                // line 175
                echo "                                        <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array"), "name"), "html", null, true);
                echo ":
                                            <i class=\"icon-tag\"></i> ";
                // line 176
                echo $this->env->getExtension('Bolt')->trim(twig_join_filter((isset($context["values"]) ? $context["values"] : null), ", "), 24);
                echo "</a></li>
                                    ";
            } else {
                // line 178
                echo "                                        <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : null), array(), "array"), "singular_name"), "html", null, true);
                echo ":
                                            <i class=\"icon-tag\"></i> ";
                // line 179
                echo $this->env->getExtension('Bolt')->trim($this->env->getExtension('Bolt')->first((isset($context["values"]) ? $context["values"] : null)), 24);
                echo "</a></li>
                                    ";
            }
            // line 181
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                            </ul>
                        </div>

                    </td>
                ";
    }

    // line 113
    public function getactionform($_content = null, $_action = null, $_icon = null, $_text = null, $_confirmation_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $_content,
            "action" => $_action,
            "icon" => $_icon,
            "text" => $_text,
            "confirmation_text" => $_confirmation_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 114
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => (isset($context["action"]) ? $context["action"] : null), "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))), "html", null, true);
            echo "\"
                                      method=\"POST\">
                                    ";
            // line 116
            $this->env->loadTemplate("_sub_csrf_token.twig")->display($context);
            // line 117
            echo "                                    <button type=\"submit\"
                                        ";
            // line 118
            if ((isset($context["confirmation_text"]) ? $context["confirmation_text"] : null)) {
                // line 119
                echo "                                            class=\"btn btn-link confirm\" data-confirm=\"";
                echo twig_escape_filter($this->env, (isset($context["confirmation_text"]) ? $context["confirmation_text"] : null), "html", null, true);
                echo "\"
                                        ";
            } else {
                // line 121
                echo "                                            class=\"btn btn-link\"
                                        ";
            }
            // line 123
            echo "                                    >
                                        <i class=\"";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\"></i>
                                        ";
            // line 125
            echo $this->env->getExtension('Bolt')->trans((isset($context["text"]) ? $context["text"] : null));
            echo "
                                    </button>
                                </form>
                            ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_listing-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 125,  580 => 124,  577 => 123,  573 => 121,  567 => 119,  565 => 118,  562 => 117,  560 => 116,  554 => 114,  539 => 113,  531 => 182,  525 => 181,  520 => 179,  515 => 178,  510 => 176,  505 => 175,  502 => 174,  498 => 173,  494 => 172,  490 => 171,  486 => 170,  482 => 169,  478 => 168,  474 => 167,  468 => 166,  464 => 165,  460 => 164,  456 => 163,  453 => 162,  447 => 161,  441 => 159,  439 => 158,  434 => 157,  430 => 155,  425 => 152,  423 => 149,  420 => 148,  417 => 147,  412 => 145,  407 => 144,  404 => 143,  401 => 142,  396 => 140,  391 => 139,  388 => 138,  385 => 137,  379 => 134,  376 => 133,  373 => 132,  370 => 131,  367 => 130,  364 => 129,  361 => 112,  356 => 110,  351 => 109,  349 => 108,  342 => 103,  336 => 100,  331 => 99,  329 => 98,  325 => 96,  322 => 95,  317 => 91,  311 => 89,  309 => 88,  306 => 87,  300 => 85,  290 => 83,  288 => 82,  285 => 81,  279 => 80,  273 => 78,  271 => 77,  267 => 75,  264 => 74,  259 => 70,  253 => 68,  251 => 67,  245 => 64,  242 => 63,  236 => 60,  233 => 59,  227 => 56,  220 => 55,  218 => 54,  213 => 52,  206 => 51,  203 => 50,  196 => 47,  193 => 46,  187 => 38,  177 => 36,  168 => 32,  160 => 31,  151 => 29,  148 => 28,  142 => 4,  136 => 187,  134 => 95,  131 => 94,  128 => 93,  125 => 74,  123 => 73,  120 => 72,  118 => 50,  115 => 49,  113 => 46,  106 => 44,  102 => 42,  98 => 40,  96 => 28,  93 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  43 => 6,  37 => 5,  30 => 3,  27 => 2,  25 => 1,  63 => 15,  57 => 11,  51 => 9,  45 => 7,  39 => 5,  33 => 4,);
    }
}
