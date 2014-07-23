<?php

/* _sub_editfields.twig */
class __TwigTemplate_44e2f5afabc3ea13f4f8d868ef1c838783b2d9cd1d00e763f50c950232b778ef extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "fields"));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 2
            echo "
";
            // line 4
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "prefix"))))) {
                // line 5
                echo "<div class='clearfix'>
    ";
                // line 6
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "prefix");
                echo "
</div>
";
            }
            // line 9
            echo "

";
            // line 12
            echo "
";
            // line 13
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "text")) {
                // line 14
                echo "    <label><b>";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "variant") == "inline")) {
                    echo "<span class='left'>";
                }
                // line 15
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                // line 16
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "variant") == "inline")) {
                    echo "</span>";
                }
                echo "</b></label>
    <input type=\"";
                // line 17
                if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern"), array(0 => "url", 1 => "email"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern"), "html", null, true);
                } else {
                    echo "text";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"
        value='";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "html", null, true);
                echo "'
        class='";
                // line 19
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo " ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "variant") == "inline")) {
                    echo "narrow";
                }
                echo "'
        ";
                // line 20
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    echo "required=\"required\"";
                }
                // line 21
                echo "        ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern") && !twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern"), array(0 => "url", 1 => "email")))) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 22
                echo "        maxlength=\"255\"
        >
";
            }
            // line 25
            echo "

";
            // line 28
            echo "
";
            // line 29
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "number")) {
                // line 30
                echo "    <label><b><span class='left'>
        ";
                // line 31
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "html", null, true);
                }
                // line 32
                echo "    </span></b></label>
    <input type=\"number\" name=\"";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" step=\"0.000000001\"
        value='";
                // line 34
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 35
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 36
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    echo "required=\"required\"";
                }
                // line 37
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 38
                echo "        >
";
            }
            // line 40
            echo "
";
            // line 42
            echo "
";
            // line 43
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "float")) {
                // line 44
                echo "    <label><b><span class='left'>
    ";
                // line 45
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                // line 46
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" step=\"0.00000001\"
        value='";
                // line 48
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 49
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 50
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    echo "required=\"required\"";
                }
                // line 51
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 52
                echo "        >
";
            }
            // line 54
            echo "
";
            // line 56
            echo "
";
            // line 57
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "integer")) {
                // line 58
                echo "    <label><b><span class='left'>
    ";
                // line 59
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                // line 60
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" step=\"1\"
        value='";
                // line 62
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 63
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 64
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    echo "required=\"required\"";
                }
                // line 65
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 66
                echo "        max=\"2147483647\" min=\"-2147483647\"
        >
";
            }
            // line 69
            echo "
";
            // line 71
            echo "
";
            // line 72
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "checkbox")) {
                // line 73
                echo "<div class=\"checkboxwrapper\">
    <label for=\"";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
        <b>
            <span class='left'>
                ";
                // line 77
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                // line 78
                echo "            </span>
        </b>
    </label>
    ";
                // line 82
                echo "    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" value='0'>
    <input type=\"checkbox\" name=\"";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" value='1'
           ";
                // line 84
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")) {
                    echo "checked";
                } else {
                    echo "notchecked";
                }
                // line 85
                echo "           class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo "'>
</div>
";
            }
            // line 88
            echo "

";
            // line 91
            echo "
";
            // line 92
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "slug")) {
                // line 93
                echo "<label class='permalink'>";
                echo $this->env->getExtension('Bolt')->trans("Permalink");
                echo ":
    <code>/";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype"), "singular_slug"), "html", null, true);
                echo "/<span id='show-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "html", null, true);
                echo "</span></code>
    <input type=\"text\" name=\"";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"  id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" value='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "html", null, true);
                echo "' class='editslug'>
    <span class='sluglocker'><i class='icon-lock'></i></span> <span class='slugedit'><i class='icon-pencil'></i></span>
</label>


";
                // line 100
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) {
                    // line 101
                    echo "<script type=\"text/javascript\">
    \$(function() {
        \$('.sluglocker').bind('click', function() {
           if (\$('.sluglocker i').hasClass('icon-lock')) {
               \$('.sluglocker i').removeClass('icon-lock').addClass('icon-unlock');
               makeUri('";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"), "html", null, true);
                    echo "', ";
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "uses"));
                    echo ", '";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "', false);
           } else {
               \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
               stopMakeUri(";
                    // line 109
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "uses"));
                    echo ");
           }
        });
        \$('.slugedit').bind('click', function() {

            newslug = prompt(\"Set the slug to:\");

            \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
            stopMakeUri(";
                    // line 117
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "uses"));
                    echo ");

            makeUriAjax(newslug, '";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "', false)


        });
    ";
                    // line 123
                    if (twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"))) {
                        // line 124
                        echo "        \$('.sluglocker').trigger('click');
    ";
                    }
                    // line 126
                    echo "    });
</script>
";
                }
                // line 129
                echo "
