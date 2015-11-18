<?php

/* :Szablony:noweogloszenie.html.twig */
class __TwigTemplate_1bbfb16285a714c0aa63f92ba1cdc442d9d9821b931cbb6d7b53691e93983d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Szablony:noweogloszenie.html.twig", 1);
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
        $__internal_d0bb0b8d15ef6950d7547522e57d296d4e07a9db1de9e1fe43c1bdad73df04fc = $this->env->getExtension("native_profiler");
        $__internal_d0bb0b8d15ef6950d7547522e57d296d4e07a9db1de9e1fe43c1bdad73df04fc->enter($__internal_d0bb0b8d15ef6950d7547522e57d296d4e07a9db1de9e1fe43c1bdad73df04fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:noweogloszenie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0bb0b8d15ef6950d7547522e57d296d4e07a9db1de9e1fe43c1bdad73df04fc->leave($__internal_d0bb0b8d15ef6950d7547522e57d296d4e07a9db1de9e1fe43c1bdad73df04fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13e773902cfdbc69d289a88fe3e0f8a6aab539a211893791946713639347efd4 = $this->env->getExtension("native_profiler");
        $__internal_13e773902cfdbc69d289a88fe3e0f8a6aab539a211893791946713639347efd4->enter($__internal_13e773902cfdbc69d289a88fe3e0f8a6aab539a211893791946713639347efd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "15e01ef_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_15e01ef_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/15e01ef_part_1_noweogloszenie_1.css");
            // line 5
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "15e01ef"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_15e01ef") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/15e01ef.css");
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
        echo "
    <div class=\"container\" >
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal style-form", "role" => "form")));
        echo "
        <div class=\"row\">

            <h3 class=\"\">Podstawowe informacje</h3>
            <div class=\"col-xs-6\">
                    <div class=\"form-group\">
                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Wolne od:"));
        echo "
                            <div class=\"col-sm-4\">
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'errors');
        echo "
                            </div>
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ budynku:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Dzielnica:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Ulica:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ stancji:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'errors');
        echo "
                        </div>
                    </div>
            </div>

            <div class=\"col-xs-6\">
                <div class=\"form-group\">
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ budynku:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Liczba pokoi:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Maksymalna liczba osob:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Metraz:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <h3 class=\"\">Wyposazenie</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Internet:"));
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telefon:"));
        echo "
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telewizor:"));
        echo "
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Kablowka:"));
        echo "
                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pralka:"));
        echo "
                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Lodowka:"));
        echo "
                        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Prysznic:"));
        echo "
                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Wanna:"));
        echo "
                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Balkon:"));
        echo "
                        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Taras:"));
        echo "
                        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Parking:"));
        echo "
                        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Garaz:"));
        echo "
                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'errors');
        echo "
                        </div>
                    </div>

                </div>
            </div>



            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <p></p>
                    <h3 class=\"\">Preferencje</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                            ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Kobiety:"));
        echo "
                            ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Mezczyzni:"));
        echo "
                            ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Palacy:"));
        echo "
                            ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                            ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Studenci:"));
        echo "
                            ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pary:"));
        echo "
                            ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pracujacy:"));
        echo "
                            ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'widget', array("attr" => array("id" => "")));
        echo "
                            ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"row\">
                <h3 class=\"\">Oplaty</h3>
                <div class=\"form-group\">
                    ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Cena za miesiac:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Dodatkowe oplaty:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Kaucja:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'errors');
        echo "
                    </div>
                </div>
                </div>
            </div>


            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <h3>Dodatkowe informacje:</h3>
                        <div class=\"form-group\">
                            ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => " "));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'errors');
        echo "
                            </div>
                        </div>

                </div>
            </div>
        </div>

            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <h3 class=\"\">Galeria</h3>
                </div>
            </div>


        </div>
        ";
        // line 255
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>




