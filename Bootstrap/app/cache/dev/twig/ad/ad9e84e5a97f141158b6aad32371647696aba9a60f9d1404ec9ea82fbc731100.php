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
        $__internal_cc40285e50af19aa682edc61ba28dce64d9732fd9fc04b3778428f64d086c865 = $this->env->getExtension("native_profiler");
        $__internal_cc40285e50af19aa682edc61ba28dce64d9732fd9fc04b3778428f64d086c865->enter($__internal_cc40285e50af19aa682edc61ba28dce64d9732fd9fc04b3778428f64d086c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 26
        echo $this->env->getExtension('routing')->getPath("StronaGlowna");
        echo "\">Cztery Ściany</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("NoweOgloszenie");
        echo "\">DODAJ OGŁOSZENIE</a></li>
                        <li><a href=\"#\">PROFIL</a></li>
                        <li><a href=\"";
        // line 32
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
                        <li><a href=\"#\">Polityka prywatności</a></li>
                        <li><a href=\"#\">Kontakt</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
";
        
        $__internal_cc40285e50af19aa682edc61ba28dce64d9732fd9fc04b3778428f64d086c865->leave($__internal_cc40285e50af19aa682edc61ba28dce64d9732fd9fc04b3778428f64d086c865_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1387f34bbeebe8e7c2ca4df9ada9eb7b0ab8cfa5b221905452831cbb29bbdae9 = $this->env->getExtension("native_profiler");
        $__internal_1387f34bbeebe8e7c2ca4df9ada9eb7b0ab8cfa5b221905452831cbb29bbdae9->enter($__internal_1387f34bbeebe8e7c2ca4df9ada9eb7b0ab8cfa5b221905452831cbb29bbdae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cztery Ściany";
        
        $__internal_1387f34bbeebe8e7c2ca4df9ada9eb7b0ab8cfa5b221905452831cbb29bbdae9->leave($__internal_1387f34bbeebe8e7c2ca4df9ada9eb7b0ab8cfa5b221905452831cbb29bbdae9_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_8674c23755ec4bea91052e1e32532ead7dcb04f7f6c0f0defe7a27b516dfc1bd = $this->env->getExtension("native_profiler");
        $__internal_8674c23755ec4bea91052e1e32532ead7dcb04f7f6c0f0defe7a27b516dfc1bd->enter($__internal_8674c23755ec4bea91052e1e32532ead7dcb04f7f6c0f0defe7a27b516dfc1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8674c23755ec4bea91052e1e32532ead7dcb04f7f6c0f0defe7a27b516dfc1bd->leave($__internal_8674c23755ec4bea91052e1e32532ead7dcb04f7f6c0f0defe7a27b516dfc1bd_prof);

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
        return array (  125 => 15,  113 => 5,  86 => 32,  81 => 30,  74 => 26,  62 => 16,  60 => 15,  56 => 13,  42 => 11,  38 => 10,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Cztery Ściany{% endblock %}</title>*/
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
/* */
/*         <nav class="navbar navbar-default navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('StronaGlowna') }}">Cztery Ściany</a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse" id="myNavbar">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="{{ path('NoweOgloszenie') }}">DODAJ OGŁOSZENIE</a></li>*/
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
/*                         <li><a href="#">Polityka prywatności</a></li>*/
/*                         <li><a href="#">Kontakt</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