";
            }
            // line 131
            echo "
";
            // line 133
            echo "
";
            // line 134
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "select")) {
                // line 135
                echo "    ";
                if (twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "values"))) {
                    // line 136
                    echo "        ";
                    $context["values"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "values");
                    // line 137
                    echo "    ";
                } else {
                    // line 138
                    echo "        ";
                    $context["lookuptype"] = $this->env->getExtension('Bolt')->first(twig_split_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "values"), "/"));
                    // line 139
                    echo "        ";
                    $context["lookupfield"] = $this->env->getExtension('Bolt')->last(twig_split_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "values"), "/"));
                    // line 140
                    echo "        ";
                    if (twig_in_filter(",", (isset($context["lookupfield"]) ? $context["lookupfield"] : $this->getContext($context, "lookupfield")))) {
                        // line 141
                        echo "            ";
                        $context["lookupfield"] = twig_split_filter((isset($context["lookupfield"]) ? $context["lookupfield"] : $this->getContext($context, "lookupfield")), ",");
                        // line 142
                        echo "        ";
                    }
                    // line 143
                    echo "        ";
                    $template_storage = new Bolt\Storage($context['app']);
                    $context['lookups'] =                     $template_storage->getContent((isset($context["lookuptype"]) ? $context["lookuptype"] : $this->getContext($context, "lookuptype")), array("order" => $this->env->getExtension('Bolt')->last((isset($context["lookupfield"]) ? $context["lookupfield"] : $this->getContext($context, "lookupfield")))) );
                    // line 144
                    echo "        ";
                    $context["values"] = $this->env->getExtension('Bolt')->selectfield((isset($context["lookups"]) ? $context["lookups"] : $this->getContext($context, "lookups")), (isset($context["lookupfield"]) ? $context["lookupfield"] : $this->getContext($context, "lookupfield")));
                    // line 145
                    echo "    ";
                }
                // line 146
                echo "
    <label><b><span class='left'>";
                // line 147
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</span></b></label>
    ";
                // line 148
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "multiple"))) {
                    // line 149
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "[]\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\" class='";
                    if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                    }
                    echo "' multiple>
            ";
                    // line 150
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 151
                        echo "                ";
                        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 1))) {
                            // line 152
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, array(), "array"), "html", null, true);
                            echo "\" ";
                            if (twig_in_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, array(), "array"), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 1, null), " / "), "html", null, true);
                            echo "</option>
                ";
                        } else {
                            // line 154
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                            echo "\" ";
                            if (twig_in_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                            echo "</option>
                ";
                        }
                        // line 156
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "        </select>
        <label><span class='left' style=\"line-height: 1px;\">&nbsp;</span></label>
        <div style=\"margin-top: -14px;\">
            <a href=\"#\" class=\"btn bnt-info btn-mini\" onclick=\"jQuery('#";
                    // line 160
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo " option').prop('selected', true); return false;\">";
                    echo $this->env->getExtension('Bolt')->trans("Select all");
                    echo "</a>
            <a href=\"#\" class=\"btn bnt-info btn-mini\" onclick=\"jQuery('#";
                    // line 161
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo " option').prop('selected', false); return false;\">";
                    echo $this->env->getExtension('Bolt')->trans("Select none");
                    echo "</a>
        </div>

    ";
                } else {
                    // line 165
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\" class='";
                    if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                    }
                    echo "'>
            ";
                    // line 166
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 167
                        echo "                ";
                        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 1))) {
                            // line 168
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, array(), "array"), "html", null, true);
                            echo "\" ";
                            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method") == $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, array(), "array"))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 1, null), " / "), "html", null, true);
                            echo "</option>
                ";
                        } else {
                            // line 170
                            echo "                    <option value=\"";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                            echo "\" ";
                            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method") == (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                            echo "</option>
                ";
                        }
                        // line 172
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "        </select>
    ";
                }
            }
            // line 176
            echo "
";
            // line 178
            echo "
";
            // line 179
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "templateselect")) {
                // line 180
                echo "<label><b><span class='left'>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</span></b></label>
    <select name=\"";
                // line 181
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
        <option value=\"\">";
                // line 182
                echo $this->env->getExtension('Bolt')->trans("(default template)");
                echo "</option>
        <option value=\"\" disabled>-----------</option>
        ";
                // line 184
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listtemplates($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "filter")));
                foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
                    // line 185
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method") == (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "    </select>
";
            }
            // line 189
            echo "
";
            // line 191
            echo "
