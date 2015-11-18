<?php

/* :Szablony:about.html.twig */
class __TwigTemplate_51b685e05bb471c9ddaa0545b4d126ad1c9d552ee9be95849d6db264e0edc4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Szablony:about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e76b703b5393c35b4c77aee011bf5b10be74c28908e21d34bdcf12fa3dab540 = $this->env->getExtension("native_profiler");
        $__internal_0e76b703b5393c35b4c77aee011bf5b10be74c28908e21d34bdcf12fa3dab540->enter($__internal_0e76b703b5393c35b4c77aee011bf5b10be74c28908e21d34bdcf12fa3dab540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e76b703b5393c35b4c77aee011bf5b10be74c28908e21d34bdcf12fa3dab540->leave($__internal_0e76b703b5393c35b4c77aee011bf5b10be74c28908e21d34bdcf12fa3dab540_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d94d97ec8d5ed7c48d07f469e65b9e1e492638a3b10d1581e0bb17bca9bb485 = $this->env->getExtension("native_profiler");
        $__internal_3d94d97ec8d5ed7c48d07f469e65b9e1e492638a3b10d1581e0bb17bca9bb485->enter($__internal_3d94d97ec8d5ed7c48d07f469e65b9e1e492638a3b10d1581e0bb17bca9bb485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1> Wolololo</h1>
";
        
        $__internal_3d94d97ec8d5ed7c48d07f469e65b9e1e492638a3b10d1581e0bb17bca9bb485->leave($__internal_3d94d97ec8d5ed7c48d07f469e65b9e1e492638a3b10d1581e0bb17bca9bb485_prof);

    }

    public function getTemplateName()
    {
        return ":Szablony:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1> Wolololo</h1>*/
/* {% endblock %}*/
