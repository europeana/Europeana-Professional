<?php

/* index.twig */
class __TwigTemplate_d03a4e4617061b013ded432088c41c41e6669102d85577afe35bbb9112f51e42 extends Twig_Template
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
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"large-8 columns\">

        <article>
            ";
        // line 9
        if (array_key_exists("record", $context)) {
            // line 10
            echo "
                ";
            // line 13
            echo "                ";
            $context["home"] = (isset($context["record"]) ? $context["record"] : null);
            // line 14
            echo "                ";
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title"))))) {
                // line 15
                echo "                    <h1>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title"), "html", null, true);
                echo "</h1>
                ";
            }
            // line 17
            echo "
                ";
            // line 18
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image"))))) {
                // line 19
                echo "                    <div class=\"large-5 columns imageholder\">
                        <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image")), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image"), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 25
            echo "
                ";
            // line 27
            echo "                ";
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction"))))) {
                // line 28
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction"), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser"))))) {
                // line 30
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser"), "html", null, true);
                echo "
                ";
            } elseif ((!twig_test_empty((isset($context["home"]) ? $context["home"] : null)))) {
                // line 32
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "excerpt", array(0 => 500), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 34
            echo "
                ";
            // line 35
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link"))))) {
                // line 36
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link"), "html", null, true);
                echo "\">Read more &raquo;</a>
                ";
            }
            // line 38
            echo "
                ";
            // line 41
            echo "
            ";
        } else {
            // line 43
            echo "                <p>
                    ";
            // line 44
            echo $this->env->getExtension('Bolt')->trans("Content for home not found!");
            echo " 
                    ";
            // line 45
            echo $this->env->getExtension('Bolt')->trans("You should set 'homepage:' in your 'app/config/config.yml' to an existing record.");
            echo "
                </p>
            ";
        }
        // line 48
        echo "        </article>

        <hr>

        <h4>";
        // line 52
        echo $this->env->getExtension('Bolt')->trans("Latest entries");
        echo "</h4>

        ";
        // line 58
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("entries/latest/6", array("paging" => true) );
        // line 59
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 60
            echo "            <article>

                ";
            // line 62
            if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image") != "")) {
                // line 63
                echo "                    <div class=\"large-4 imageholder\">
                        <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image")), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image"), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 69
            echo "
                <h3><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
            echo "</a></h3>

                <p>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "excerpt", array(0 => 220), "method"), "html", null, true);
            echo "</p>

            </article>

            <hr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
        ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->
    ";
        // line 88
        echo "    ";
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 89
        echo "
<!-- End Main Content and Sidebar -->



";
        // line 94
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 94,  199 => 89,  196 => 88,  187 => 80,  184 => 79,  171 => 72,  164 => 70,  161 => 69,  154 => 65,  150 => 64,  147 => 63,  145 => 62,  141 => 60,  136 => 59,  132 => 58,  127 => 52,  121 => 48,  115 => 45,  111 => 44,  108 => 43,  104 => 41,  101 => 38,  95 => 36,  93 => 35,  90 => 34,  84 => 32,  78 => 30,  72 => 28,  69 => 27,  66 => 25,  59 => 21,  55 => 20,  52 => 19,  50 => 18,  47 => 17,  41 => 15,  38 => 14,  35 => 13,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