";
            // line 192
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "image")) {
                // line 193
                echo "
";
                // line 194
                if ((!twig_test_iterable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")))) {
                    // line 195
                    echo "    ";
                    // line 196
                    echo "    ";
                    $context["image"] = array("file" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"));
                } else {
                    // line 198
                    echo "    ";
                    $context["image"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method");
                }
                // line 200
                echo "
<div class=\"dropzone imageselect\" id=\"dropzone-";
                // line 201
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">

    <div class=\"image-right\">
        <div class='imageholder' id=\"thumbnail-";
                // line 204
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
            ";
                // line 205
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method") != "")) {
                    // line 206
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "file"), 120, 120, "c"), "html", null, true);
                    echo "\" width=\"120\" height=\"120\">
            ";
                } else {
                    // line 208
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png\" width=\"120\" height=\"120\">
            ";
                }
                // line 210
                echo "        </div>
    </div>
    <div class=\"image-container\">

        <label>
            <b>";
                // line 215
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 216
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "html", null, true);
                }
                echo "\"
                data-content=\"";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.upload.image", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        ";
                // line 221
                echo "        <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[file]\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"
            value='";
                // line 222
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file"), "")) : ("")), "html", null, true);
                echo "'
            class='";
                // line 223
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo " imageinput wide'
            accept=\"";
                // line 224
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), "|"), "html", null, true);
                echo "\">

        <p class=\"filetypes\">
            ";
                // line 227
                echo $this->env->getExtension('Bolt')->trans("Allowed filetypes are:");
                echo " <code>";
                echo twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), "</code>, <code>");
                echo "</code>.
        </p>

        ";
                // line 230
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true)) {
                    // line 231
                    echo "
            ";
                    // line 233
                    echo "            ";
                    if ((!twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "attrib")))) {
                        $context["attribs"] = array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "attrib"));
                    } else {
                        $context["attribs"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "attrib");
                    }
                    // line 234
                    echo "
            ";
                    // line 236
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["attribs"]) ? $context["attribs"] : $this->getContext($context, "attribs")));
                    foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
                        // line 237
                        echo "                ";
                        if (((isset($context["attrib"]) ? $context["attrib"] : $this->getContext($context, "attrib")) == "title")) {
                            // line 238
                            echo "                    <label>";
                            echo $this->env->getExtension('Bolt')->trans("Title/Alt Text:");
                            echo " <input type=\"text\" name=\"";
                            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                            echo "[title]\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                            echo "-title\"
                        value='";
                            // line 239
                            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title"), "")) : ("")), "html", null, true);
                            echo "' style='width: 80%;'>
                    </label>
                ";
                        }
                        // line 242
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 243
                    echo "
        ";
                }
                // line 245
                echo "
        <!-- The fileinput-button span is used to style the file input field as button -->
        <div class=\"btn-group\">
            <span class=\"btn btn-info fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 250
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
                <input id=\"fileupload-";
                // line 251
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
                echo "classes/upload/index.php\" accept=\".";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), ",."), "html", null, true);
                echo "\">
            </span>
        </div>

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-";
                // line 256
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "async"), "html", null, true);
                echo "browse/files?key=";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 258
                echo $this->env->getExtension('Bolt')->trans("Select from server");
                echo "
            </a>
        </div>

        ";
                // line 262
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "image");
                // line 263
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) {
                    // line 264
                    echo "        <div class=\"btn-group\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-paper-clip\"></i>
                ";
                    // line 267
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                <span class=\"caret\"></span>
            </a>

            <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 271
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\">
                ";
                    // line 272
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 273
                        echo "                    <li>
                        <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 274
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filesize"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "imagesize"), "html", null, true);
                        echo " px)</small></a>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 277
                    echo "            </ul>
        </div>
        ";
                }
                // line 280
                echo "

        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 282
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

        <!-- Modal \"select from server\"  -->
        <div class=\"modal hide modal-wide\" id=\"selectModal-";
                // line 287
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

            <div class=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 292
                echo $this->env->getExtension('Bolt')->trans("Cancel");
                echo "</button>
            </div>
        </div>



";
                // line 298
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 299
                    echo "
<script type=\"text/javascript\">
    \$(function() {
        bindFileUpload('";
                    // line 302
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "');

        \$(\"#field-";
                    // line 304
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\").autocomplete({
            source: \"";
                    // line 305
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "async"), "html", null, true);
                    echo "filesautocomplete?ext=gif,jpg,jpeg,png\",
            minLength: 2,
            close: function(){
                if (\$('#field-";
                    // line 308
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "').val() != \"\" ) {
                    \$('#thumbnail-";
                    // line 309
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "').html(\"<img src='";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "paths"), "root"), "html", null, true);
                    echo "thumbs/120x120c/\"+encodeURI( \$('#field-";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "').val() )+\"' width='120' height='120'>\");
                } else {
                    \$('#thumbnail-";
                    // line 311
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "').html(\"<img src='";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png' width='120' height='120'>\");
                }
            }
        });

    });
