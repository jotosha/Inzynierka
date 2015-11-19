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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a3e6e1accd0fe96ec266364504c6380cf5665bce45adce6632d499a45a4c11a = $this->env->getExtension("native_profiler");
        $__internal_9a3e6e1accd0fe96ec266364504c6380cf5665bce45adce6632d499a45a4c11a->enter($__internal_9a3e6e1accd0fe96ec266364504c6380cf5665bce45adce6632d499a45a4c11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3e6e1accd0fe96ec266364504c6380cf5665bce45adce6632d499a45a4c11a->leave($__internal_9a3e6e1accd0fe96ec266364504c6380cf5665bce45adce6632d499a45a4c11a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e838df32bf978cf54b292bd6b35651bb23fbef035e3f9733b03ca7a39521d9e3 = $this->env->getExtension("native_profiler");
        $__internal_e838df32bf978cf54b292bd6b35651bb23fbef035e3f9733b03ca7a39521d9e3->enter($__internal_e838df32bf978cf54b292bd6b35651bb23fbef035e3f9733b03ca7a39521d9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e238f1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e238f1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e238f1_part_1_register_1.css");
            // line 5
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "3e238f1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e238f1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e238f1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 8
        echo "
    <div class=\"container\">
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal style-form", "role" => "form")));
        echo "
        <div class=\"row\">
            <div class=\"page-header\">
                <h2>Rejestracja</h2>
            </div>
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-3 col-md-offset-4\">
                            <div class=\"form-group\">
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label "), "label" => "Email:"));
        echo "
                                <div class=\"col-sm-8\">
                                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haslo", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label "), "label" => "Hasło:"));
        echo "
                                <div class=\"col-sm-8\">
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haslo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haslo", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imie", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label "), "label" => "Imie:"));
        echo "
                                <div class=\"col-sm-8\">
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imie", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwisko", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label "), "label" => "Nazwisko:"));
        echo "
                                <div class=\"col-sm-8\">
                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwisko", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwisko", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataurodzenia", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label "), "label" => "Data urodzenia:"));
        echo "
                                <div class=\"col-sm-8\">
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataurodzenia", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataurodzenia", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label "), "label" => "Numer telefonu:"));
        echo "
                                <div class=\"col-sm-8\">
                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                                    Stwórz konto</button>
                            </div>
                    </div>
                </div>
         </div>
        ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_e838df32bf978cf54b292bd6b35651bb23fbef035e3f9733b03ca7a39521d9e3->leave($__internal_e838df32bf978cf54b292bd6b35651bb23fbef035e3f9733b03ca7a39521d9e3_prof);

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
        return array (  179 => 66,  166 => 56,  162 => 55,  157 => 53,  150 => 49,  146 => 48,  141 => 46,  134 => 42,  130 => 41,  125 => 39,  118 => 35,  114 => 34,  109 => 32,  102 => 28,  98 => 27,  93 => 25,  86 => 21,  82 => 20,  77 => 18,  66 => 10,  62 => 8,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% stylesheets '@AppBundle/Resources/css/register.css*' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/*     <div class="container">*/
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal style-form', 'role': 'form'}}) }}*/
/*         <div class="row">*/
/*             <div class="page-header">*/
/*                 <h2>Rejestracja</h2>*/
/*             </div>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-4 col-md-3 col-md-offset-4">*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.email, 'Email:', {'label_attr': {'class': 'col-md-4 control-label '}}) }}*/
/*                                 <div class="col-sm-8">*/
/*                                     {{ form_widget(form.email, {'attr': {'class':'form-control' }}) }}*/
/*                                     {{ form_errors(form.email) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.haslo, 'Hasło:', {'label_attr': {'class': 'col-md-4 control-label '}}) }}*/
/*                                 <div class="col-sm-8">*/
/*                                     {{ form_widget(form.haslo, {'attr': {'class':'form-control' }}) }}*/
/*                                     {{ form_errors(form.haslo) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.imie, 'Imie:', {'label_attr': {'class': 'col-md-4 control-label '}}) }}*/
/*                                 <div class="col-sm-8">*/
/*                                     {{ form_widget(form.imie, {'attr': {'class':'form-control' }}) }}*/
/*                                     {{ form_errors(form.imie) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.nazwisko, 'Nazwisko:', {'label_attr': {'class': 'col-md-4 control-label '}}) }}*/
/*                                 <div class="col-sm-8">*/
/*                                     {{ form_widget(form.nazwisko, {'attr': {'class':'form-control'}}) }}*/
/*                                     {{ form_errors(form.nazwisko) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.dataurodzenia, 'Data urodzenia:', {'label_attr': {'class': 'col-md-4 control-label '}}) }}*/
/*                                 <div class="col-sm-8">*/
/*                                     {{ form_widget(form.dataurodzenia, {'attr': {'class':''}}) }}*/
/*                                     {{ form_errors(form.dataurodzenia) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.telefon, 'Numer telefonu:', {'label_attr': {'class': 'col-md-4 control-label '}}) }}*/
/*                                 <div class="col-sm-8">*/
/*                                     {{ form_widget(form.telefon, {'attr': {'class':'form-control'}}) }}*/
/*                                     {{ form_errors(form.telefon) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <button class="btn btn-lg btn-primary btn-block" type="submit">*/
/*                                     Stwórz konto</button>*/
/*                             </div>*/
/*                     </div>*/
/*                 </div>*/
/*          </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
