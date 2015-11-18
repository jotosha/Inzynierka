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
        $__internal_e9ce511f6c58f953b2a4d0d1b8048caf49698e7a76b2eea0ff2218b7a8f1e682 = $this->env->getExtension("native_profiler");
        $__internal_e9ce511f6c58f953b2a4d0d1b8048caf49698e7a76b2eea0ff2218b7a8f1e682->enter($__internal_e9ce511f6c58f953b2a4d0d1b8048caf49698e7a76b2eea0ff2218b7a8f1e682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:noweogloszenie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ce511f6c58f953b2a4d0d1b8048caf49698e7a76b2eea0ff2218b7a8f1e682->leave($__internal_e9ce511f6c58f953b2a4d0d1b8048caf49698e7a76b2eea0ff2218b7a8f1e682_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_247cca3e4299372a27ffa745d6c2d3fa64c828230dd4cdaa5e374889076a2b92 = $this->env->getExtension("native_profiler");
        $__internal_247cca3e4299372a27ffa745d6c2d3fa64c828230dd4cdaa5e374889076a2b92->enter($__internal_247cca3e4299372a27ffa745d6c2d3fa64c828230dd4cdaa5e374889076a2b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"col-xs-7\">
                <div class=\"row\">
                    <h3 class=\"\">Wyposazenie</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Internet:"));
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telefon:"));
        echo "
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telewizor:"));
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Kablowka:"));
        echo "
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pralka:"));
        echo "
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Lodowka:"));
        echo "
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Prysznic:"));
        echo "
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Wanna:"));
        echo "
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Balkon:"));
        echo "
                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Taras:"));
        echo "
                        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Parking:"));
        echo "
                        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Garaz:"));
        echo "
                        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'errors');
        echo "
                        </div>
                    </div>

                </div>
            </div>



            <div class=\"col-xs-5\">
                <div class=\"row\">
                    <p></p>
                    <h3 class=\"\">Preferencje</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Kobiety:"));
        echo "
                            ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Mezczyzni:"));
        echo "
                            ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Palacy:"));
        echo "
                            ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Studenci:"));
        echo "
                            ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pary:"));
        echo "
                            ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pracujacy:"));
        echo "
                            ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'widget', array("attr" => array("id" => "")));
        echo "
                            ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-7\">
                <div class=\"row\">
                <h3 class=\"\">Oplaty</h3>
                <div class=\"form-group\">
                    ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Cena za miesiac:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Dodatkowe oplaty:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Kaucja:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'errors');
        echo "
                    </div>
                </div>
                </div>
            </div>

            <div class=\"col-xs-5\">
                <div class=\"row\">
                    <h3>Dodatkowe informacje:</h3>
                    <div class=\"form-group\">
                        ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => " "));
        echo "
                        <div class=\"col-sm-6\">
                            ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>


        </div>
        ";
        // line 243
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>




";
        
        $__internal_247cca3e4299372a27ffa745d6c2d3fa64c828230dd4cdaa5e374889076a2b92->leave($__internal_247cca3e4299372a27ffa745d6c2d3fa64c828230dd4cdaa5e374889076a2b92_prof);

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
        return array (  581 => 243,  570 => 235,  566 => 234,  561 => 232,  548 => 222,  544 => 221,  539 => 219,  532 => 215,  528 => 214,  523 => 212,  516 => 208,  512 => 207,  507 => 205,  494 => 195,  490 => 194,  486 => 193,  480 => 190,  476 => 189,  472 => 188,  466 => 185,  462 => 184,  458 => 183,  449 => 177,  445 => 176,  441 => 175,  435 => 172,  431 => 171,  427 => 170,  421 => 167,  417 => 166,  413 => 165,  395 => 150,  391 => 149,  387 => 148,  381 => 145,  377 => 144,  373 => 143,  367 => 140,  363 => 139,  359 => 138,  353 => 135,  349 => 134,  345 => 133,  336 => 127,  332 => 126,  328 => 125,  322 => 122,  318 => 121,  314 => 120,  308 => 117,  304 => 116,  300 => 115,  294 => 112,  290 => 111,  286 => 110,  277 => 104,  273 => 103,  269 => 102,  263 => 99,  259 => 98,  255 => 97,  249 => 94,  245 => 93,  241 => 92,  235 => 89,  231 => 88,  227 => 87,  215 => 78,  211 => 77,  206 => 75,  199 => 71,  195 => 70,  190 => 68,  183 => 64,  179 => 63,  174 => 61,  167 => 57,  163 => 56,  158 => 54,  148 => 47,  144 => 46,  139 => 44,  132 => 40,  128 => 39,  123 => 37,  116 => 33,  112 => 32,  107 => 30,  100 => 26,  96 => 25,  91 => 23,  84 => 19,  80 => 18,  75 => 16,  66 => 10,  62 => 8,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*             <div class="col-xs-7">*/
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
/*             <div class="col-xs-5">*/
/*                 <div class="row">*/
/*                     <p></p>*/
/*                     <h3 class="">Preferencje</h3>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-3">*/
/*                             {{ form_label(form.kobiety, 'Kobiety:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.kobiety, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.kobiety) }}*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             {{ form_label(form.mezczyzni, 'Mezczyzni:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.mezczyzni, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.mezczyzni) }}*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             {{ form_label(form.palacy, 'Palacy:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.palacy, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.palacy) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-sm-3">*/
/*                             {{ form_label(form.studenci, 'Studenci:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.studenci, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.studenci) }}*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             {{ form_label(form.pary, 'Pary:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.pary, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.pary) }}*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             {{ form_label(form.pracujacy, 'Pracujacy:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.pracujacy, {'attr': {'id':''}}) }}*/
/*                             {{ form_errors(form.pracujacy) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-xs-7">*/
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
/*             <div class="col-xs-5">*/
/*                 <div class="row">*/
/*                     <h3>Dodatkowe informacje:</h3>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.dodatkoweinformacje, ' ', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-6">*/
/*                             {{ form_widget(form.dodatkoweinformacje, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.dodatkoweinformacje) }}*/
/*                         </div>*/
/*                     </div>*/
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