</script>
";
                }
                // line 319
                echo "
    </div>
</div>
";
            }
            // line 323
            echo "


";
            // line 327
            echo "
";
            // line 328
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "file")) {
                // line 329
                echo "<div class=\"dropzone\" id=\"dropzone-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">

    <div class=\"image-container\">

        <label>
            <b>";
                // line 334
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 335
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 336
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.upload.file", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        ";
                // line 340
                echo "        <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"
            value='";
                // line 341
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "html", null, true);
                echo "'
            class='";
                // line 342
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo " imageinput'
            accept=\"";
                // line 343
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), "|"), "html", null, true);
                echo "\">
            <br>

        <p class=\"filetypes\">
            ";
                // line 347
                echo $this->env->getExtension('Bolt')->trans("Allowed filetypes are:");
                echo " <code>";
                echo twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), "</code>, <code>");
                echo "</code>.
        </p>

        <!-- The fileinput-button span is used to style the file input field as button -->
        <div class=\"btn-group\">
            <span class=\"btn btn-info fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 354
                echo $this->env->getExtension('Bolt')->trans("Upload File");
                echo "</span>
                <input id=\"fileupload-";
                // line 355
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
                echo "classes/upload/index.php\"  accept=\".";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), ",."), "html", null, true);
                echo "\">
            </span>
        </div>

        ";
                // line 359
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "other,document");
                // line 360
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) {
                    // line 361
                    echo "            <div class=\"btn-group\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-paper-clip\"></i>
                    ";
                    // line 364
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                    <span class=\"caret\"></span>
                </a>

                <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 368
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\">
                    ";
                    // line 369
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 370
                        echo "                        <li>
                            <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 371
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filesize"), "html", null, true);
                        echo ")</small></a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 374
                    echo "                </ul>
            </div>
        ";
                }
                // line 377
                echo "
        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 378
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

    ";
                // line 382
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 383
                    echo "        <div style=\"clear: left;\" class=\"hide-tablet\"><small>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.upload.filesmall", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                    echo "</small></div>
        <script type=\"text/javascript\">
            \$(function() {
                bindFileUpload('";
                    // line 386
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "');

                \$(\"#field-";
                    // line 388
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\").autocomplete({
                    source: \"";
                    // line 389
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "async"), "html", null, true);
                    echo "filesautocomplete?ext=";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), ","), "html", null, true);
                    echo "\",
                    minLength: 2
                });

            });
        </script>
    ";
                }
                // line 396
                echo "
    </div>
</div>
";
            }
            // line 400
            echo "

";
            // line 403
            echo "
";
            // line 404
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "imagelist")) {
                // line 405
                echo "<label>
    <b>
        ";
                // line 407
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                // line 408
                echo "    </b>
    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 409
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "\"
      data-content=\"";
                // line 410
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.upload.imagelist", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
</label>
<div class=\"imagelistholder dropzone\" id=\"imagelist-";
                // line 412
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
    <div class=\"list\"></div>

    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\" style=\"margin-bottom: 8px;\">
            <i class=\"icon-upload\"></i>
            <span>";
                // line 418
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
            <input id=\"fileupload-";
                // line 419
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"
                   type=\"file\"
                   name=\"fileupload-";
                // line 421
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[]\"
                   data-url=\"";
                // line 422
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
                echo "classes/upload/index.php\"
                   accept=\"";
                // line 423
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), "|"), "html", null, true);
                echo "\">
        </span>

        <br clear=\"all\">

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-";
                // line 429
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "async"), "html", null, true);
                echo "browse/files?key=";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 431
                echo $this->env->getExtension('Bolt')->trans("Select from server");
                echo "
            </a>
        </div>

        ";
                // line 435
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "image");
                // line 436
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) {
                    // line 437
                    echo "        <div class=\"btn-group\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-paper-clip\"></i>
                ";
                    // line 440
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                <span class=\"caret\"></span>
            </a>

            <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 444
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "\">
                ";
                    // line 445
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 446
                        echo "                    <li>
                        <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 447
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "filesize"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "imagesize"), "html", null, true);
                        echo " px)</small></a>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 450
                    echo "            </ul>
        </div>
        ";
                }
                // line 453
                echo "
    </div>
    <textarea name=\"";
                // line 455
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class=\"hide\">";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method", true, true)) {
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "html", null, true);
                }
                echo "</textarea>
    <div class='clearfix'></div>

    <!-- Modal \"select from server\"  -->
    <div class=\"modal hide modal-wide\" id=\"selectModal-";
                // line 459
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-body\">
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 463
                echo $this->env->getExtension('Bolt')->trans("Close");
                echo "</button>
        </div>
    </div>
