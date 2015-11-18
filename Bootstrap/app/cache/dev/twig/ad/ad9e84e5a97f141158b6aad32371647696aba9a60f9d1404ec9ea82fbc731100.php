<?php

/* base.html.twig */
class __TwigTemplate_341815fe94b64619489ffd1f7ddc2a4efc1a81cbc6f23d0fcabdc6b81f7d0baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba74a7a6c5d8de7ce1e105c37a4969e6660ecd60105f3efe87150c1b8f324872 = $this->env->getExtension("native_profiler");
        $__internal_ba74a7a6c5d8de7ce1e105c37a4969e6660ecd60105f3efe87150c1b8f324872->enter($__internal_ba74a7a6c5d8de7ce1e105c37a4969e6660ecd60105f3efe87150c1b8f324872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0c961fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c961fa_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0c961fa_part_1_style_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "0c961fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c961fa") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0c961fa.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("StronaGlowna");
        echo "\">Cztery Sciany</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("NoweOgloszenie");
        echo "\">DODAJ OGLOSZENIE</a></li>
                        <li><a href=\"#pricing\">PROFIL</a></li>
                        <li><a href=\"#contact\">ZALOGUJ</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <footer class=\"text-center\">
            <a class=\"up-arrow\" href=\"#myPage\" data-toggle=\"tooltip\" title=\"TO TOP\">
                <span class=\"glyphicon glyphicon-chevron-up\"></span>
            </a><br><br>
            <p>Bootstrap Theme Made By <a href=\"http://www.w3schools.com\" data-toggle=\"tooltip\" title=\"Visit w3schools\">www.w3schools.com</a></p>
        </footer>

        <script>
            \$(document).ready(function(){
                // Initialize Tooltip
                \$('[data-toggle=\"tooltip\"]').tooltip();
            })
        </script>
    </body>
</html>
";
        
        $__internal_ba74a7a6c5d8de7ce1e105c37a4969e6660ecd60105f3efe87150c1b8f324872->leave($__internal_ba74a7a6c5d8de7ce1e105c37a4969e6660ecd60105f3efe87150c1b8f324872_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67773c64db18e55a68f275bdb1b88806ff39765c55b4eae36acadef6a6d38f4 = $this->env->getExtension("native_profiler");
        $__internal_e67773c64db18e55a68f275bdb1b88806ff39765c55b4eae36acadef6a6d38f4->enter($__internal_e67773c64db18e55a68f275bdb1b88806ff39765c55b4eae36acadef6a6d38f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e67773c64db18e55a68f275bdb1b88806ff39765c55b4eae36acadef6a6d38f4->leave($__internal_e67773c64db18e55a68f275bdb1b88806ff39765c55b4eae36acadef6a6d38f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0477a834122150fabbcf76a39cf422409856c4d5339474b6334dd4e3a768a40b = $this->env->getExtension("native_profiler");
        $__internal_0477a834122150fabbcf76a39cf422409856c4d5339474b6334dd4e3a768a40b->enter($__internal_0477a834122150fabbcf76a39cf422409856c4d5339474b6334dd4e3a768a40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0477a834122150fabbcf76a39cf422409856c4d5339474b6334dd4e3a768a40b->leave($__internal_0477a834122150fabbcf76a39cf422409856c4d5339474b6334dd4e3a768a40b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_cce024d5307e2bacbbf1566c0bd5f47d65e9438b73de40c84ecf0835ed4fb9f8 = $this->env->getExtension("native_profiler");
        $__internal_cce024d5307e2bacbbf1566c0bd5f47d65e9438b73de40c84ecf0835ed4fb9f8->enter($__internal_cce024d5307e2bacbbf1566c0bd5f47d65e9438b73de40c84ecf0835ed4fb9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cce024d5307e2bacbbf1566c0bd5f47d65e9438b73de40c84ecf0835ed4fb9f8->leave($__internal_cce024d5307e2bacbbf1566c0bd5f47d65e9438b73de40c84ecf0835ed4fb9f8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 16,  128 => 6,  116 => 5,  85 => 30,  78 => 26,  67 => 17,  65 => 16,  61 => 14,  47 => 12,  43 => 11,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         {% stylesheets '@AppBundle/Resources/css/style.css*' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/* */
/*         <nav class="navbar navbar-default navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('StronaGlowna') }}">Cztery Sciany</a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse" id="myNavbar">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="{{ path('NoweOgloszenie') }}">DODAJ OGLOSZENIE</a></li>*/
/*                         <li><a href="#pricing">PROFIL</a></li>*/
/*                         <li><a href="#contact">ZALOGUJ</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <footer class="text-center">*/
/*             <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">*/
/*                 <span class="glyphicon glyphicon-chevron-up"></span>*/
/*             </a><br><br>*/
/*             <p>Bootstrap Theme Made By <a href="http://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>*/
/*         </footer>*/
/* */
/*         <script>*/
/*             $(document).ready(function(){*/
/*                 // Initialize Tooltip*/
/*                 $('[data-toggle="tooltip"]').tooltip();*/
/*             })*/
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
