<?php

/* dashboard.twig */
class __TwigTemplate_b230ac2859f63d2ccd49522babd6cc38a57cb49f70e890e5d94b60035fc5d5eb extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span8\">

        <h1><strong>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("Dashboard");
        echo "</strong></h1>

";
        // line 8
        if ((isset($context["suggestloripsum"]) ? $context["suggestloripsum"] : null)) {
            // line 9
            echo "
    <div class=\"alert alert-info\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 12
            echo $this->env->getExtension('Bolt')->trans("It seems there's no content in the database.");
            echo "
        ";
            // line 13
            if ($this->env->getExtension('Bolt')->isAllowed("prefill")) {
                // line 14
                echo "        ";
                echo $this->env->getExtension('Bolt')->trans("To get started quickly, <a href='%url%'>add some Lorem Ipsum dummy content</a>.", array("%url%" => $this->env->getExtension('routing')->getPath("prefill", array("force" => 1))));
                echo "
        ";
            }
            // line 16
            echo "    </div>

";
        }
        // line 19
        echo "
    <div class=\"quicklinks\">
    ";
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method")) > 3)) {
            // line 22
            echo "        <div class=\"btn-group\">
          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 24
            echo $this->env->getExtension('Bolt')->trans("Add …");
            echo "
            <span class=\"caret\"></span>
          </a>
        <ul class=\"dropdown-menu\">
            ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 29
                echo "            ";
                if ($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null)) . ":create"))) {
                    // line 30
                    echo "            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null), "id" => "")), "html", null, true);
                    echo "\">
                <i class=\"icon-plus\"></i> ";
                    // line 31
                    echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
                    echo "
            </a></li>
            ";
                }
                // line 34
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </ul>
    </div>
    ";
        } else {
            // line 38
            echo "        <div class=\"btn-group\">
        ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 40
                echo "            ";
                if ($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null)) . ":create"))) {
                    // line 41
                    echo "            <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => (isset($context["contenttypeslug"]) ? $context["contenttypeslug"] : null), "id" => "")), "html", null, true);
                    echo "\">
                <i class=\"icon-plus\"></i> ";
                    // line 42
                    echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
                    echo "
            </a>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
    ";
        }
        // line 48
        echo "    </div>

    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest"]) ? $context["latest"] : null));
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
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 51
            echo "
        ";
            // line 52
            if ((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null)) {
                // line 53
                echo "
            <h3>
                <span>
                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => (isset($context["contenttype"]) ? $context["contenttype"] : null))), "html", null, true);
                echo "\" class='morelink'>
                        ";
                // line 57
                echo $this->env->getExtension('Bolt')->trans("More %contenttypes% »", array("%contenttypes%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"), (isset($context["contenttype"]) ? $context["contenttype"] : null), array(), "array"), "name")));
                echo "
                    </a>
                </span>
                ";
                // line 60
                echo $this->env->getExtension('Bolt')->trans("Recently edited %contenttypes%", array("%contenttypes%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "contenttypes"), "method"), (isset($context["contenttype"]) ? $context["contenttype"] : null), array(), "array"), "name")));
                echo "
            </h3>

            <table class='dashboardlisting'>
                ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                    // line 65
                    echo "
                    ";
                    // line 66
                    $context["editable"] = $this->env->getExtension('Bolt')->isAllowed("edit", (isset($context["content"]) ? $context["content"] : null));
                    // line 67
                    echo "                    ";
                    $template = $this->env->resolveTemplate(array(0 => (("custom/listing/" . $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug")) . ".twig"), 1 => "_sub_listing.twig"));
                    $template->display(array_merge($context, array("excerptlength" => 280, "thumbsize" => 54, "compact" => true)));
                    // line 68
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            </table>

        ";
            }
            // line 73
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "

    </div><!-- /span8 -->

    <aside class=\"span4\">


    <noscript>
        <section>
            <h2>";
        // line 84
        echo $this->env->getExtension('Bolt')->trans("Javascript disabled");
        echo "</h2>
            <p>";
        // line 85
        echo $this->env->getExtension('Bolt')->trans("Javascript is currently disabled in your browser. Most functionality in Bolt will work without it, but for greater ease of use we recommend you enable Javascript in your browser.");
        echo "</p>
        </section>
    </noscript>

    ";
        // line 89
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("dashboardnews"));
        echo "

    ";
        // line 91
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("showstack", array("items" => 7, "options" => "full")));
        echo "

    ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->widget("dashboard", "right_first"), "html", null, true);
        echo "

    <div id=\"latestactivity\">
        ";
        // line 96
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("latestactivity"));
        echo "
    </div>
    <div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>

    </aside><!-- /span4 -->
</div>


";
        // line 104
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 60,  168 => 57,  164 => 56,  159 => 53,  157 => 52,  154 => 51,  137 => 50,  133 => 48,  129 => 46,  123 => 45,  117 => 42,  112 => 41,  109 => 40,  105 => 39,  102 => 38,  97 => 35,  91 => 34,  85 => 31,  80 => 30,  77 => 29,  73 => 28,  66 => 24,  62 => 22,  60 => 21,  56 => 19,  51 => 16,  45 => 14,  43 => 13,  39 => 12,  34 => 9,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