</div>


<script type=\"text/javascript\">
    \$(function() {

        if(typeof imagelist == \"undefined\") {
            imagelist = [];
        }

        imagelist['";
                // line 476
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "'] = new ImagelistHolder({id: '";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "'});
    });
</script>

";
            }
            // line 481
            echo "

";
            // line 484
            echo "
";
            // line 485
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "filelist")) {
                // line 486
                echo "<label>
    <b>
        ";
                // line 488
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                // line 489
                echo "    </b>
    <span class=\"label info-pop\"
          data-html=\"true\"
          data-title=\"";
                // line 492
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "\"
          data-content=\"";
                // line 493
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.upload.filelist", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">
          ";
                // line 494
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "
    </span>
</label>
<div class=\"filelistholder dropzone\" id=\"filelist-";
                // line 497
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
    <div class=\"list\"></div>
    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\"
              style=\"margin-bottom: 8px;\">

            <i class=\"icon-upload\"></i>
            <span>";
                // line 504
                echo $this->env->getExtension('Bolt')->trans("Upload files");
                echo "</span>
            <input id=\"fileupload-";
                // line 505
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"
                   type=\"file\"
                   name=\"fileupload-";
                // line 507
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[]\"
                   data-url=\"";
                // line 508
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
                echo "classes/upload/index.php\"
                   accept=\"";
                // line 509
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "extensions"), "|"), "html", null, true);
                echo "\">
        </span>
    </div>
    <textarea name=\"";
                // line 512
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class=\"hide\">";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method", true, true)) {
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "html", null, true);
                }
                echo "</textarea>
</div>
<div class='clearfix'></div>

<script type=\"text/javascript\">
    \$(function() {

        if(typeof filelist == \"undefined\") {
            filelist = [];
        }

        filelist['";
                // line 523
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "'] = new FilelistHolder({id: '";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "'});
    });
</script>

";
            }
            // line 528
            echo "
";
            // line 530
            echo "
";
            // line 531
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "video")) {
                // line 532
                echo "
";
                // line 533
                $context["video"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method");
                // line 534
                echo "<div class=\"dropzone video\">

    <div class=\"video-right hide-phone\">
        <div class='imageholder' id=\"thumbnail-";
                // line 537
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" style=\"width: 160px; text-align: center; background-color: #F8F8F8;\">
            ";
                // line 538
                if ((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "")) : (""))) {
                    // line 539
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "thumbnail"), "html", null, true);
                    echo "\" width=\"160\" height=\"120\">
            ";
                } else {
                    // line 541
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png\" width=\"120\" height=\"120\">
            ";
                }
                // line 543
                echo "        </div>
    </div>

    <div class=\"video-container\">
        <label>
            <b>";
                // line 548
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b>
            (<span id=\"video-";
                // line 549
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-text\">";
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) {
                    echo "\"";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "title"), 18);
                    echo "\" by ";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "authorname"), 18);
                }
                echo "</span>)
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 550
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 551
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.upload.video", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>
        <label>";
                // line 553
                echo $this->env->getExtension('Bolt')->trans("URL:");
                echo " <input type=\"url\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[url]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\"
               value='";
                // line 554
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "")) : ("")), "html", null, true);
                echo "' style='width: 60%;'>
        </label>

        <label>";
                // line 557
                echo $this->env->getExtension('Bolt')->trans("Size:");
                echo " <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[width]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-width\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width"), "")) : ("")), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
        x <input type=\"number\" name=\"";
                // line 558
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[height]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-height\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height"), "")) : ("")), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
            pixels.
            <span class=\"hide-tablet\"><a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\" style='float: right;'>";
                // line 560
                echo $this->env->getExtension('Bolt')->trans("Preview video");
                echo "</a></span>
        </label>

        <input type=\"hidden\" name=\"";
                // line 563
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[ratio]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-ratio\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio"), "")) : ("")), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 564
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[title]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-title\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 565
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[authorname]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-author_name\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 566
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[authorurl]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-author_url\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 567
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[html]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-html\" value=\"";
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "html"));
                }
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 568
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[thumbnail]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-thumbnail\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "")) : ("")), "html", null, true);
                echo "\">

        <script type=\"text/javascript\">
            bindVideoEmbed('";
                // line 571
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "');
        </script>
    </div>
</div>

<!-- Modal video preview -->
<div class=\"modal hide\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

    <div class=\"modal-body\">
        ";
                // line 580
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) {
                    // line 581
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "html"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 583
                    echo "        <p>";
                    echo $this->env->getExtension('Bolt')->trans("No video url is set, no video to show.");
                    echo "</p>
        ";
                }
                // line 585
                echo "    </div>
    <div class=\"modal-footer\">
        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 587
                echo $this->env->getExtension('Bolt')->trans("Close");
                echo "</button>
    </div>
