<?php

/* :Szablony:register.html.twig */
class __TwigTemplate_85c8b482b084c1b6312cd497f1c4fb90ada8638b61c27a1d7cd6f6023a565475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Szablony:register.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d11ee73b1a8b2908895bd9e5a57d07a994bb4ad434258aae507302b7a2a092bf = $this->env->getExtension("native_profiler");
        $__internal_d11ee73b1a8b2908895bd9e5a57d07a994bb4ad434258aae507302b7a2a092bf->enter($__internal_d11ee73b1a8b2908895bd9e5a57d07a994bb4ad434258aae507302b7a2a092bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d11ee73b1a8b2908895bd9e5a57d07a994bb4ad434258aae507302b7a2a092bf->leave($__internal_d11ee73b1a8b2908895bd9e5a57d07a994bb4ad434258aae507302b7a2a092bf_prof);

    }

    public function getTemplateName()
    {
        return ":Szablony:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
