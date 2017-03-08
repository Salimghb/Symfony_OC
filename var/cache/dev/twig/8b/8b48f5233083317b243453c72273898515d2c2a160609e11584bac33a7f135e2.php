<?php

/* ::layout.html.twig */
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
        $__internal_711d43b6c2cd0d5dd2c4b350850188b981167e6e1438e06fa740f4e079ad3290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711d43b6c2cd0d5dd2c4b350850188b981167e6e1438e06fa740f4e079ad3290->enter($__internal_711d43b6c2cd0d5dd2c4b350850188b981167e6e1438e06fa740f4e079ad3290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_575f68433fcccc91afeb6e07b621dadc2cb8af9cc7a3c933c26fa588dce124b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575f68433fcccc91afeb6e07b621dadc2cb8af9cc7a3c933c26fa588dce124b6->enter($__internal_575f68433fcccc91afeb6e07b621dadc2cb8af9cc7a3c933c26fa588dce124b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_711d43b6c2cd0d5dd2c4b350850188b981167e6e1438e06fa740f4e079ad3290->leave($__internal_711d43b6c2cd0d5dd2c4b350850188b981167e6e1438e06fa740f4e079ad3290_prof);

        
        $__internal_575f68433fcccc91afeb6e07b621dadc2cb8af9cc7a3c933c26fa588dce124b6->leave($__internal_575f68433fcccc91afeb6e07b621dadc2cb8af9cc7a3c933c26fa588dce124b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8add895be8e7e968d639e63d79306ef9e55b061c93e54ab60b03ba10b1d6fb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8add895be8e7e968d639e63d79306ef9e55b061c93e54ab60b03ba10b1d6fb9d->enter($__internal_8add895be8e7e968d639e63d79306ef9e55b061c93e54ab60b03ba10b1d6fb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f05284462d9c36ac42eaca30ed53b1d62b2c7db3af9bd2443d27a8a3f9593c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05284462d9c36ac42eaca30ed53b1d62b2c7db3af9bd2443d27a8a3f9593c69->enter($__internal_f05284462d9c36ac42eaca30ed53b1d62b2c7db3af9bd2443d27a8a3f9593c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de Salim";
        
        $__internal_f05284462d9c36ac42eaca30ed53b1d62b2c7db3af9bd2443d27a8a3f9593c69->leave($__internal_f05284462d9c36ac42eaca30ed53b1d62b2c7db3af9bd2443d27a8a3f9593c69_prof);

        
        $__internal_8add895be8e7e968d639e63d79306ef9e55b061c93e54ab60b03ba10b1d6fb9d->leave($__internal_8add895be8e7e968d639e63d79306ef9e55b061c93e54ab60b03ba10b1d6fb9d_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0ea8a0f99e3329165c3b141c08b96f89a8d1b458c9f43c86cb86933b025e4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ea8a0f99e3329165c3b141c08b96f89a8d1b458c9f43c86cb86933b025e4b1->enter($__internal_a0ea8a0f99e3329165c3b141c08b96f89a8d1b458c9f43c86cb86933b025e4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6ad7fc93796c7cebb57f89cfb7b9dada5579c8e6085d40ae98a02e28b742a918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad7fc93796c7cebb57f89cfb7b9dada5579c8e6085d40ae98a02e28b742a918->enter($__internal_6ad7fc93796c7cebb57f89cfb7b9dada5579c8e6085d40ae98a02e28b742a918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_6ad7fc93796c7cebb57f89cfb7b9dada5579c8e6085d40ae98a02e28b742a918->leave($__internal_6ad7fc93796c7cebb57f89cfb7b9dada5579c8e6085d40ae98a02e28b742a918_prof);

        
        $__internal_a0ea8a0f99e3329165c3b141c08b96f89a8d1b458c9f43c86cb86933b025e4b1->leave($__internal_a0ea8a0f99e3329165c3b141c08b96f89a8d1b458c9f43c86cb86933b025e4b1_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_843cafa62e007ebdbd0aa4b522d0b28a1fd1d8405e9c4cddc2dc87b3be64eb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843cafa62e007ebdbd0aa4b522d0b28a1fd1d8405e9c4cddc2dc87b3be64eb88->enter($__internal_843cafa62e007ebdbd0aa4b522d0b28a1fd1d8405e9c4cddc2dc87b3be64eb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1dfd99a984023f64c21311facc83ab880a6e5461061fc76ecc2b37ff21d0d8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfd99a984023f64c21311facc83ab880a6e5461061fc76ecc2b37ff21d0d8ed->enter($__internal_1dfd99a984023f64c21311facc83ab880a6e5461061fc76ecc2b37ff21d0d8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_1dfd99a984023f64c21311facc83ab880a6e5461061fc76ecc2b37ff21d0d8ed->leave($__internal_1dfd99a984023f64c21311facc83ab880a6e5461061fc76ecc2b37ff21d0d8ed_prof);

        
        $__internal_843cafa62e007ebdbd0aa4b522d0b28a1fd1d8405e9c4cddc2dc87b3be64eb88->leave($__internal_843cafa62e007ebdbd0aa4b522d0b28a1fd1d8405e9c4cddc2dc87b3be64eb88_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_343aec2df448ddf3ef332c96920f9028f425127d739f7de33368e98db01b355a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343aec2df448ddf3ef332c96920f9028f425127d739f7de33368e98db01b355a->enter($__internal_343aec2df448ddf3ef332c96920f9028f425127d739f7de33368e98db01b355a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2da10d70e4b5c1f69764c5a7d000eacd87ff609315fcd45985542cb29b750dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da10d70e4b5c1f69764c5a7d000eacd87ff609315fcd45985542cb29b750dcf->enter($__internal_2da10d70e4b5c1f69764c5a7d000eacd87ff609315fcd45985542cb29b750dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_2da10d70e4b5c1f69764c5a7d000eacd87ff609315fcd45985542cb29b750dcf->leave($__internal_2da10d70e4b5c1f69764c5a7d000eacd87ff609315fcd45985542cb29b750dcf_prof);

        
        $__internal_343aec2df448ddf3ef332c96920f9028f425127d739f7de33368e98db01b355a->leave($__internal_343aec2df448ddf3ef332c96920f9028f425127d739f7de33368e98db01b355a_prof);

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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\layout.html.twig");
    }
}