</div>


";
            }
            // line 593
            echo "




";
            // line 599
            echo "
    ";
            // line 600
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "geolocation")) {
                // line 601
                echo "
        ";
                // line 602
                $context["geolocation"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method");
                // line 603
                echo "        <div class=\"dropzone geolocation\">

            <div class=\"map-right hide-phone\">
                <div class='mapholder' id=\"map-";
                // line 606
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" style=\"width: 200px;\">
                        <img src=\"";
                // line 607
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map"), "")) : ("")), "html", null, true);
                echo "\" width=\"200\" height=\"200\">
                </div>
            </div>

            <div class=\"map-container\">
                <label>
                    <b>";
                // line 613
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b>
                    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 614
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "\"
                          data-content=\"";
                // line 615
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.geolocation", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
                </label>
                <label>";
                // line 617
                echo $this->env->getExtension('Bolt')->trans("Address lookup:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-address\"
                    value='";
                // line 618
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address"), "")) : ("")), "html", null, true);
                echo "' style='width: 60%;'>
                </label>
                <label>";
                // line 620
                echo $this->env->getExtension('Bolt')->trans("Latitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[latitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-latitude\"
                    value='";
                // line 621
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                 - ";
                // line 622
                echo $this->env->getExtension('Bolt')->trans("Longitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[longitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-longitude\"
                    value='";
                // line 623
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                </label>
                <p>";
                // line 625
                echo $this->env->getExtension('Bolt')->trans("Matched address:");
                echo "
                <span id=\"";
                // line 626
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-reversegeo\"> ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "")) : ("")), "html", null, true);
                echo "</span></p>
                <input type=\"hidden\" name=\"";
                // line 627
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "[formatted_address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-formatted_address\"
                       value='";
                // line 628
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                <script type=\"text/javascript\">
                    \$(function() {
                        bindGeolocation('";
                // line 631
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "")) : ("")), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "")) : ("")), "html", null, true);
                echo "');
                    });
                </script>
            </div>
        </div>
<script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?sensor=false\"></script>
<script type=\"text/javascript\" src=\"";
                // line 637
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "app"), "html", null, true);
                echo "view/js/jquery.gomap-1.3.2.min.js\"></script>

    ";
            }
            // line 640
            echo "





";
            // line 647
            echo "
";
            // line 648
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "html")) {
                // line 649
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 650
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo " ckeditor'
    style='";
                // line 651
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "height"), "html", null, true);
                }
                echo "'
    ";
                // line 652
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    echo "required";
                }
                echo ">
    ";
                // line 653
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "html", null, true);
                }
                // line 654
                echo "</textarea>
";
            }
            // line 656
            echo "
";
            // line 658
            echo "
";
            // line 659
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "textarea")) {
                // line 660
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 661
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo "'
    style='";
                // line 662
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "height"), "html", null, true);
                }
                echo "'
    ";
                // line 663
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    echo "required";
                }
                // line 664
                echo "    >";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "html", null, true);
                }
                echo "</textarea>
";
            }
            // line 666
            echo "

";
            // line 669
            echo "
";
            // line 670
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "markdown")) {
                // line 671
                echo "    <label>
        <b>";
                // line 672
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b>
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 673
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "html", null, true);
                }
                echo "\"
              data-content=\"";
                // line 674
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.markdown", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>

    </label>
    <textarea id=\"";
                // line 677
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo "'
              style='";
                // line 678
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "height"), "html", null, true);
                    echo " !important;";
                }
                echo "' ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "required"))) {
                    echo "required";
                }
                // line 679
                echo "            >";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "html", null, true);
                }
                echo "</textarea>

    <textarea id=\"jquery-catchpaste-textarea\" style=\"position: absolute; width: 0 !important; height: 0; left: -10000px;\"></textarea>

";
                // line 691
                echo "
";
            }
            // line 693
            echo "

";
            // line 696
            echo "
";
            // line 697
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "date")) {
                // line 698
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 699
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-date\"
    value='";
                // line 700
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pretty"]) ? $context["pretty"] : $this->getContext($context, "pretty")), "datepickervalue", array(0 => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "method"), "html", null, true);
                echo "'
    class='";
                // line 701
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"hidden\" name=\"";
                // line 702
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "\">
<script type=\"text/javascript\">
    \$(function() {
        \$('#";
                // line 705
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-date').on('change.bolt', function(){
            var date = \$('#";
                // line 706
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-date').datepicker( \"getDate\" );
            \$('#";
                // line 707
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date));
        }).trigger('change.bolt');;
    });
</script>
";
            }
            // line 712
            echo "

";
            // line 715
            echo "
