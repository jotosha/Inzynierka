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
        $__internal_ef2b0f151240ae4bf9f6ed1cacd46b07198e6fc7cf65076deacaae95ba9c1851 = $this->env->getExtension("native_profiler");
        $__internal_ef2b0f151240ae4bf9f6ed1cacd46b07198e6fc7cf65076deacaae95ba9c1851->enter($__internal_ef2b0f151240ae4bf9f6ed1cacd46b07198e6fc7cf65076deacaae95ba9c1851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:noweogloszenie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef2b0f151240ae4bf9f6ed1cacd46b07198e6fc7cf65076deacaae95ba9c1851->leave($__internal_ef2b0f151240ae4bf9f6ed1cacd46b07198e6fc7cf65076deacaae95ba9c1851_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_350fe1fd13baeb4c2346bfc8cb2a4f76b4b4c72f9b62bd38f187ec68787904dd = $this->env->getExtension("native_profiler");
        $__internal_350fe1fd13baeb4c2346bfc8cb2a4f76b4b4c72f9b62bd38f187ec68787904dd->enter($__internal_350fe1fd13baeb4c2346bfc8cb2a4f76b4b4c72f9b62bd38f187ec68787904dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal style-form", "role" => "form")));
        echo "
        <div class=\"row\">
         <div class=\"page-header\">
            <h2>Nowe ogłoszenie</h2>
        </div>
        </div>
        <div class=\"row\">

            <h3 class=\"sub-header\">Podstawowe informacje</h3>
            <div class=\"col-xs-6\">
                    <div class=\"form-group\">
                    <span class=\"badge\">*</span>
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label "), "label" => "Wolne od:"));
        echo "
                            <div class=\"col-sm-4\">
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wolneod", array()), 'errors');
        echo "
                            </div>
                    </div>
                    <div class=\"form-group\">
                    <span class=\"badge\">*</span>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ budynku:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miasto", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                    <span class=\"badge\">*</span>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Dzielnica:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dzielnica", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                    <span class=\"badge\">*</span>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Ulica:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ulica", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                    <span class=\"badge\">*</span>
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ stancji:"));
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typstancji", array()), 'errors');
        echo "
                        </div>
                    </div>
            </div>

            <div class=\"col-xs-6\">
                <div class=\"form-group\">
                <span class=\"badge\">*</span>
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Typ budynku:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typbudynku", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                <span class=\"badge\">*</span>
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Liczba pokoi:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liczbapokoi", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                <span class=\"badge\">*</span>
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Maksymalna liczba osób:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maksliczbaosob", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                <span class=\"badge\">*</span>
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Metraż:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <h3 class=\"\">Wyposażenie</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Internet:"));
        echo "
                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internet", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telefon:"));
        echo "
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telewizor:"));
        echo "
                        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telewizor", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "TV-kablowa:"));
        echo "
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kablowka", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pralka:"));
        echo "
                        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pralka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Lodówka:"));
        echo "
                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lodowka", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Prysznic:"));
        echo "
                        ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prysznic", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Wanna:"));
        echo "
                        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wanna", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Balkon:"));
        echo "
                        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "balkon", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Taras:"));
        echo "
                        ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taras", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Parking:"));
        echo "
                        ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Garaż:"));
        echo "
                        ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "garaz", array()), 'errors');
        echo "
                        </div>
                    </div>

                </div>
            </div>



            <div class=\"col-xs-6\">
                <div class=\"row\">
                    <p></p>
                    <h3 class=\"\">Współlokatorzy</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                            ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Kobiety:"));
        echo "
                            ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kobiety", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Mężczyźni:"));
        echo "
                            ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mezczyzni", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Palący:"));
        echo "
                            ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "palacy", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                            ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Studenci:"));
        echo "
                            ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "studenci", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pary:"));
        echo "
                            ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pary", array()), 'errors');
        echo "
                        </div>
                        <div class=\"col-sm-2\">
                            ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Pracujący:"));
        echo "
                            ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pracujacy", array()), 'widget', array("attr" => array("id" => "")));
        echo "
                            ";
        // line 213
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
                <h3 class=\"\">Opłaty</h3>
                <div class=\"form-group\">
                <span class=\"badge\">*</span>
                    ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Cena za miesiąc:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenazamiesiac", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                <span class=\"badge\">*</span>
                    ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Dodatkowe oplaty na miesiąc:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweoplaty", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                <span class=\"badge\">*</span>
                    ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Kaucja:"));
        echo "
                    <div class=\"col-sm-4\">
                        ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kaucja", array()), 'errors');
        echo "
                    </div>
                </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xs-6\">
                        <div class=\"row\">
                            <h3 class=\"\">Galeria</h3>

                        </div>
                    </div>
                </div>
        </div>
        <div class=\"col-xs-6\">
             <div class=\"row\">
                        <div class=\"form-group\">
                            ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'label', array("label_attr" => array("for" => "comment"), "label" => "Dodatkowe informacje:"));
        echo "
                                    ";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "area")));
        echo "
                                    ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dodatkoweinformacje", array()), 'errors');
        echo "

                        </div>
             </div>
         </div>


        ";
        // line 271
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>




