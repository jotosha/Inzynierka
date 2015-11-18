<?php

/* :Szablony:login.html.twig */
class __TwigTemplate_cd1bb21230553ef453cb8455d9608ffa3f5346ea9cc5d5906f0d506a2da513a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Szablony:login.html.twig", 1);
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
        $__internal_db4661ba17e70cbf319ee64ccce47bdc1f1057dd479d534a5a3bf0031706a322 = $this->env->getExtension("native_profiler");
        $__internal_db4661ba17e70cbf319ee64ccce47bdc1f1057dd479d534a5a3bf0031706a322->enter($__internal_db4661ba17e70cbf319ee64ccce47bdc1f1057dd479d534a5a3bf0031706a322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4661ba17e70cbf319ee64ccce47bdc1f1057dd479d534a5a3bf0031706a322->leave($__internal_db4661ba17e70cbf319ee64ccce47bdc1f1057dd479d534a5a3bf0031706a322_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad5d9f0411e2cb241b3423e488d06cfaca2101a90c7f9064eaa55c13fb2aa11 = $this->env->getExtension("native_profiler");
        $__internal_5ad5d9f0411e2cb241b3423e488d06cfaca2101a90c7f9064eaa55c13fb2aa11->enter($__internal_5ad5d9f0411e2cb241b3423e488d06cfaca2101a90c7f9064eaa55c13fb2aa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6794198_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6794198_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6794198_login_1.css");
            // line 5
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "6794198"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6794198") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6794198.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
                <h1 class=\"text-center login-title\">asd</h1>
                <div class=\"account-wall\">
                    <img class=\"profile-img\" src=\"https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120\"
                         alt=\"\">
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin", "role" => "form")));
        echo "
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Hasło")));
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "
                        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                            Zaloguj się</button>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zapamietajmnie", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Zapamiętaj mnie"));
        echo "
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zapamietajmnie", array()), 'widget');
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zapamietajmnie", array()), 'errors');
        echo "
                    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
                <a href=\"#\" class=\"text-center new-account\">Stwórz konto</a>
            </div>
        </div>
    </div>

";
        
        $__internal_5ad5d9f0411e2cb241b3423e488d06cfaca2101a90c7f9064eaa55c13fb2aa11->leave($__internal_5ad5d9f0411e2cb241b3423e488d06cfaca2101a90c7f9064eaa55c13fb2aa11_prof);

    }

    public function getTemplateName()
    {
        return ":Szablony:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  109 => 26,  105 => 25,  101 => 24,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  62 => 8,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%  extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% stylesheets '@AppBundle/Resources/css/login.css' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-md-4 col-md-offset-4">*/
/*                 <h1 class="text-center login-title">asd</h1>*/
/*                 <div class="account-wall">*/
/*                     <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"*/
/*                          alt="">*/
/*                     {{ form_start(form, {'attr': {'class': 'form-signin', 'role': 'form'}}) }}*/
/*                         {{ form_label(form.login, '', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.login, {'attr': {'class':'form-control' , 'placeholder' : 'Email'}}) }}*/
/*                         {{ form_errors(form.login) }}*/
/*                         {{ form_label(form.password, '', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.password, {'attr': {'class':'form-control' , 'placeholder' : 'Hasło'}}) }}*/
/*                         {{ form_errors(form.login) }}*/
/*                         <button class="btn btn-lg btn-primary btn-block" type="submit">*/
/*                             Zaloguj się</button>*/
/*                         {{ form_label(form.zapamietajmnie, 'Zapamiętaj mnie', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.zapamietajmnie) }}*/
/*                         {{ form_errors(form.zapamietajmnie) }}*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*                 <a href="#" class="text-center new-account">Stwórz konto</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
