<?php

/* ::layout.html.twig */
class __TwigTemplate_a8f95ee79cabff189c0c008c1a7332a72536c68b1ea16e217f87f2f9dce32b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d8a3dea54d25cd9ae73ce2d512e2121c8e57ed18aa40bea3b42466963191b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8a3dea54d25cd9ae73ce2d512e2121c8e57ed18aa40bea3b42466963191b31->enter($__internal_6d8a3dea54d25cd9ae73ce2d512e2121c8e57ed18aa40bea3b42466963191b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_9b68f85eb0059d8a2d4bb8465a63f99a4b1873ae23154f36c897fc0b36599833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b68f85eb0059d8a2d4bb8465a63f99a4b1873ae23154f36c897fc0b36599833->enter($__internal_9b68f85eb0059d8a2d4bb8465a63f99a4b1873ae23154f36c897fc0b36599833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t<p>
\t\t\t\tCe projet est propulsé par Symfony grace aux cours d'OpenClassroom
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony\" class=\"btn btn-primary btn-lg\">
\t\t\t\t\tLien OpenClassroom
\t\t\t\t</a>

\t\t\t</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SalimPlateformeBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<footer>
\t\t\t<p>
\t\t\t\tThe sky is the limit ! ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.
\t\t\t</p>
\t\t</footer>



\t</div>
\t";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
</body>
</html>";
        
        $__internal_6d8a3dea54d25cd9ae73ce2d512e2121c8e57ed18aa40bea3b42466963191b31->leave($__internal_6d8a3dea54d25cd9ae73ce2d512e2121c8e57ed18aa40bea3b42466963191b31_prof);

        
        $__internal_9b68f85eb0059d8a2d4bb8465a63f99a4b1873ae23154f36c897fc0b36599833->leave($__internal_9b68f85eb0059d8a2d4bb8465a63f99a4b1873ae23154f36c897fc0b36599833_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce5e3a65f8dfb656665a4577e840bb4695439b363beadb19cf1eeb24367a39ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5e3a65f8dfb656665a4577e840bb4695439b363beadb19cf1eeb24367a39ec->enter($__internal_ce5e3a65f8dfb656665a4577e840bb4695439b363beadb19cf1eeb24367a39ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_322c215762f7cca0e5c6db99ce3fd28c4a2265950ecb1aef03f8969d201b8444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322c215762f7cca0e5c6db99ce3fd28c4a2265950ecb1aef03f8969d201b8444->enter($__internal_322c215762f7cca0e5c6db99ce3fd28c4a2265950ecb1aef03f8969d201b8444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de Salim";
        
        $__internal_322c215762f7cca0e5c6db99ce3fd28c4a2265950ecb1aef03f8969d201b8444->leave($__internal_322c215762f7cca0e5c6db99ce3fd28c4a2265950ecb1aef03f8969d201b8444_prof);

        
        $__internal_ce5e3a65f8dfb656665a4577e840bb4695439b363beadb19cf1eeb24367a39ec->leave($__internal_ce5e3a65f8dfb656665a4577e840bb4695439b363beadb19cf1eeb24367a39ec_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bb6106db3b6bf5b613e28db6345574e9a591eb60e591412984be73e120d1f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb6106db3b6bf5b613e28db6345574e9a591eb60e591412984be73e120d1f35->enter($__internal_9bb6106db3b6bf5b613e28db6345574e9a591eb60e591412984be73e120d1f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae2e3f44f0da1e4f9b6dc22c735d8864911ee30172af438b8300e8e93605ea75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2e3f44f0da1e4f9b6dc22c735d8864911ee30172af438b8300e8e93605ea75->enter($__internal_ae2e3f44f0da1e4f9b6dc22c735d8864911ee30172af438b8300e8e93605ea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_ae2e3f44f0da1e4f9b6dc22c735d8864911ee30172af438b8300e8e93605ea75->leave($__internal_ae2e3f44f0da1e4f9b6dc22c735d8864911ee30172af438b8300e8e93605ea75_prof);

        
        $__internal_9bb6106db3b6bf5b613e28db6345574e9a591eb60e591412984be73e120d1f35->leave($__internal_9bb6106db3b6bf5b613e28db6345574e9a591eb60e591412984be73e120d1f35_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_1345ef10c7953862dc0e61705cef0113d06e0b5877c2bb871f548382298825a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1345ef10c7953862dc0e61705cef0113d06e0b5877c2bb871f548382298825a9->enter($__internal_1345ef10c7953862dc0e61705cef0113d06e0b5877c2bb871f548382298825a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8b85104f95226b264f9ae39d5f3296ab526bf7d5e850abcdbf0193f3bbe77b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b85104f95226b264f9ae39d5f3296ab526bf7d5e850abcdbf0193f3bbe77b3->enter($__internal_a8b85104f95226b264f9ae39d5f3296ab526bf7d5e850abcdbf0193f3bbe77b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_a8b85104f95226b264f9ae39d5f3296ab526bf7d5e850abcdbf0193f3bbe77b3->leave($__internal_a8b85104f95226b264f9ae39d5f3296ab526bf7d5e850abcdbf0193f3bbe77b3_prof);

        
        $__internal_1345ef10c7953862dc0e61705cef0113d06e0b5877c2bb871f548382298825a9->leave($__internal_1345ef10c7953862dc0e61705cef0113d06e0b5877c2bb871f548382298825a9_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c3474ada55500119412500a167782d1a39761bc4fc42c94da5753afd28afa06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3474ada55500119412500a167782d1a39761bc4fc42c94da5753afd28afa06->enter($__internal_2c3474ada55500119412500a167782d1a39761bc4fc42c94da5753afd28afa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a5c3471bb3a7e63748bc7a2d6cb341e01c3daf297e0356858a1ee4b2f30671a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c3471bb3a7e63748bc7a2d6cb341e01c3daf297e0356858a1ee4b2f30671a9->enter($__internal_a5c3471bb3a7e63748bc7a2d6cb341e01c3daf297e0356858a1ee4b2f30671a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_a5c3471bb3a7e63748bc7a2d6cb341e01c3daf297e0356858a1ee4b2f30671a9->leave($__internal_a5c3471bb3a7e63748bc7a2d6cb341e01c3daf297e0356858a1ee4b2f30671a9_prof);

        
        $__internal_2c3474ada55500119412500a167782d1a39761bc4fc42c94da5753afd28afa06->leave($__internal_2c3474ada55500119412500a167782d1a39761bc4fc42c94da5753afd28afa06_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 60,  187 => 59,  178 => 58,  168 => 44,  159 => 43,  148 => 11,  146 => 10,  137 => 9,  119 => 7,  107 => 63,  105 => 58,  95 => 51,  87 => 45,  85 => 43,  79 => 40,  72 => 36,  66 => 33,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}Plateforme de Salim{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>
<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t<p>
\t\t\t\tCe projet est propulsé par Symfony grace aux cours d'OpenClassroom
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony\" class=\"btn btn-primary btn-lg\">
\t\t\t\t\tLien OpenClassroom
\t\t\t\t</a>

\t\t\t</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('oc_platform_home')}}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('oc_platform_add')}}\">Ajouter une annonce</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t{{ render(controller(\"SalimPlateformeBundle:Advert:menu\", {'limit': 3})) }}
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t{% block body %}
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<footer>
\t\t\t<p>
\t\t\t\tThe sky is the limit ! {{'now'|date(\"Y\")}} and beyond.
\t\t\t</p>
\t\t</footer>



\t</div>
\t{% block javascripts %}
\t\t{#Fonctionnalités Javascript BootStrap#}
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t{% endblock %}

</body>
</html>", "::layout.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}
