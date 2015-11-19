<?php

/* :Szablony:noweogloszenie.html.twig */
class __TwigTemplate_ceb093aaa2de55515f7c4156a2d00de7c51b4a1f17d68b48399979ccb5601140 extends Twig_Template
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
        $__internal_27ab7533a48c77da313df3dc4306bc115588be3136448f586d8b57043a01946d = $this->env->getExtension("native_profiler");
        $__internal_27ab7533a48c77da313df3dc4306bc115588be3136448f586d8b57043a01946d->enter($__internal_27ab7533a48c77da313df3dc4306bc115588be3136448f586d8b57043a01946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:noweogloszenie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ab7533a48c77da313df3dc4306bc115588be3136448f586d8b57043a01946d->leave($__internal_27ab7533a48c77da313df3dc4306bc115588be3136448f586d8b57043a01946d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5530b04f6803dabf3ef19f3ebf8bd1cae5bb2e98e8792a851d3ad5f9ef677c68 = $this->env->getExtension("native_profiler");
        $__internal_5530b04f6803dabf3ef19f3ebf8bd1cae5bb2e98e8792a851d3ad5f9ef677c68->enter($__internal_5530b04f6803dabf3ef19f3ebf8bd1cae5bb2e98e8792a851d3ad5f9ef677c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"row\">
            ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal style-form", "role" => "form")));
        echo "
            <h3 class=\"\">Podstawowe informacje</h3>
            <div class=\"col-xs-6\">
                    <div class=\"form-group\">
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Wolne od:"));
        echo "
                            <div class=\"col-sm-4\">
                                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'errors');
        echo "
                            </div>
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ budynku:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Dzielnica:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Ulica:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ stancji:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'errors');
        echo "
                        </div>
                    </div>
            </div>

            <div class=\"col-xs-6\">
                <div class=\"form-group\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ budynku:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Liczba pokoi:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Maksymalna liczba osob:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Metraz:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xs-8\">
                <div class=\"row\">
                    <h3 class=\"\">Wyposazenie</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Internet:"));
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telefon:"));
        echo "
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telewizor:"));
        echo "
                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Kablowka:"));
        echo "
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pralka:"));
        echo "
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Lodowka:"));
        echo "
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Prysznic:"));
        echo "
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Wanna:"));
        echo "
                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Balkon:"));
        echo "
                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Taras:"));
        echo "
                        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Parking:"));
        echo "
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Garaz:"));
        echo "
                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'errors');
        echo "
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"col-xs-6\">
                <div class=\"row\">
                <h3 class=\"\">Oplaty</h3>
                <div class=\"form-group\">
                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Cena za miesiac:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Dodatkowe oplaty:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Kaucja:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'errors');
        echo "
                    </div>
                </div>
                </div>
            </div>

            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <h3 class=\"\">Preferencje</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Kobiety:"));
        echo "
                            ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Mezczyzni:"));
        echo "
                            ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Palacy:"));
        echo "
                            ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Studenci:"));
        echo "
                            ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pary:"));
        echo "
                            ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-3\">
                            ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pracujacy:"));
        echo "
                            ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'widget', array("attr" => array("id" => "")));
        echo "
                            ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-8\">
                <div class=\"row\">
                    <h3>Dodatkowe informacje:</h3>
                    <div class=\"form-group\">
                        ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => " "));
        echo "
                        <div class=\"col-sm-6\">
                            ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 237
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>




";
        
        $__internal_5530b04f6803dabf3ef19f3ebf8bd1cae5bb2e98e8792a851d3ad5f9ef677c68->leave($__internal_5530b04f6803dabf3ef19f3ebf8bd1cae5bb2e98e8792a851d3ad5f9ef677c68_prof);

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
        return array (  575 => 237,  566 => 231,  562 => 230,  557 => 228,  544 => 218,  540 => 217,  536 => 216,  530 => 213,  526 => 212,  522 => 211,  516 => 208,  512 => 207,  508 => 206,  499 => 200,  495 => 199,  491 => 198,  485 => 195,  481 => 194,  477 => 193,  471 => 190,  467 => 189,  463 => 188,  449 => 177,  445 => 176,  440 => 174,  433 => 170,  429 => 169,  424 => 167,  417 => 163,  413 => 162,  408 => 160,  394 => 149,  390 => 148,  386 => 147,  380 => 144,  376 => 143,  372 => 142,  366 => 139,  362 => 138,  358 => 137,  352 => 134,  348 => 133,  344 => 132,  335 => 126,  331 => 125,  327 => 124,  321 => 121,  317 => 120,  313 => 119,  307 => 116,  303 => 115,  299 => 114,  293 => 111,  289 => 110,  285 => 109,  276 => 103,  272 => 102,  268 => 101,  262 => 98,  258 => 97,  254 => 96,  248 => 93,  244 => 92,  240 => 91,  234 => 88,  230 => 87,  226 => 86,  214 => 77,  210 => 76,  205 => 74,  198 => 70,  194 => 69,  189 => 67,  182 => 63,  178 => 62,  173 => 60,  166 => 56,  162 => 55,  157 => 53,  147 => 46,  143 => 45,  138 => 43,  131 => 39,  127 => 38,  122 => 36,  115 => 32,  111 => 31,  106 => 29,  99 => 25,  95 => 24,  90 => 22,  83 => 18,  79 => 17,  74 => 15,  67 => 11,  62 => 8,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <div class="row">*/
/*             {{ form_start(form, {'attr': {'class': 'form-horizontal style-form', 'role': 'form'}}) }}*/
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
/*             <div class="col-xs-8">*/
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
/*             <div class="col-xs-6">*/
/*                 <div class="row">*/
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
/*             <div class="col-xs-8">*/
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
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