";
        
        $__internal_350fe1fd13baeb4c2346bfc8cb2a4f76b4b4c72f9b62bd38f187ec68787904dd->leave($__internal_350fe1fd13baeb4c2346bfc8cb2a4f76b4b4c72f9b62bd38f187ec68787904dd_prof);

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
        return array (  609 => 271,  599 => 264,  595 => 263,  591 => 262,  570 => 244,  566 => 243,  561 => 241,  553 => 236,  549 => 235,  544 => 233,  536 => 228,  532 => 227,  527 => 225,  512 => 213,  508 => 212,  504 => 211,  498 => 208,  494 => 207,  490 => 206,  484 => 203,  480 => 202,  476 => 201,  467 => 195,  463 => 194,  459 => 193,  453 => 190,  449 => 189,  445 => 188,  439 => 185,  435 => 184,  431 => 183,  413 => 168,  409 => 167,  405 => 166,  399 => 163,  395 => 162,  391 => 161,  385 => 158,  381 => 157,  377 => 156,  371 => 153,  367 => 152,  363 => 151,  354 => 145,  350 => 144,  346 => 143,  340 => 140,  336 => 139,  332 => 138,  326 => 135,  322 => 134,  318 => 133,  312 => 130,  308 => 129,  304 => 128,  295 => 122,  291 => 121,  287 => 120,  281 => 117,  277 => 116,  273 => 115,  267 => 112,  263 => 111,  259 => 110,  253 => 107,  249 => 106,  245 => 105,  231 => 94,  227 => 93,  222 => 91,  214 => 86,  210 => 85,  205 => 83,  197 => 78,  193 => 77,  188 => 75,  180 => 70,  176 => 69,  171 => 67,  160 => 59,  156 => 58,  151 => 56,  143 => 51,  139 => 50,  134 => 48,  126 => 43,  122 => 42,  117 => 40,  109 => 35,  105 => 34,  100 => 32,  92 => 27,  88 => 26,  83 => 24,  68 => 12,  62 => 8,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*     <div class="container" >*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal style-form', 'role': 'form'}}) }}*/
/*         <div class="row">*/
/*          <div class="page-header">*/
/*             <h2>Nowe ogłoszenie</h2>*/
/*         </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/*             <h3 class="sub-header">Podstawowe informacje</h3>*/
/*             <div class="col-xs-6">*/
/*                     <div class="form-group">*/
/*                     <span class="badge">*</span>*/
/*                             {{ form_label(form.wolneod, 'Wolne od:', {'label_attr': {'class': 'col-md-4 control-label '}}) }}*/
/*                             <div class="col-sm-4">*/
/*                                 {{ form_widget(form.wolneod, {'attr': {'class':'form-control'}}) }}*/
/*                                 {{ form_errors(form.wolneod) }}*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <span class="badge">*</span>*/
/*                     {{ form_label(form.miasto, 'Typ budynku:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.miasto, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.miasto) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <span class="badge">*</span>*/
/*                         {{ form_label(form.dzielnica, 'Dzielnica:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.dzielnica, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.dzielnica) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <span class="badge">*</span>*/
/*                         {{ form_label(form.ulica, 'Ulica:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.ulica, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.ulica) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <span class="badge">*</span>*/
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
/*                 <span class="badge">*</span>*/
/*                     {{ form_label(form.typbudynku, 'Typ budynku:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.typbudynku, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.typbudynku) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                 <span class="badge">*</span>*/
/*                     {{ form_label(form.liczbapokoi, 'Liczba pokoi:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.liczbapokoi, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.liczbapokoi) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                 <span class="badge">*</span>*/
/*                     {{ form_label(form.maksliczbaosob, 'Maksymalna liczba osób:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.maksliczbaosob, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.maksliczbaosob) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                 <span class="badge">*</span>*/
/*                     {{ form_label(form.metraz, 'Metraż:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
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
/*                     <h3 class="">Wyposażenie</h3>*/
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
/*                         {{ form_label(form.kablowka, 'TV-kablowa:', {'label_attr': {'class': ''}}) }}*/
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
/*                         {{ form_label(form.lodowka, 'Lodówka:', {'label_attr': {'class': ''}}) }}*/
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
/*                         {{ form_label(form.garaz, 'Garaż:', {'label_attr': {'class': ''}}) }}*/
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
/*                     <h3 class="">Współlokatorzy</h3>*/
/*                     <div class="row">*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.kobiety, 'Kobiety:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.kobiety, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.kobiety) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.mezczyzni, 'Mężczyźni:', {'label_attr': {'class': ''}}) }}*/
/*                             {{ form_widget(form.mezczyzni, {'attr': {'class':''}}) }}*/
/*                             {{ form_errors(form.mezczyzni) }}*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_label(form.palacy, 'Palący:', {'label_attr': {'class': ''}}) }}*/
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
/*                             {{ form_label(form.pracujacy, 'Pracujący:', {'label_attr': {'class': ''}}) }}*/
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
/*                 <h3 class="">Opłaty</h3>*/
/*                 <div class="form-group">*/
/*                 <span class="badge">*</span>*/
/*                     {{ form_label(form.cenazamiesiac, 'Cena za miesiąc:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.cenazamiesiac, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.cenazamiesiac) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                 <span class="badge">*</span>*/
/*                     {{ form_label(form.dodatkoweoplaty, 'Dodatkowe oplaty na miesiąc:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.dodatkoweoplaty, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.dodatkoweoplaty) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                 <span class="badge">*</span>*/
/*                     {{ form_label(form.kaucja, 'Kaucja:', {'label_attr': {'class': 'col-md-4 control-label'}}) }}*/
/*                     <div class="col-sm-4">*/
/*                         {{ form_widget(form.kaucja, {'attr': {'class':'form-control'}}) }}*/
/*                         {{ form_errors(form.kaucja) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-xs-6">*/
/*                         <div class="row">*/
/*                             <h3 class="">Galeria</h3>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/*         <div class="col-xs-6">*/
/*              <div class="row">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.dodatkoweinformacje, 'Dodatkowe informacje:', {'label_attr': {'for': 'comment'}}) }}*/
/*                                     {{ form_widget(form.dodatkoweinformacje, {'attr': {'class':'form-control', 'id':'area'}}) }}*/
/*                                     {{ form_errors(form.dodatkoweinformacje) }}*/
/* */
/*                         </div>*/
/*              </div>*/
/*          </div>*/
/* */
/* */
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
