<?php

/* base.html.twig */
class __TwigTemplate_0ea38cbe79ff2049064a3e80361339d14f00b427387a88ca2fa0e3392eb4338a extends Twig_Template
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
        $__internal_575650e9bf3bcbff7225821b2da01f4abd6ca1485661ba8870994a94bbc0c81a = $this->env->getExtension("native_profiler");
        $__internal_575650e9bf3bcbff7225821b2da01f4abd6ca1485661ba8870994a94bbc0c81a->enter($__internal_575650e9bf3bcbff7225821b2da01f4abd6ca1485661ba8870994a94bbc0c81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </body>
</html>
";
        
        $__internal_575650e9bf3bcbff7225821b2da01f4abd6ca1485661ba8870994a94bbc0c81a->leave($__internal_575650e9bf3bcbff7225821b2da01f4abd6ca1485661ba8870994a94bbc0c81a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5910827edf8e22bf7753bef52b741c46beb79f47d72c728d5354ba7e8fe029dc = $this->env->getExtension("native_profiler");
        $__internal_5910827edf8e22bf7753bef52b741c46beb79f47d72c728d5354ba7e8fe029dc->enter($__internal_5910827edf8e22bf7753bef52b741c46beb79f47d72c728d5354ba7e8fe029dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5910827edf8e22bf7753bef52b741c46beb79f47d72c728d5354ba7e8fe029dc->leave($__internal_5910827edf8e22bf7753bef52b741c46beb79f47d72c728d5354ba7e8fe029dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4129095858b7bc39b127e93b5cbec1422574da5f84c4d56aa8e94c50c424e2fd = $this->env->getExtension("native_profiler");
        $__internal_4129095858b7bc39b127e93b5cbec1422574da5f84c4d56aa8e94c50c424e2fd->enter($__internal_4129095858b7bc39b127e93b5cbec1422574da5f84c4d56aa8e94c50c424e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4129095858b7bc39b127e93b5cbec1422574da5f84c4d56aa8e94c50c424e2fd->leave($__internal_4129095858b7bc39b127e93b5cbec1422574da5f84c4d56aa8e94c50c424e2fd_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b56f438b1e3ae68539374e0c405ea1a413b9374e67dcf122c835ec221098ff9 = $this->env->getExtension("native_profiler");
        $__internal_9b56f438b1e3ae68539374e0c405ea1a413b9374e67dcf122c835ec221098ff9->enter($__internal_9b56f438b1e3ae68539374e0c405ea1a413b9374e67dcf122c835ec221098ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b56f438b1e3ae68539374e0c405ea1a413b9374e67dcf122c835ec221098ff9->leave($__internal_9b56f438b1e3ae68539374e0c405ea1a413b9374e67dcf122c835ec221098ff9_prof);

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
        return array (  125 => 16,  114 => 6,  102 => 5,  85 => 30,  78 => 26,  67 => 17,  65 => 16,  61 => 14,  47 => 12,  43 => 11,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*     </body>*/
/* </html>*/
/* */
