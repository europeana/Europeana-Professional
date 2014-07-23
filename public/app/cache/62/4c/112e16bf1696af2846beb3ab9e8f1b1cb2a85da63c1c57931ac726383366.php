<?php

/* dbcheck.twig */
class __TwigTemplate_624c112e16bf1696af2846beb3ab9e8f1b1cb2a85da63c1c57931ac726383366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (array_key_exists("modifications", $context)) {
            // line 4
            echo "        <h4>";
            echo $this->env->getExtension('Bolt')->trans("Modifications made to the database:");
            echo "</h4>
        <ul>
        ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modifications"]) ? $context["modifications"] : $this->getContext($context, "modifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "            <li>";
                echo $this->env->getExtension('Bolt')->decorateTT((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
        <p>
            ";
            // line 11
            echo $this->env->getExtension('Bolt')->trans("Your database is now up to date.");
            echo "
        </p>
        <form action=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("dbcheck");
            echo "\" method=\"GET\">
            <p>
                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 15
            echo $this->env->getExtension('Bolt')->trans("Check again");
            echo "</button>
            </p>
        </form>
    ";
        } elseif ((isset($context["required_modifications"]) ? $context["required_modifications"] : $this->getContext($context, "required_modifications"))) {
            // line 19
            echo "        <h4>";
            echo $this->env->getExtension('Bolt')->trans("Modifications needed:");
            echo "</h4>
        <ul>
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["required_modifications"]) ? $context["required_modifications"] : $this->getContext($context, "required_modifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "            <li>";
                echo $this->env->getExtension('Bolt')->decorateTT((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>
        <form action=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("dbupdate");
            echo "\" method=\"POST\">
            <p>
                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 27
            echo $this->env->getExtension('Bolt')->trans("Update the database");
            echo "</button>
            </p>
        </form>
    ";
        } else {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("Your database is already up to date.");
            echo "
        ";
            // line 32
            if ($this->env->getExtension('Bolt')->isAllowed("prefill")) {
                // line 33
                echo "        <br><br><p><b>";
                echo $this->env->getExtension('Bolt')->trans("Tip:");
                echo "</b>
        ";
                // line 34
                echo $this->env->getExtension('Bolt')->trans("Add some sample <a href='%url%' class='btn btn-small'>Records with Loripsum text</a>", array("%url%" => $this->env->getExtension('routing')->getPath("prefill")));
                echo "
        </p>
        ";
            }
            // line 37
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "dbcheck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  120 => 34,  115 => 33,  113 => 32,  108 => 31,  101 => 27,  96 => 25,  93 => 24,  84 => 22,  80 => 21,  74 => 19,  67 => 15,  62 => 13,  57 => 11,  53 => 9,  44 => 7,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
