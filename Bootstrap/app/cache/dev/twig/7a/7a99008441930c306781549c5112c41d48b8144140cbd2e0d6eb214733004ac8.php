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
        $__internal_8e7c275e5b09a8c1c6f517f6a532e1e82e01b3a167260bcbe31b1f3600e4bb93 = $this->env->getExtension("native_profiler");
        $__internal_8e7c275e5b09a8c1c6f517f6a532e1e82e01b3a167260bcbe31b1f3600e4bb93->enter($__internal_8e7c275e5b09a8c1c6f517f6a532e1e82e01b3a167260bcbe31b1f3600e4bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7c275e5b09a8c1c6f517f6a532e1e82e01b3a167260bcbe31b1f3600e4bb93->leave($__internal_8e7c275e5b09a8c1c6f517f6a532e1e82e01b3a167260bcbe31b1f3600e4bb93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fb88b32d598b7eba374212d460a64e74d11ad8e15fa75afe31cd593de58c1e7 = $this->env->getExtension("native_profiler");
        $__internal_9fb88b32d598b7eba374212d460a64e74d11ad8e15fa75afe31cd593de58c1e7->enter($__internal_9fb88b32d598b7eba374212d460a64e74d11ad8e15fa75afe31cd593de58c1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e238f1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e238f1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e238f1_part_1_register_1.css");
            // line 5
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "3e238f1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e238f1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e238f1.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "

    ";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 10
        echo "

    <div class=\"container\" id=\"kontener\">
        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-offset-2\">
                <div class=\"page-header\">
                    <h2>Rejestracja</h2>
                </div>
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "role" => "form", "id" => "defaultForm")));
        echo "
                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Imie i nazwisko:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imie", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Imie")));
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imie", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwisko", array()), 'label');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwisko", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nazwisko")));
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwisko", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwauzytkownika", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nazwa użytkownika:"));
        echo "
                    <div class=\"col-sm-5\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwauzytkownika", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nazwauzytkownika", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Adres Email:"));
        echo "
                    <div class=\"col-sm-5\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haslo", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Hasło:"));
        echo "
                    <div class=\"col-sm-5\">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haslo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "haslo", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numer telefonu:"));
        echo "
                    <div class=\"col-sm-5\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label", "id" => "captchaOperation"), "label" => " "));
        echo "
                    <div class=\"col-sm-2\">
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "captchaOperation")));
        echo "
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-6 col-sm-offset-3\">
                        <div class=\"checkbox\">
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "akceptacja", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Akceptuje regulamin serwisu"));
        echo "
                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "akceptacja", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "akceptacja", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-9 col-sm-offset-3\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"signup\" value=\"Sign up\">Załóż konto</button>
                    </div>
                </div>
                ";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function() {
            // Generate a simple captcha
            function randomNumber(min, max) {
                return Math.floor(Math.random() * (max - min + 1) + min);
            };
            \$('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));

            \$('#defaultForm').formValidation({
                message: 'This value is not valid',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    captcha: {
                        validators: {
                            callback: {
                                message: 'Wrong answer',
                                callback: function(value, validator, \$field) {
                                    var items = \$('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                    return value == sum;
                                }
                            }
                        }
                    },
                    agree: {
                        validators: {
                            notEmpty: {
                                message: 'You must agree with the terms and conditions'
                            }
                        }
                    }
                }
            });
        });
    </script>
