<?php

/* layout.html.twig */
class __TwigTemplate_ed0f9d3f41402212740218f13aa6efc6e3cdadf66b86f23a77ea14b5e589c736 extends Twig_Template
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
        $__internal_49b9658a653e55a30a5c54bac1b6eda7fd4f0e579092817f633aa5af7fa7197c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b9658a653e55a30a5c54bac1b6eda7fd4f0e579092817f633aa5af7fa7197c->enter($__internal_49b9658a653e55a30a5c54bac1b6eda7fd4f0e579092817f633aa5af7fa7197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_97cc9cd5c475c11f453426836d4c9aeacf0ee7d597fbc4fd786806c44b9bfc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cc9cd5c475c11f453426836d4c9aeacf0ee7d597fbc4fd786806c44b9bfc15->enter($__internal_97cc9cd5c475c11f453426836d4c9aeacf0ee7d597fbc4fd786806c44b9bfc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_49b9658a653e55a30a5c54bac1b6eda7fd4f0e579092817f633aa5af7fa7197c->leave($__internal_49b9658a653e55a30a5c54bac1b6eda7fd4f0e579092817f633aa5af7fa7197c_prof);

        
        $__internal_97cc9cd5c475c11f453426836d4c9aeacf0ee7d597fbc4fd786806c44b9bfc15->leave($__internal_97cc9cd5c475c11f453426836d4c9aeacf0ee7d597fbc4fd786806c44b9bfc15_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a67513a9853b0a2412f526e69d9652fd788a65761142c4621cd1bd526fa888e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a67513a9853b0a2412f526e69d9652fd788a65761142c4621cd1bd526fa888e->enter($__internal_3a67513a9853b0a2412f526e69d9652fd788a65761142c4621cd1bd526fa888e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00af4d9e016c8caaba3f4421770e3c9fa350757923c00ffccb62845583974b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00af4d9e016c8caaba3f4421770e3c9fa350757923c00ffccb62845583974b13->enter($__internal_00af4d9e016c8caaba3f4421770e3c9fa350757923c00ffccb62845583974b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de Salim";
        
        $__internal_00af4d9e016c8caaba3f4421770e3c9fa350757923c00ffccb62845583974b13->leave($__internal_00af4d9e016c8caaba3f4421770e3c9fa350757923c00ffccb62845583974b13_prof);

        
        $__internal_3a67513a9853b0a2412f526e69d9652fd788a65761142c4621cd1bd526fa888e->leave($__internal_3a67513a9853b0a2412f526e69d9652fd788a65761142c4621cd1bd526fa888e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_210a71a4aee75bd06cf8695dc1b34656d690edcbf0bce3cf70e49f8b66380d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210a71a4aee75bd06cf8695dc1b34656d690edcbf0bce3cf70e49f8b66380d2c->enter($__internal_210a71a4aee75bd06cf8695dc1b34656d690edcbf0bce3cf70e49f8b66380d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_60632604f53d2f3c2fb9e4df48449b8075518ba24889c01f71c446f1eaad6c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60632604f53d2f3c2fb9e4df48449b8075518ba24889c01f71c446f1eaad6c7b->enter($__internal_60632604f53d2f3c2fb9e4df48449b8075518ba24889c01f71c446f1eaad6c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_60632604f53d2f3c2fb9e4df48449b8075518ba24889c01f71c446f1eaad6c7b->leave($__internal_60632604f53d2f3c2fb9e4df48449b8075518ba24889c01f71c446f1eaad6c7b_prof);

        
        $__internal_210a71a4aee75bd06cf8695dc1b34656d690edcbf0bce3cf70e49f8b66380d2c->leave($__internal_210a71a4aee75bd06cf8695dc1b34656d690edcbf0bce3cf70e49f8b66380d2c_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b0735296951be07862ab4230defb262ee455e64f2d1ec5591e5a60f2b8473a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0735296951be07862ab4230defb262ee455e64f2d1ec5591e5a60f2b8473a8->enter($__internal_6b0735296951be07862ab4230defb262ee455e64f2d1ec5591e5a60f2b8473a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d66c70f385e377906bc4b347b99c86aceb9f3c03e4c5640ca3faf6d06907f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d66c70f385e377906bc4b347b99c86aceb9f3c03e4c5640ca3faf6d06907f50->enter($__internal_6d66c70f385e377906bc4b347b99c86aceb9f3c03e4c5640ca3faf6d06907f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_6d66c70f385e377906bc4b347b99c86aceb9f3c03e4c5640ca3faf6d06907f50->leave($__internal_6d66c70f385e377906bc4b347b99c86aceb9f3c03e4c5640ca3faf6d06907f50_prof);

        
        $__internal_6b0735296951be07862ab4230defb262ee455e64f2d1ec5591e5a60f2b8473a8->leave($__internal_6b0735296951be07862ab4230defb262ee455e64f2d1ec5591e5a60f2b8473a8_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f7584a7512e1b7540088d6b4a60386326061182f7a6cef6ff9fcae01d9f91ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7584a7512e1b7540088d6b4a60386326061182f7a6cef6ff9fcae01d9f91ce->enter($__internal_3f7584a7512e1b7540088d6b4a60386326061182f7a6cef6ff9fcae01d9f91ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_026773f9e55553592cc3fb3f7154e838d9cce0589d1080568c440885ab1ef43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026773f9e55553592cc3fb3f7154e838d9cce0589d1080568c440885ab1ef43c->enter($__internal_026773f9e55553592cc3fb3f7154e838d9cce0589d1080568c440885ab1ef43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_026773f9e55553592cc3fb3f7154e838d9cce0589d1080568c440885ab1ef43c->leave($__internal_026773f9e55553592cc3fb3f7154e838d9cce0589d1080568c440885ab1ef43c_prof);

        
        $__internal_3f7584a7512e1b7540088d6b4a60386326061182f7a6cef6ff9fcae01d9f91ce->leave($__internal_3f7584a7512e1b7540088d6b4a60386326061182f7a6cef6ff9fcae01d9f91ce_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
</html>", "layout.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\layout.html.twig");
    }
}
