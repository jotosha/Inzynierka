<?php

/* :Szablony:glowna.html.twig */
class __TwigTemplate_058188b5ae8d254b5797facaa1b4ea74bd98734eb12f339b08825a81d59018c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Szablony:glowna.html.twig", 1);
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
        $__internal_385136c705a0652b4011de659237fff5ba86207bce89a78e03f9a358642c4f97 = $this->env->getExtension("native_profiler");
        $__internal_385136c705a0652b4011de659237fff5ba86207bce89a78e03f9a358642c4f97->enter($__internal_385136c705a0652b4011de659237fff5ba86207bce89a78e03f9a358642c4f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Szablony:glowna.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385136c705a0652b4011de659237fff5ba86207bce89a78e03f9a358642c4f97->leave($__internal_385136c705a0652b4011de659237fff5ba86207bce89a78e03f9a358642c4f97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93bb78c85a706482f5087784a9e8f96c60195e2d08163cb4087a21db304bd550 = $this->env->getExtension("native_profiler");
        $__internal_93bb78c85a706482f5087784a9e8f96c60195e2d08163cb4087a21db304bd550->enter($__internal_93bb78c85a706482f5087784a9e8f96c60195e2d08163cb4087a21db304bd550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9b0345b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b0345b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/9b0345b_part_1_glowna_1.css");
            // line 5
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "9b0345b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b0345b") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/9b0345b.css");
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
        echo "    <div class=\"jumbotron text-center\">
        <p></p>
        <div class=\"row\">
            <div class=\"container\" >
                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal style-form", "role" => "form")));
        echo "
                    <div class=\"row\">
                        <div class=\"form group\">
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'label', array("label_attr" => array("class" => "col-md-2 control-label")));
        echo "
                            <div class=\"col-sm-5\">
                                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "czego szukasz?")));
        echo "
                                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"form group\">
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kategoria", array()), 'label', array("label_attr" => array("class" => "col-md-1 control-label"), "label" => "Kategoria: "));
        echo "
                            <div class=\"col-sm-2\">
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kategoria", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kategoria", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                <p></p>
                <div class=\"row\">
                    <div class=\"form group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenaod", array()), 'label', array("label_attr" => array("class" => "col-md-3 control-label"), "label" => "Cena:"));
        echo "
                        <div class=\"col-sm-1\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenaod", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "od")));
        echo "
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenaod", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form group\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenado", array()), 'label', array("label_attr" => array("class" => "col-md-1 control-label")));
        echo "
                        <div class=\"col-sm-1\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenado", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "do")));
        echo "
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cenado", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form group\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'label', array("label_attr" => array("class" => "col-md-1 control-label"), "label" => "Metraz: "));
        echo "
                        <div class=\"col-sm-1\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metraz", array()), 'errors');
        echo "
                    </div>
                        </div>
                    <div class=\"col-sm-5\">
                        <button type=\"button\" class=\"btn btn-info \" id=\"Szukaj\"><span class=\"glyphicon glyphicon-search\"></span>Szukaj</button>
                    </div>

                </div>
            </div>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>


    <div id=\"map\" style=\"height:400px;width:100%;\"></div>
    <!-- Add Google Maps -->
    <script src=\"http://maps.googleapis.com/maps/api/js\"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(51.2379753, 22.5754416),
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

";
        
        $__internal_93bb78c85a706482f5087784a9e8f96c60195e2d08163cb4087a21db304bd550->leave($__internal_93bb78c85a706482f5087784a9e8f96c60195e2d08163cb4087a21db304bd550_prof);

    }

    public function getTemplateName()
    {
        return ":Szablony:glowna.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 59,  151 => 50,  147 => 49,  142 => 47,  135 => 43,  131 => 42,  126 => 40,  119 => 36,  115 => 35,  110 => 33,  100 => 26,  96 => 25,  91 => 23,  83 => 18,  79 => 17,  74 => 15,  68 => 12,  62 => 8,  59 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% stylesheets '@AppBundle/Resources/css/glowna.css*' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*     <div class="jumbotron text-center">*/
/*         <p></p>*/
/*         <div class="row">*/
/*             <div class="container" >*/
/*                 {{ form_start(form, {'attr': {'class': 'form-horizontal style-form', 'role': 'form'}}) }}*/
/*                     <div class="row">*/
/*                         <div class="form group">*/
/*                             {{ form_label(form.search, '', {'label_attr': {'class': 'col-md-2 control-label'}}) }}*/
/*                             <div class="col-sm-5">*/
/*                                 {{ form_widget(form.search, {'attr': {'class':'form-control' , 'placeholder' : 'czego szukasz?'}}) }}*/
/*                                 {{ form_errors(form.search) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form group">*/
/*                             {{ form_label(form.kategoria, 'Kategoria: ', {'label_attr': {'class': 'col-md-1 control-label'}}) }}*/
/*                             <div class="col-sm-2">*/
/*                                 {{ form_widget(form.kategoria, {'attr': {'class':'form-control'}}) }}*/
/*                                 {{ form_errors(form.kategoria) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 <p></p>*/
/*                 <div class="row">*/
/*                     <div class="form group">*/
/*                         {{ form_label(form.cenaod, 'Cena:', {'label_attr': {'class': 'col-md-3 control-label'}}) }}*/
/*                         <div class="col-sm-1">*/
/*                             {{ form_widget(form.cenaod, {'attr': {'class':'form-control', 'placeholder' : 'od'}}) }}*/
/*                             {{ form_errors(form.cenaod) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form group">*/
/*                         {{ form_label(form.cenado, '', {'label_attr': {'class': 'col-md-1 control-label'}}) }}*/
/*                         <div class="col-sm-1">*/
/*                             {{ form_widget(form.cenado, {'attr': {'class':'form-control', 'placeholder' : 'do'}}) }}*/
/*                             {{ form_errors(form.cenado) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form group">*/
/*                         {{ form_label(form.metraz, 'Metraz: ', {'label_attr': {'class': 'col-md-1 control-label'}}) }}*/
/*                         <div class="col-sm-1">*/
/*                             {{ form_widget(form.metraz, {'attr': {'class':'form-control'}}) }}*/
/*                             {{ form_errors(form.metraz) }}*/
/*                     </div>*/
/*                         </div>*/
/*                     <div class="col-sm-5">*/
/*                         <button type="button" class="btn btn-info " id="Szukaj"><span class="glyphicon glyphicon-search"></span>Szukaj</button>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div id="map" style="height:400px;width:100%;"></div>*/
/*     <!-- Add Google Maps -->*/
/*     <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/*     <script>*/
/*         function initialize() {*/
/*             var mapCanvas = document.getElementById('map');*/
/*             var mapOptions = {*/
/*                 center: new google.maps.LatLng(51.2379753, 22.5754416),*/
/*                 zoom: 11,*/
/*                 mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*             }*/
/*             var map = new google.maps.Map(mapCanvas, mapOptions)*/
/*         }*/
/*         google.maps.event.addDomListener(window, 'load', initialize);*/
/*     </script>*/
/* */
/* {% endblock %}*/