";
            // line 716
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "type") == "datetime")) {
                // line 717
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 718
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-date\"
    value='";
                // line 719
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pretty"]) ? $context["pretty"] : $this->getContext($context, "pretty")), "datepickervalue", array(0 => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "method"), "html", null, true);
                echo "'
    class='";
                // line 720
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"time\" name=\"";
                // line 721
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-timeformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-time\"
    value='";
                // line 722
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method") && ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method") > "0001-01-01 00:00:00"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "H:i"), "html", null, true);
                }
                echo "'
    class='";
                // line 723
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "class"), "html", null, true);
                }
                echo " timepicker'>
<input type=\"hidden\" name=\"";
                // line 724
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "\">
<script type=\"text/javascript\">
    \$(function() {
        \$('#";
                // line 727
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-date, #";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-time').on('change.bolt', function(){
            var date = \$('#";
                // line 728
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-date').datepicker(\"getDate\");
            var time = \$('#";
                // line 729
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "-time').val() + \":00\";
            \$('#";
                // line 730
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
        }).trigger('change.bolt');;
    });
</script>
";
            }
            // line 735
            echo "

";
            // line 738
            echo "
";
            // line 739
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "postfix"))))) {
                // line 740
                echo "    <div class='clearfix'>
        ";
                // line 741
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "postfix");
                echo "
    </div>
";
            }
            // line 744
            echo "
";
            // line 745
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator", array(), "any", true, true) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "separator") == true))) {
                // line 746
                echo "    <hr>
";
            }
            // line 748
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 751
        echo "
