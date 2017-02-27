<?php

/* layout.html.twig */
class __TwigTemplate_5a72fb37d0fa2eab1490ef7dfda5dacb963c5941d06083ca92a74ed74e05c7cf extends Twig_Template
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
        $__internal_9f1644cf5d59d43d16ab99cdd9931d60faf7b83ba8f1175e8ba75abb39670aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1644cf5d59d43d16ab99cdd9931d60faf7b83ba8f1175e8ba75abb39670aeb->enter($__internal_9f1644cf5d59d43d16ab99cdd9931d60faf7b83ba8f1175e8ba75abb39670aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_7d766e92fbdbc7ecd13eecae22ff401ae1afef54ea50e7daafeaf9216b6c0730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d766e92fbdbc7ecd13eecae22ff401ae1afef54ea50e7daafeaf9216b6c0730->enter($__internal_7d766e92fbdbc7ecd13eecae22ff401ae1afef54ea50e7daafeaf9216b6c0730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_9f1644cf5d59d43d16ab99cdd9931d60faf7b83ba8f1175e8ba75abb39670aeb->leave($__internal_9f1644cf5d59d43d16ab99cdd9931d60faf7b83ba8f1175e8ba75abb39670aeb_prof);

        
        $__internal_7d766e92fbdbc7ecd13eecae22ff401ae1afef54ea50e7daafeaf9216b6c0730->leave($__internal_7d766e92fbdbc7ecd13eecae22ff401ae1afef54ea50e7daafeaf9216b6c0730_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3338eafd78cbed66d27aa1afe8031f8e9243d88260eaac19bf94608272abecd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3338eafd78cbed66d27aa1afe8031f8e9243d88260eaac19bf94608272abecd1->enter($__internal_3338eafd78cbed66d27aa1afe8031f8e9243d88260eaac19bf94608272abecd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_274144a5ebb03dbf6d7251578a87005ad8cf58c6faed422e372b7925e035e378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274144a5ebb03dbf6d7251578a87005ad8cf58c6faed422e372b7925e035e378->enter($__internal_274144a5ebb03dbf6d7251578a87005ad8cf58c6faed422e372b7925e035e378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de Salim";
        
        $__internal_274144a5ebb03dbf6d7251578a87005ad8cf58c6faed422e372b7925e035e378->leave($__internal_274144a5ebb03dbf6d7251578a87005ad8cf58c6faed422e372b7925e035e378_prof);

        
        $__internal_3338eafd78cbed66d27aa1afe8031f8e9243d88260eaac19bf94608272abecd1->leave($__internal_3338eafd78cbed66d27aa1afe8031f8e9243d88260eaac19bf94608272abecd1_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_991034d3ae943a8b9f6ea1468f53f14bbfaa8d5ff989a4496a7eab5806ffab31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991034d3ae943a8b9f6ea1468f53f14bbfaa8d5ff989a4496a7eab5806ffab31->enter($__internal_991034d3ae943a8b9f6ea1468f53f14bbfaa8d5ff989a4496a7eab5806ffab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f8c56b16e14b20950a06da1e9cc09807bf415cfaf39b62fb7b2560a74098dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8c56b16e14b20950a06da1e9cc09807bf415cfaf39b62fb7b2560a74098dca->enter($__internal_8f8c56b16e14b20950a06da1e9cc09807bf415cfaf39b62fb7b2560a74098dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_8f8c56b16e14b20950a06da1e9cc09807bf415cfaf39b62fb7b2560a74098dca->leave($__internal_8f8c56b16e14b20950a06da1e9cc09807bf415cfaf39b62fb7b2560a74098dca_prof);

        
        $__internal_991034d3ae943a8b9f6ea1468f53f14bbfaa8d5ff989a4496a7eab5806ffab31->leave($__internal_991034d3ae943a8b9f6ea1468f53f14bbfaa8d5ff989a4496a7eab5806ffab31_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9082b116dd203f9ff3bb5ae2f595e23b80523d1f10fc95c90b1ec49d4d556fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9082b116dd203f9ff3bb5ae2f595e23b80523d1f10fc95c90b1ec49d4d556fe->enter($__internal_b9082b116dd203f9ff3bb5ae2f595e23b80523d1f10fc95c90b1ec49d4d556fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20411a92635e7e11ca53837ef85a03f96c5957b05448abe8c218b0530a4e2dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20411a92635e7e11ca53837ef85a03f96c5957b05448abe8c218b0530a4e2dfe->enter($__internal_20411a92635e7e11ca53837ef85a03f96c5957b05448abe8c218b0530a4e2dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_20411a92635e7e11ca53837ef85a03f96c5957b05448abe8c218b0530a4e2dfe->leave($__internal_20411a92635e7e11ca53837ef85a03f96c5957b05448abe8c218b0530a4e2dfe_prof);

        
        $__internal_b9082b116dd203f9ff3bb5ae2f595e23b80523d1f10fc95c90b1ec49d4d556fe->leave($__internal_b9082b116dd203f9ff3bb5ae2f595e23b80523d1f10fc95c90b1ec49d4d556fe_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d6eb10d863ce3606d70f6a364b120241525a58e7d8495ccc0a8fce516b76eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6eb10d863ce3606d70f6a364b120241525a58e7d8495ccc0a8fce516b76eb2->enter($__internal_2d6eb10d863ce3606d70f6a364b120241525a58e7d8495ccc0a8fce516b76eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89255ce1c8cc1597568b1656b85eb382943a8de3bfb6de53a323916336055463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89255ce1c8cc1597568b1656b85eb382943a8de3bfb6de53a323916336055463->enter($__internal_89255ce1c8cc1597568b1656b85eb382943a8de3bfb6de53a323916336055463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_89255ce1c8cc1597568b1656b85eb382943a8de3bfb6de53a323916336055463->leave($__internal_89255ce1c8cc1597568b1656b85eb382943a8de3bfb6de53a323916336055463_prof);

        
        $__internal_2d6eb10d863ce3606d70f6a364b120241525a58e7d8495ccc0a8fce516b76eb2->leave($__internal_2d6eb10d863ce3606d70f6a364b120241525a58e7d8495ccc0a8fce516b76eb2_prof);

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
