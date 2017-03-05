<?php

/* ::layout.html.twig */
class __TwigTemplate_aca7b31c86e5ce5ac8ca6c271ae7b7e8c16e9a0cbac542daecde434708ebc760 extends Twig_Template
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
        $__internal_81121b58fb4071e68a53be35d0a88da0160e3aed110cd81939077172c5e27349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81121b58fb4071e68a53be35d0a88da0160e3aed110cd81939077172c5e27349->enter($__internal_81121b58fb4071e68a53be35d0a88da0160e3aed110cd81939077172c5e27349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_7da84d5c18407b9477b6574e55fb479d6cee52cb4009c74399863d43a4716a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da84d5c18407b9477b6574e55fb479d6cee52cb4009c74399863d43a4716a07->enter($__internal_7da84d5c18407b9477b6574e55fb479d6cee52cb4009c74399863d43a4716a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_81121b58fb4071e68a53be35d0a88da0160e3aed110cd81939077172c5e27349->leave($__internal_81121b58fb4071e68a53be35d0a88da0160e3aed110cd81939077172c5e27349_prof);

        
        $__internal_7da84d5c18407b9477b6574e55fb479d6cee52cb4009c74399863d43a4716a07->leave($__internal_7da84d5c18407b9477b6574e55fb479d6cee52cb4009c74399863d43a4716a07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c3b2b5fe376ffcc2799f472003e44be466bbdebbd7dda6378a1a04c6487c8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3b2b5fe376ffcc2799f472003e44be466bbdebbd7dda6378a1a04c6487c8b6->enter($__internal_0c3b2b5fe376ffcc2799f472003e44be466bbdebbd7dda6378a1a04c6487c8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58c7872edf1da1e002f3dd5f5b8612a447e4a87870f6306202076b138e5004b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c7872edf1da1e002f3dd5f5b8612a447e4a87870f6306202076b138e5004b8->enter($__internal_58c7872edf1da1e002f3dd5f5b8612a447e4a87870f6306202076b138e5004b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de Salim";
        
        $__internal_58c7872edf1da1e002f3dd5f5b8612a447e4a87870f6306202076b138e5004b8->leave($__internal_58c7872edf1da1e002f3dd5f5b8612a447e4a87870f6306202076b138e5004b8_prof);

        
        $__internal_0c3b2b5fe376ffcc2799f472003e44be466bbdebbd7dda6378a1a04c6487c8b6->leave($__internal_0c3b2b5fe376ffcc2799f472003e44be466bbdebbd7dda6378a1a04c6487c8b6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67d3a6b0dfdad35a200eabc3469e0d0984272397f1226140fe03981bd98cc08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d3a6b0dfdad35a200eabc3469e0d0984272397f1226140fe03981bd98cc08f->enter($__internal_67d3a6b0dfdad35a200eabc3469e0d0984272397f1226140fe03981bd98cc08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c145f680cf451f0972dda05d31aa40c34e1d7005a2ea796ea2efd89ddaf6430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c145f680cf451f0972dda05d31aa40c34e1d7005a2ea796ea2efd89ddaf6430->enter($__internal_2c145f680cf451f0972dda05d31aa40c34e1d7005a2ea796ea2efd89ddaf6430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_2c145f680cf451f0972dda05d31aa40c34e1d7005a2ea796ea2efd89ddaf6430->leave($__internal_2c145f680cf451f0972dda05d31aa40c34e1d7005a2ea796ea2efd89ddaf6430_prof);

        
        $__internal_67d3a6b0dfdad35a200eabc3469e0d0984272397f1226140fe03981bd98cc08f->leave($__internal_67d3a6b0dfdad35a200eabc3469e0d0984272397f1226140fe03981bd98cc08f_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_56768e5a2e3742e2a1bc8192d37a8426f2123381b10a75edb26e65c3ca910537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56768e5a2e3742e2a1bc8192d37a8426f2123381b10a75edb26e65c3ca910537->enter($__internal_56768e5a2e3742e2a1bc8192d37a8426f2123381b10a75edb26e65c3ca910537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bac1f1b23f239d896b7ea63999229d6df0eb0d6f12f6a6331cf431c9f5617c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac1f1b23f239d896b7ea63999229d6df0eb0d6f12f6a6331cf431c9f5617c33->enter($__internal_bac1f1b23f239d896b7ea63999229d6df0eb0d6f12f6a6331cf431c9f5617c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_bac1f1b23f239d896b7ea63999229d6df0eb0d6f12f6a6331cf431c9f5617c33->leave($__internal_bac1f1b23f239d896b7ea63999229d6df0eb0d6f12f6a6331cf431c9f5617c33_prof);

        
        $__internal_56768e5a2e3742e2a1bc8192d37a8426f2123381b10a75edb26e65c3ca910537->leave($__internal_56768e5a2e3742e2a1bc8192d37a8426f2123381b10a75edb26e65c3ca910537_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_107097777ac640553505414663b0a68e85b8696f3fd09bf4b24538e7fdb36f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107097777ac640553505414663b0a68e85b8696f3fd09bf4b24538e7fdb36f47->enter($__internal_107097777ac640553505414663b0a68e85b8696f3fd09bf4b24538e7fdb36f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e98633ea10d9601ac3924b1387de8be40a0ea63d3e3cf3d1b3584da3213f6276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98633ea10d9601ac3924b1387de8be40a0ea63d3e3cf3d1b3584da3213f6276->enter($__internal_e98633ea10d9601ac3924b1387de8be40a0ea63d3e3cf3d1b3584da3213f6276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_e98633ea10d9601ac3924b1387de8be40a0ea63d3e3cf3d1b3584da3213f6276->leave($__internal_e98633ea10d9601ac3924b1387de8be40a0ea63d3e3cf3d1b3584da3213f6276_prof);

        
        $__internal_107097777ac640553505414663b0a68e85b8696f3fd09bf4b24538e7fdb36f47->leave($__internal_107097777ac640553505414663b0a68e85b8696f3fd09bf4b24538e7fdb36f47_prof);

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
