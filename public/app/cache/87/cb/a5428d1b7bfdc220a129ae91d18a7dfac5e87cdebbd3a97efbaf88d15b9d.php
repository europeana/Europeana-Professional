<?php

/* _sub_listing.twig */
class __TwigTemplate_87cba5428d1b7bfdc220a129ae91d18a7dfac5e87cdebbd3a97efbaf88d15b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_listing-base.twig");

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_listing-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_listing_columns($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_columns", $context, $blocks);
    }

    // line 5
    public function block_listing_header($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_header", $context, $blocks);
    }

    // line 7
    public function block_listing_id($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_id", $context, $blocks);
    }

    // line 9
    public function block_listing_content($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_content", $context, $blocks);
    }

    // line 11
    public function block_listing_meta($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_meta", $context, $blocks);
    }

    // line 13
    public function block_listing_actions($context, array $blocks = array())
    {
        $this->displayParentBlock("listing_actions", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "_sub_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  57 => 11,  51 => 9,  45 => 7,  39 => 5,  33 => 3,);
    }
}
