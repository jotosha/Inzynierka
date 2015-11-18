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
        $__internal_b367586b8ee4f5b7067b4d456b718c8609fe8001f50ce7fbf4c6a8be45d0b238 = $this->env->getExtension("native_profiler");
        $__internal_b367586b8ee4f5b7067b4d456b718c8609fe8001f50ce7fbf4c6a8be45d0b238->enter($__internal_b367586b8ee4f5b7067b4d456b718c8609fe8001f50ce7fbf4c6a8be45d0b238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b367586b8ee4f5b7067b4d456b718c8609fe8001f50ce7fbf4c6a8be45d0b238->leave($__internal_b367586b8ee4f5b7067b4d456b718c8609fe8001f50ce7fbf4c6a8be45d0b238_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0a982a25252243925c7ee0e729ae033e8af1cdf7abf745ca39f2879c3bed79e = $this->env->getExtension("native_profiler");
        $__internal_a0a982a25252243925c7ee0e729ae033e8af1cdf7abf745ca39f2879c3bed79e->enter($__internal_a0a982a25252243925c7ee0e729ae033e8af1cdf7abf745ca39f2879c3bed79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a0a982a25252243925c7ee0e729ae033e8af1cdf7abf745ca39f2879c3bed79e->leave($__internal_a0a982a25252243925c7ee0e729ae033e8af1cdf7abf745ca39f2879c3bed79e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a79b2c425489f676646cf9e84e33647bf7e4f87ae75e927bba217c02df3a37e = $this->env->getExtension("native_profiler");
        $__internal_5a79b2c425489f676646cf9e84e33647bf7e4f87ae75e927bba217c02df3a37e->enter($__internal_5a79b2c425489f676646cf9e84e33647bf7e4f87ae75e927bba217c02df3a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a79b2c425489f676646cf9e84e33647bf7e4f87ae75e927bba217c02df3a37e->leave($__internal_5a79b2c425489f676646cf9e84e33647bf7e4f87ae75e927bba217c02df3a37e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f5c821df4d7cc1d6da48f6b5e3b96e51ec4e099e16d9e743855d229304c09c9 = $this->env->getExtension("native_profiler");
        $__internal_0f5c821df4d7cc1d6da48f6b5e3b96e51ec4e099e16d9e743855d229304c09c9->enter($__internal_0f5c821df4d7cc1d6da48f6b5e3b96e51ec4e099e16d9e743855d229304c09c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f5c821df4d7cc1d6da48f6b5e3b96e51ec4e099e16d9e743855d229304c09c9->leave($__internal_0f5c821df4d7cc1d6da48f6b5e3b96e51ec4e099e16d9e743855d229304c09c9_prof);

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
        return array (  137 => 16,  126 => 6,  114 => 5,  85 => 30,  78 => 26,  67 => 17,  65 => 16,  61 => 14,  47 => 12,  43 => 11,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
