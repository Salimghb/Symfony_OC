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
        $__internal_53befa67014fb06f2fe8b25a8c609835bffebecf6fbc1e6419a5639dcbbc0a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53befa67014fb06f2fe8b25a8c609835bffebecf6fbc1e6419a5639dcbbc0a9b->enter($__internal_53befa67014fb06f2fe8b25a8c609835bffebecf6fbc1e6419a5639dcbbc0a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_29629314a133c3130ce37fac07e0990ede9493551d6484f14511513161cfb335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29629314a133c3130ce37fac07e0990ede9493551d6484f14511513161cfb335->enter($__internal_29629314a133c3130ce37fac07e0990ede9493551d6484f14511513161cfb335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_53befa67014fb06f2fe8b25a8c609835bffebecf6fbc1e6419a5639dcbbc0a9b->leave($__internal_53befa67014fb06f2fe8b25a8c609835bffebecf6fbc1e6419a5639dcbbc0a9b_prof);

        
        $__internal_29629314a133c3130ce37fac07e0990ede9493551d6484f14511513161cfb335->leave($__internal_29629314a133c3130ce37fac07e0990ede9493551d6484f14511513161cfb335_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d12d73b5c7d5a61f67d5c075d93334fb02b48f1712f13e496ee45009670477fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12d73b5c7d5a61f67d5c075d93334fb02b48f1712f13e496ee45009670477fc->enter($__internal_d12d73b5c7d5a61f67d5c075d93334fb02b48f1712f13e496ee45009670477fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d7a4f3f829c0ec277bd07f463c56a549466d950bfaa29e9d65714bfbf0fba0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7a4f3f829c0ec277bd07f463c56a549466d950bfaa29e9d65714bfbf0fba0e->enter($__internal_0d7a4f3f829c0ec277bd07f463c56a549466d950bfaa29e9d65714bfbf0fba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de Salim";
        
        $__internal_0d7a4f3f829c0ec277bd07f463c56a549466d950bfaa29e9d65714bfbf0fba0e->leave($__internal_0d7a4f3f829c0ec277bd07f463c56a549466d950bfaa29e9d65714bfbf0fba0e_prof);

        
        $__internal_d12d73b5c7d5a61f67d5c075d93334fb02b48f1712f13e496ee45009670477fc->leave($__internal_d12d73b5c7d5a61f67d5c075d93334fb02b48f1712f13e496ee45009670477fc_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b086d2168423fa351393027a3e8feea9f8975923369800aacd44c0d812b885e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b086d2168423fa351393027a3e8feea9f8975923369800aacd44c0d812b885e4->enter($__internal_b086d2168423fa351393027a3e8feea9f8975923369800aacd44c0d812b885e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ec0c27bcc823f1de4b5c7ea807e91a1d97debbf4fdd4897686b9ab07c5ddbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec0c27bcc823f1de4b5c7ea807e91a1d97debbf4fdd4897686b9ab07c5ddbb4->enter($__internal_7ec0c27bcc823f1de4b5c7ea807e91a1d97debbf4fdd4897686b9ab07c5ddbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_7ec0c27bcc823f1de4b5c7ea807e91a1d97debbf4fdd4897686b9ab07c5ddbb4->leave($__internal_7ec0c27bcc823f1de4b5c7ea807e91a1d97debbf4fdd4897686b9ab07c5ddbb4_prof);

        
        $__internal_b086d2168423fa351393027a3e8feea9f8975923369800aacd44c0d812b885e4->leave($__internal_b086d2168423fa351393027a3e8feea9f8975923369800aacd44c0d812b885e4_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_804abb7092a1071cf710dd909280d2ead1f495a54cbb13f9013e6b1a1f5f055c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804abb7092a1071cf710dd909280d2ead1f495a54cbb13f9013e6b1a1f5f055c->enter($__internal_804abb7092a1071cf710dd909280d2ead1f495a54cbb13f9013e6b1a1f5f055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28f67ef2b47f2b18e9806842d4292965179448efdff1582d554777a935faccfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f67ef2b47f2b18e9806842d4292965179448efdff1582d554777a935faccfa->enter($__internal_28f67ef2b47f2b18e9806842d4292965179448efdff1582d554777a935faccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_28f67ef2b47f2b18e9806842d4292965179448efdff1582d554777a935faccfa->leave($__internal_28f67ef2b47f2b18e9806842d4292965179448efdff1582d554777a935faccfa_prof);

        
        $__internal_804abb7092a1071cf710dd909280d2ead1f495a54cbb13f9013e6b1a1f5f055c->leave($__internal_804abb7092a1071cf710dd909280d2ead1f495a54cbb13f9013e6b1a1f5f055c_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9825736b20ad770406364dea350145f8e174a499889723c1142b045e6975e617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9825736b20ad770406364dea350145f8e174a499889723c1142b045e6975e617->enter($__internal_9825736b20ad770406364dea350145f8e174a499889723c1142b045e6975e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89211d409c5a0e4e123fe461ab610e625853bd4866b32bba30f901d24ec3d7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89211d409c5a0e4e123fe461ab610e625853bd4866b32bba30f901d24ec3d7f9->enter($__internal_89211d409c5a0e4e123fe461ab610e625853bd4866b32bba30f901d24ec3d7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_89211d409c5a0e4e123fe461ab610e625853bd4866b32bba30f901d24ec3d7f9->leave($__internal_89211d409c5a0e4e123fe461ab610e625853bd4866b32bba30f901d24ec3d7f9_prof);

        
        $__internal_9825736b20ad770406364dea350145f8e174a499889723c1142b045e6975e617->leave($__internal_9825736b20ad770406364dea350145f8e174a499889723c1142b045e6975e617_prof);

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