";
        
        $__internal_9fb88b32d598b7eba374212d460a64e74d11ad8e15fa75afe31cd593de58c1e7->leave($__internal_9fb88b32d598b7eba374212d460a64e74d11ad8e15fa75afe31cd593de58c1e7_prof);

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
        return array (  219 => 87,  206 => 77,  202 => 76,  198 => 75,  188 => 68,  184 => 67,  179 => 65,  171 => 60,  167 => 59,  162 => 57,  154 => 52,  150 => 51,  145 => 49,  137 => 44,  133 => 43,  128 => 41,  120 => 36,  116 => 35,  111 => 33,  103 => 28,  99 => 27,  95 => 26,  89 => 23,  85 => 22,  80 => 20,  75 => 18,  65 => 10,  63 => 9,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% stylesheets '@AppBundle/Resources/css/register.css*' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/* */
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* */
/*     <div class="container" id="kontener">*/
/*         <div class="row">*/
/*             <div class="col-sm-8 col-sm-offset-2">*/
/*                 <div class="page-header">*/
/*                     <h2>Rejestracja</h2>*/
/*                 </div>*/
/*                 {{ form_start(form, {'attr': {'class': 'form-horizontal', 'role': 'form', 'id':'defaultForm'}}) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.imie, 'Imie i nazwisko:', {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.imie, {'attr': {'class':'form-control', 'placeholder':'Imie' }}) }}*/
/*                         {{ form_errors(form.imie) }}*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_label(form.nazwisko) }}*/
/*                         {{ form_widget(form.nazwisko, {'attr': {'class':'form-control', 'placeholder':'Nazwisko'}}) }}*/
/*                         {{ form_errors(form.nazwisko) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.nazwauzytkownika, 'Nazwa użytkownika:', {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                     <div class="col-sm-5">*/
/*                         {{ form_widget(form.nazwauzytkownika, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.nazwauzytkownika) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.email, 'Adres Email:', {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                     <div class="col-sm-5">*/
/*                         {{ form_widget(form.email, {'attr': {'class':'form-control' }}) }}*/
/*                         {{ form_errors(form.email) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.haslo, 'Hasło:', {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                     <div class="col-sm-5">*/
/*                         {{ form_widget(form.haslo, {'attr': {'class':'form-control' }}) }}*/
/*                         {{ form_errors(form.haslo) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.telefon, 'Numer telefonu:', {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                     <div class="col-sm-5">*/
/*                         {{ form_widget(form.telefon, {'attr': {'class':'form-control' }}) }}*/
/*                         {{ form_errors(form.telefon) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.captcha, ' ', {'label_attr': {'class': 'col-sm-3 control-label', 'id':'captchaOperation'}}) }}*/
/*                     <div class="col-sm-2">*/
/*                         {{ form_widget(form.captcha, {'attr': {'class':'form-control', 'id':'captchaOperation' }}) }}*/
/*                         {{ form_errors(form.captcha) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-sm-6 col-sm-offset-3">*/
/*                         <div class="checkbox">*/
/*                             {{ form_label(form.akceptacja, 'Akceptuje regulamin serwisu', {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                             {{ form_widget(form.akceptacja, {'attr': {'class':'' }}) }}*/
/*                             {{ form_errors(form.akceptacja) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-sm-9 col-sm-offset-3">*/
/*                         <button type="submit" class="btn btn-primary btn-lg" name="signup" value="Sign up">Załóż konto</button>*/
/*                     </div>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*             // Generate a simple captcha*/
/*             function randomNumber(min, max) {*/
/*                 return Math.floor(Math.random() * (max - min + 1) + min);*/
/*             };*/
/*             $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 20), '='].join(' '));*/
/* */
/*             $('#defaultForm').formValidation({*/
/*                 message: 'This value is not valid',*/
/*                 icon: {*/
/*                     valid: 'glyphicon glyphicon-ok',*/
/*                     invalid: 'glyphicon glyphicon-remove',*/
/*                     validating: 'glyphicon glyphicon-refresh'*/
/*                 },*/
/*                 fields: {*/
/*                     captcha: {*/
/*                         validators: {*/
/*                             callback: {*/
/*                                 message: 'Wrong answer',*/
/*                                 callback: function(value, validator, $field) {*/
/*                                     var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);*/
/*                                     return value == sum;*/
/*                                 }*/
/*                             }*/
/*                         }*/
/*                     },*/
/*                     agree: {*/
/*                         validators: {*/
/*                             notEmpty: {*/
/*                                 message: 'You must agree with the terms and conditions'*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
