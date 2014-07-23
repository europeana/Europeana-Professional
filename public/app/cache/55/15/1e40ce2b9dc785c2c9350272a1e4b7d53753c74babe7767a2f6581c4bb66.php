<?php

/* login.twig */
class __TwigTemplate_55151e40ce2b9dc785c2c9350272a1e4b7d53753c74babe7767a2f6581c4bb66 extends Twig_Template
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
        $this->env->loadTemplate("_header_basic.twig")->display($context);
        // line 2
        echo "
<div class=\"view-site\">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("View site");
        echo "</a>
</div>

<div class=\"row-fluid\">
    <div class=\"span6 offset3 logincontainer\">

        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
        echo "view/img/bolt-logo.png\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

        ";
        // line 12
        $this->env->loadTemplate("_messages.twig")->display($context);
        // line 13
        echo "
        <form class=\"well loginform\" method=\"post\">

            <label>";
        // line 16
        echo $this->env->getExtension('Bolt')->trans("Username");
        echo "</label>
            <div class=\"input-prepend\">
                <span class=\"add-on\"><i class=\"icon-user\"></i></span>
                <input type=\"text\" name=\"username\" placeholder=\"";
        // line 19
        echo $this->env->getExtension('Bolt')->trans("Your username");
        echo " …\" ";
        if (array_key_exists("username", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
            </div>

            <div class=\"password\">
                <label>
                    ";
        // line 24
        echo $this->env->getExtension('Bolt')->trans("Password");
        echo "
                    <span class=\"togglepass show\"><i class=\"icon-eye-open\"></i> ";
        // line 25
        echo $this->env->getExtension('Bolt')->trans("Show");
        echo "</span>
                    <span class=\"togglepass hide\"><i class=\"icon-eye-close\"></i> ";
        // line 26
        echo $this->env->getExtension('Bolt')->trans("Hide");
        echo "</span>
                </label>
                <div class=\"input-prepend\" >
                    <span class=\"add-on\"><i class=\"icon-key\"></i></span>
                    <input type=\"password\" name=\"password\" placeholder=\"";
        // line 30
        echo $this->env->getExtension('Bolt')->trans("Your password");
        echo " …\">

                </div>
            </div>

            <br>
            <p style=\"margin-top: 0px;\" class=\"login\">
                <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"login\"><i class=\"icon-signin\"></i> ";
        // line 37
        echo $this->env->getExtension('Bolt')->trans("Log on");
        echo "</button>
                <button type=\"button\" class=\"btn btn-link forgot\" style=\"float: right;\"> ";
        // line 38
        echo $this->env->getExtension('Bolt')->trans("I forgot my password…");
        echo "</button>
            </p>
            <p style=\"margin-top: 0px; display: none;\" class=\"reset\">
                <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"reset\"><i class=\"icon-envelope\"></i> ";
        // line 41
        echo $this->env->getExtension('Bolt')->trans("Reset my password");
        echo "</button>
                <button type=\"button\" class=\"btn btn-link remembered\" style=\"float: right;\"> ";
        // line 42
        echo $this->env->getExtension('Bolt')->trans("Back to login");
        echo "</button>
            </p>

        </form>

        <blockquote class='quote'>";
        // line 47
        echo $this->env->getExtension('Bolt')->randomquote();
        echo "</blockquote>

    </div>

</div>


<script type=\"text/javascript\">
    \$(function() {
        \$('.forgot').bind('click', function(e){
            \$('.login, .password').slideUp('slow');
            \$('.reset').slideDown('slow');
        });
        \$('.remembered').bind('click', function(e){
            \$('.login, .password').slideDown('slow');
            \$('.reset').slideUp('slow');
        });
    });
</script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  107 => 42,  103 => 41,  97 => 38,  93 => 37,  83 => 30,  76 => 26,  72 => 25,  68 => 24,  54 => 19,  48 => 16,  43 => 13,  41 => 12,  36 => 10,  25 => 4,  21 => 2,  19 => 1,);
    }
}