";
        
        $__internal_13e773902cfdbc69d289a88fe3e0f8a6aab539a211893791946713639347efd4->leave($__internal_13e773902cfdbc69d289a88fe3e0f8a6aab539a211893791946713639347efd4_prof);

    }

    public function getTemplateName()
    {
        return ":Szablony:noweogloszenie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 255,  574 => 239,  570 => 238,  565 => 236,  551 => 225,  547 => 224,  542 => 222,  535 => 218,  531 => 217,  526 => 215,  519 => 211,  515 => 210,  510 => 208,  496 => 197,  492 => 196,  488 => 195,  482 => 192,  478 => 191,  474 => 190,  468 => 187,  464 => 186,  460 => 185,  451 => 179,  447 => 178,  443 => 177,  437 => 174,  433 => 173,  429 => 172,  423 => 169,  419 => 168,  415 => 167,  397 => 152,  393 => 151,  389 => 150,  383 => 147,  379 => 146,  375 => 145,  369 => 142,  365 => 141,  361 => 140,  355 => 137,  351 => 136,  347 => 135,  338 => 129,  334 => 128,  330 => 127,  324 => 124,  320 => 123,  316 => 122,  310 => 119,  306 => 118,  302 => 117,  296 => 114,  292 => 113,  288 => 112,  279 => 106,  275 => 105,  271 => 104,  265 => 101,  261 => 100,  257 => 99,  251 => 96,  247 => 95,  243 => 94,  237 => 91,  233 => 90,  229 => 89,  215 => 78,  211 => 77,  206 => 75,  199 => 71,  195 => 70,  190 => 68,  183 => 64,  179 => 63,  174 => 61,  167 => 57,  163 => 56,  158 => 54,  148 => 47,  144 => 46,  139 => 44,  132 => 40,  128 => 39,  123 => 37,  116 => 33,  112 => 32,  107 => 30,  100 => 26,  96 => 25,  91 => 23,  84 => 19,  80 => 18,  75 => 16,  66 => 10,  62 => 8,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% stylesheets '@AppBundle/Resources/css/noweogloszenie.css*' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/*     <div class="container" >*/
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal style-form', 'role': 'form'}}) }}*/
/*         <div class="row">*/
/* */
/*             <h3 class="">Podstawowe informacje</h3>*/
/*             <div class="col-xs-6">*/
/*                     <div class="form-group">*/
/*                             {{ form_label(form.wolneod, 'Wolne od:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                             <div class="col-sm-4">*/
/*                                 {{ form_widget(form.wolneod, {'attr': {'class':'form-control'}}) }}*/
/*                                 {{ form_errors(form.wolneod) }}*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     {{ form_label(form.miasto, 'Typ budynku:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.miasto, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.miasto) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.dzielnica, 'Dzielnica:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.dzielnica, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.dzielnica) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.ulica, 'Ulica:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.ulica, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.ulica) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.typstancji, 'Typ stancji:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.typstancji, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.typstancji) }}*/
/*                         </div>*/
/*                     </div>*/
/*             </div>*/
/* */
/*             <div class="col-xs-6">*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.typbudynku, 'Typ budynku:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.typbudynku, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.typbudynku) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.liczbapokoi, 'Liczba pokoi:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.liczbapokoi, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.liczbapokoi) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.maksliczbaosob, 'Maksymalna liczba osob:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.maksliczbaosob, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.maksliczbaosob) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.metraz, 'Metraz:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.metraz, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.metraz) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-6">*/
/*                 <div class="row">*/
/*                     <h3 class="">Wyposazenie</h3>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.internet, 'Internet:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.internet, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.internet) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.telefon, 'Telefon:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.telefon, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.telefon) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.telewizor, 'Telewizor:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.telewizor, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.telewizor) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.kablowka, 'Kablowka:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.kablowka, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.kablowka) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.pralka, 'Pralka:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.pralka, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.pralka) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.lodowka, 'Lodowka:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.lodowka, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.lodowka) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.prysznic, 'Prysznic:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.prysznic, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.prysznic) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.wanna, 'Wanna:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.wanna, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.wanna) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.balkon, 'Balkon:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.balkon, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.balkon) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.taras, 'Taras:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.taras, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.taras) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.parking, 'Parking:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.parking, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.parking) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                         {{ form_label(form.garaz, 'Garaz:', {'label_attr': {'class': ''}}) }}*/
/*                         {{ form_widget(form.garaz, {'attr': {'class':''}}) }}*/
/*                         {{ form_errors(form.garaz) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*             <div class="col-xs-6">*/
/*                 <div class="row">*/
/*                     <p></p>*/
/*                     <h3 class="">Preferencje</h3>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.kobiety, 'Kobiety:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.kobiety, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.kobiety) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.mezczyzni, 'Mezczyzni:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.mezczyzni, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.mezczyzni) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.palacy, 'Palacy:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.palacy, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.palacy) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.studenci, 'Studenci:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.studenci, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.studenci) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.pary, 'Pary:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.pary, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.pary) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.pracujacy, 'Pracujacy:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.pracujacy, {'attr': {'id':''}}) }}*/
/*                             {{ form_errors(form.pracujacy) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-6">*/
/*                 <div class="row">*/
/*                 <h3 class="">Oplaty</h3>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.cenazamiesiac, 'Cena za miesiac:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.cenazamiesiac, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.cenazamiesiac) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.dodatkoweoplaty, 'Dodatkowe oplaty:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.dodatkoweoplaty, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.dodatkoweoplaty) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.kaucja, 'Kaucja:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.kaucja, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.kaucja) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="col-xs-6">*/
/*                 <div class="row">*/
/*                     <h3>Dodatkowe informacje:</h3>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.dodatkoweinformacje, ' ', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                             <div class="col-sm-6">*/
/*                                 {{ form_widget(form.dodatkoweinformacje, {'attr': {'class':'form-control'}}) }}*/
/*                                 {{ form_errors(form.dodatkoweinformacje) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*             <div class="col-xs-6">*/
/*                 <div class="row">*/
/*                     <h3 class="">Galeria</h3>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
