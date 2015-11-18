<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6c07b2e292acbfd67294ab455fc699af3302e77b3aa1a95b06585f917728c471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dfed756d8939e47842192bd0eb79a46bfe17db8b43f8d3fb4e051b95a4d8699 = $this->env->getExtension("native_profiler");
        $__internal_8dfed756d8939e47842192bd0eb79a46bfe17db8b43f8d3fb4e051b95a4d8699->enter($__internal_8dfed756d8939e47842192bd0eb79a46bfe17db8b43f8d3fb4e051b95a4d8699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dfed756d8939e47842192bd0eb79a46bfe17db8b43f8d3fb4e051b95a4d8699->leave($__internal_8dfed756d8939e47842192bd0eb79a46bfe17db8b43f8d3fb4e051b95a4d8699_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dae29cb7be61cc832843e5c747247b7708704eeddf7a1280febcb676bbc3fb4c = $this->env->getExtension("native_profiler");
        $__internal_dae29cb7be61cc832843e5c747247b7708704eeddf7a1280febcb676bbc3fb4c->enter($__internal_dae29cb7be61cc832843e5c747247b7708704eeddf7a1280febcb676bbc3fb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dae29cb7be61cc832843e5c747247b7708704eeddf7a1280febcb676bbc3fb4c->leave($__internal_dae29cb7be61cc832843e5c747247b7708704eeddf7a1280febcb676bbc3fb4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aec05bd8bfdcdf38b06d8709ac81d23f6f493a11d737aecdbb032ffa4a9408b8 = $this->env->getExtension("native_profiler");
        $__internal_aec05bd8bfdcdf38b06d8709ac81d23f6f493a11d737aecdbb032ffa4a9408b8->enter($__internal_aec05bd8bfdcdf38b06d8709ac81d23f6f493a11d737aecdbb032ffa4a9408b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aec05bd8bfdcdf38b06d8709ac81d23f6f493a11d737aecdbb032ffa4a9408b8->leave($__internal_aec05bd8bfdcdf38b06d8709ac81d23f6f493a11d737aecdbb032ffa4a9408b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_31aafdaada390a3de531bad65c97d413e0f5e9fa646fd80f18690ff3f81e086d = $this->env->getExtension("native_profiler");
        $__internal_31aafdaada390a3de531bad65c97d413e0f5e9fa646fd80f18690ff3f81e086d->enter($__internal_31aafdaada390a3de531bad65c97d413e0f5e9fa646fd80f18690ff3f81e086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_31aafdaada390a3de531bad65c97d413e0f5e9fa646fd80f18690ff3f81e086d->leave($__internal_31aafdaada390a3de531bad65c97d413e0f5e9fa646fd80f18690ff3f81e086d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