";
    }

    public function getTemplateName()
    {
        return "_sub_editfields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2146 => 751,  2138 => 748,  2134 => 746,  2132 => 745,  2129 => 744,  2123 => 741,  2120 => 740,  2118 => 739,  2115 => 738,  2111 => 735,  2103 => 730,  2099 => 729,  2095 => 728,  2089 => 727,  2079 => 724,  2073 => 723,  2067 => 722,  2061 => 721,  2055 => 720,  2051 => 719,  2045 => 718,  2036 => 717,  2034 => 716,  2031 => 715,  2027 => 712,  2019 => 707,  2015 => 706,  2011 => 705,  2001 => 702,  1995 => 701,  1991 => 700,  1985 => 699,  1976 => 698,  1974 => 697,  1971 => 696,  1967 => 693,  1963 => 691,  1953 => 679,  1943 => 678,  1933 => 677,  1925 => 674,  1917 => 673,  1909 => 672,  1906 => 671,  1904 => 670,  1901 => 669,  1897 => 666,  1889 => 664,  1885 => 663,  1878 => 662,  1870 => 661,  1861 => 660,  1859 => 659,  1856 => 658,  1853 => 656,  1849 => 654,  1845 => 653,  1839 => 652,  1832 => 651,  1824 => 650,  1815 => 649,  1813 => 648,  1810 => 647,  1802 => 640,  1796 => 637,  1783 => 631,  1777 => 628,  1771 => 627,  1765 => 626,  1761 => 625,  1756 => 623,  1748 => 622,  1744 => 621,  1736 => 620,  1731 => 618,  1723 => 617,  1716 => 615,  1708 => 614,  1700 => 613,  1691 => 607,  1687 => 606,  1682 => 603,  1680 => 602,  1677 => 601,  1675 => 600,  1672 => 599,  1665 => 593,  1656 => 587,  1652 => 585,  1646 => 583,  1640 => 581,  1638 => 580,  1626 => 571,  1616 => 568,  1606 => 567,  1598 => 566,  1590 => 565,  1582 => 564,  1574 => 563,  1568 => 560,  1559 => 558,  1549 => 557,  1543 => 554,  1535 => 553,  1528 => 551,  1520 => 550,  1509 => 549,  1501 => 548,  1494 => 543,  1488 => 541,  1482 => 539,  1480 => 538,  1476 => 537,  1471 => 534,  1469 => 533,  1466 => 532,  1464 => 531,  1461 => 530,  1458 => 528,  1448 => 523,  1428 => 512,  1422 => 509,  1418 => 508,  1414 => 507,  1409 => 505,  1405 => 504,  1395 => 497,  1389 => 494,  1385 => 493,  1377 => 492,  1372 => 489,  1366 => 488,  1362 => 486,  1360 => 485,  1357 => 484,  1353 => 481,  1343 => 476,  1327 => 463,  1320 => 459,  1307 => 455,  1303 => 453,  1298 => 450,  1281 => 447,  1278 => 446,  1274 => 445,  1270 => 444,  1263 => 440,  1258 => 437,  1255 => 436,  1253 => 435,  1246 => 431,  1237 => 429,  1228 => 423,  1224 => 422,  1220 => 421,  1215 => 419,  1211 => 418,  1202 => 412,  1195 => 410,  1187 => 409,  1184 => 408,  1178 => 407,  1174 => 405,  1172 => 404,  1169 => 403,  1165 => 400,  1159 => 396,  1147 => 389,  1143 => 388,  1138 => 386,  1131 => 383,  1129 => 382,  1122 => 378,  1119 => 377,  1114 => 374,  1099 => 371,  1096 => 370,  1092 => 369,  1088 => 368,  1081 => 364,  1076 => 361,  1073 => 360,  1071 => 359,  1058 => 355,  1054 => 354,  1042 => 347,  1035 => 343,  1029 => 342,  1025 => 341,  1018 => 340,  1010 => 336,  1002 => 335,  994 => 334,  985 => 329,  983 => 328,  980 => 327,  975 => 323,  969 => 319,  956 => 311,  947 => 309,  943 => 308,  937 => 305,  933 => 304,  928 => 302,  923 => 299,  921 => 298,  912 => 292,  904 => 287,  896 => 282,  892 => 280,  887 => 277,  870 => 274,  867 => 273,  863 => 272,  859 => 271,  852 => 267,  847 => 264,  844 => 263,  842 => 262,  835 => 258,  826 => 256,  812 => 251,  808 => 250,  801 => 245,  797 => 243,  791 => 242,  785 => 239,  776 => 238,  773 => 237,  768 => 236,  765 => 234,  758 => 233,  755 => 231,  753 => 230,  745 => 227,  739 => 224,  733 => 223,  729 => 222,  722 => 221,  714 => 217,  706 => 216,  698 => 215,  691 => 210,  685 => 208,  679 => 206,  677 => 205,  673 => 204,  667 => 201,  664 => 200,  660 => 198,  656 => 196,  654 => 195,  652 => 194,  649 => 193,  647 => 192,  644 => 191,  641 => 189,  637 => 187,  622 => 185,  618 => 184,  613 => 182,  607 => 181,  598 => 180,  596 => 179,  593 => 178,  590 => 176,  585 => 173,  579 => 172,  567 => 170,  555 => 168,  552 => 167,  548 => 166,  537 => 165,  528 => 161,  522 => 160,  517 => 157,  511 => 156,  499 => 154,  487 => 152,  484 => 151,  480 => 150,  469 => 149,  459 => 147,  456 => 146,  453 => 145,  450 => 144,  443 => 142,  440 => 141,  437 => 140,  431 => 138,  428 => 137,  425 => 136,  422 => 135,  420 => 134,  417 => 133,  414 => 131,  410 => 129,  405 => 126,  401 => 124,  399 => 123,  388 => 119,  383 => 117,  372 => 109,  360 => 106,  353 => 101,  351 => 100,  339 => 95,  331 => 94,  326 => 93,  321 => 91,  317 => 88,  302 => 84,  296 => 83,  289 => 82,  284 => 78,  272 => 74,  269 => 73,  267 => 72,  264 => 71,  261 => 69,  256 => 66,  245 => 64,  239 => 63,  235 => 62,  226 => 60,  220 => 59,  217 => 58,  215 => 57,  209 => 54,  205 => 52,  198 => 51,  194 => 50,  188 => 49,  184 => 48,  178 => 47,  175 => 46,  169 => 45,  166 => 44,  164 => 43,  158 => 40,  147 => 37,  143 => 36,  137 => 35,  133 => 34,  127 => 33,  124 => 32,  118 => 31,  115 => 30,  113 => 29,  110 => 28,  94 => 21,  90 => 20,  80 => 19,  64 => 17,  51 => 15,  46 => 14,  44 => 13,  41 => 12,  31 => 6,  28 => 5,  26 => 4,  519 => 240,  509 => 233,  504 => 231,  486 => 216,  471 => 206,  467 => 148,  446 => 143,  434 => 139,  418 => 171,  396 => 151,  390 => 149,  380 => 147,  378 => 146,  369 => 140,  365 => 139,  361 => 138,  354 => 134,  347 => 130,  340 => 126,  334 => 123,  324 => 92,  318 => 113,  308 => 85,  306 => 110,  299 => 106,  292 => 102,  285 => 98,  278 => 77,  263 => 91,  259 => 90,  253 => 89,  249 => 65,  244 => 85,  229 => 61,  224 => 82,  222 => 81,  216 => 80,  212 => 56,  208 => 77,  199 => 76,  195 => 75,  187 => 74,  182 => 73,  180 => 72,  177 => 71,  167 => 63,  165 => 62,  161 => 42,  154 => 38,  150 => 59,  144 => 57,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 50,  116 => 42,  114 => 41,  106 => 25,  101 => 22,  96 => 37,  92 => 36,  86 => 34,  82 => 33,  76 => 18,  73 => 29,  71 => 28,  65 => 25,  58 => 16,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 9,  35 => 10,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
