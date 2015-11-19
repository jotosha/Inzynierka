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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b461697fa54986bf4ecddf75a881640f42c9bfdb49f860ae6c6818e2e4ca59f = $this->env->getExtension("native_profiler");
        $__internal_6b461697fa54986bf4ecddf75a881640f42c9bfdb49f860ae6c6818e2e4ca59f->enter($__internal_6b461697fa54986bf4ecddf75a881640f42c9bfdb49f860ae6c6818e2e4ca59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0c961fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c961fa_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0c961fa_part_1_style_1.css");
            // line 11
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
        // line 13
        echo "    </head>
    <body>
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("StronaGlowna");
        echo "\">Cztery �ciany</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("NoweOgloszenie");
        echo "\">DODAJ OGLOSZENIE</a></li>
                        <li><a href=\"#\">PROFIL</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("Login");
        echo "\">ZALOGUJ</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"footer navbar-default navbar-fixed-bottom\" id=\"footer\">
            <footer class=\"container\" >
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Regulamin</a></li>
                        <li><a href=\"#\">Polityka prywatnosci</a></li>
                        <li><a href=\"#\">Kontakt</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
";
        
        $__internal_6b461697fa54986bf4ecddf75a881640f42c9bfdb49f860ae6c6818e2e4ca59f->leave($__internal_6b461697fa54986bf4ecddf75a881640f42c9bfdb49f860ae6c6818e2e4ca59f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3b30eb18a30651b5a1a6c57a2d327d0c7a92a2ff4367e02371a8de16ac3dd24 = $this->env->getExtension("native_profiler");
        $__internal_c3b30eb18a30651b5a1a6c57a2d327d0c7a92a2ff4367e02371a8de16ac3dd24->enter($__internal_c3b30eb18a30651b5a1a6c57a2d327d0c7a92a2ff4367e02371a8de16ac3dd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cztery �ciany";
        
        $__internal_c3b30eb18a30651b5a1a6c57a2d327d0c7a92a2ff4367e02371a8de16ac3dd24->leave($__internal_c3b30eb18a30651b5a1a6c57a2d327d0c7a92a2ff4367e02371a8de16ac3dd24_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b398c0ff718af1c1988f99cf12281102d47ff7928fd471807a5611d34204297 = $this->env->getExtension("native_profiler");
        $__internal_7b398c0ff718af1c1988f99cf12281102d47ff7928fd471807a5611d34204297->enter($__internal_7b398c0ff718af1c1988f99cf12281102d47ff7928fd471807a5611d34204297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7b398c0ff718af1c1988f99cf12281102d47ff7928fd471807a5611d34204297->leave($__internal_7b398c0ff718af1c1988f99cf12281102d47ff7928fd471807a5611d34204297_prof);

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
        return array (  124 => 15,  112 => 5,  85 => 31,  80 => 29,  73 => 25,  62 => 16,  60 => 15,  56 => 13,  42 => 11,  38 => 10,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Cztery �ciany{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         {% stylesheets '@AppBundle/Resources/css/style.css*' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*     </head>*/
/*     <body>*/
/*     {% block body %}{% endblock %}*/
/* */
/*         <nav class="navbar navbar-default navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('StronaGlowna') }}">Cztery �ciany</a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse" id="myNavbar">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="{{ path('NoweOgloszenie') }}">DODAJ OGLOSZENIE</a></li>*/
/*                         <li><a href="#">PROFIL</a></li>*/
/*                         <li><a href="{{ path('Login') }}">ZALOGUJ</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div class="footer navbar-default navbar-fixed-bottom" id="footer">*/
/*             <footer class="container" >*/
/*                 <div class="collapse navbar-collapse" id="myNavbar">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="#">Regulamin</a></li>*/
/*                         <li><a href="#">Polityka prywatnosci</a></li>*/
/*                         <li><a href="#">Kontakt</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
