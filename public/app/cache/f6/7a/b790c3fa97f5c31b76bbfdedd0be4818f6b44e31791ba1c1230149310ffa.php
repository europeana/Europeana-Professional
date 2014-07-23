<?php

/* edituser.twig */
class __TwigTemplate_f67ab790c3fa97f5c31b76bbfdedd0be4818f6b44e31791ba1c1230149310ffa extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "form_bolt_layout.twig"));
        // line 3
        echo "
<h1>";
        // line 4
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>

<form action=\"#\" method=\"post\" class=\"form-inline\" autocomplete=\"off\">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <input type=\"submit\" value=\"";
        // line 9
        echo $this->env->getExtension('Bolt')->trans("Save");
        echo "\" name=\"submit\" class=\"btn btn-primary\" />
</form>



";
        // line 14
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "edituser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  37 => 9,  32 => 7,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
