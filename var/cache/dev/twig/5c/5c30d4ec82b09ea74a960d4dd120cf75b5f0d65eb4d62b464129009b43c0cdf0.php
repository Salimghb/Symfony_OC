<?php

/* SalimPlateformeBundle::layout.html.twig */
class __TwigTemplate_0fd741f34acd0149305e6f52f824989b1fc49e609abb3ba85df9e60ea4b2c13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SalimPlateformeBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'salimplateforme_body' => array($this, 'block_salimplateforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dc832dfd96819a9c1a9acd4029364a98b41a1e4a02aad394594888ffe2879e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc832dfd96819a9c1a9acd4029364a98b41a1e4a02aad394594888ffe2879e6->enter($__internal_5dc832dfd96819a9c1a9acd4029364a98b41a1e4a02aad394594888ffe2879e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $__internal_1473edc0df3c65c650951522257b3ab7b458b868d20c883b181f347a4bc40472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1473edc0df3c65c650951522257b3ab7b458b868d20c883b181f347a4bc40472->enter($__internal_1473edc0df3c65c650951522257b3ab7b458b868d20c883b181f347a4bc40472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dc832dfd96819a9c1a9acd4029364a98b41a1e4a02aad394594888ffe2879e6->leave($__internal_5dc832dfd96819a9c1a9acd4029364a98b41a1e4a02aad394594888ffe2879e6_prof);

        
        $__internal_1473edc0df3c65c650951522257b3ab7b458b868d20c883b181f347a4bc40472->leave($__internal_1473edc0df3c65c650951522257b3ab7b458b868d20c883b181f347a4bc40472_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cde2a5fa0f7bb10449eed4ff161a5fb88d9b7d73846dd5ff1d0ddb9c4f091a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde2a5fa0f7bb10449eed4ff161a5fb88d9b7d73846dd5ff1d0ddb9c4f091a47->enter($__internal_cde2a5fa0f7bb10449eed4ff161a5fb88d9b7d73846dd5ff1d0ddb9c4f091a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1c0dc06648039027c5b5889896dab169df3ad1da2393b13f1534cf6320868a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c0dc06648039027c5b5889896dab169df3ad1da2393b13f1534cf6320868a9->enter($__internal_b1c0dc06648039027c5b5889896dab169df3ad1da2393b13f1534cf6320868a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b1c0dc06648039027c5b5889896dab169df3ad1da2393b13f1534cf6320868a9->leave($__internal_b1c0dc06648039027c5b5889896dab169df3ad1da2393b13f1534cf6320868a9_prof);

        
        $__internal_cde2a5fa0f7bb10449eed4ff161a5fb88d9b7d73846dd5ff1d0ddb9c4f091a47->leave($__internal_cde2a5fa0f7bb10449eed4ff161a5fb88d9b7d73846dd5ff1d0ddb9c4f091a47_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_606558bf5a9e5f7176f327dc82f51d83362ffb25254b34c20d6f59d76556002e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606558bf5a9e5f7176f327dc82f51d83362ffb25254b34c20d6f59d76556002e->enter($__internal_606558bf5a9e5f7176f327dc82f51d83362ffb25254b34c20d6f59d76556002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dcf97492955d4a477223cd3d9e396f248d71e0c06f64424bbc9d4f953b3a720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcf97492955d4a477223cd3d9e396f248d71e0c06f64424bbc9d4f953b3a720->enter($__internal_2dcf97492955d4a477223cd3d9e396f248d71e0c06f64424bbc9d4f953b3a720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t";
        // line 10
        echo "\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 14
        $this->displayBlock('salimplateforme_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_2dcf97492955d4a477223cd3d9e396f248d71e0c06f64424bbc9d4f953b3a720->leave($__internal_2dcf97492955d4a477223cd3d9e396f248d71e0c06f64424bbc9d4f953b3a720_prof);

        
        $__internal_606558bf5a9e5f7176f327dc82f51d83362ffb25254b34c20d6f59d76556002e->leave($__internal_606558bf5a9e5f7176f327dc82f51d83362ffb25254b34c20d6f59d76556002e_prof);

    }

    // line 14
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_775db60cd89ba04ccfa4f4303758ae4c80745744563274976dae4625e99e0c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775db60cd89ba04ccfa4f4303758ae4c80745744563274976dae4625e99e0c61->enter($__internal_775db60cd89ba04ccfa4f4303758ae4c80745744563274976dae4625e99e0c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_7ef57422b723a933581f0f5b014ad5d17af9678c037fed2c1ea00dc2a41925fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef57422b723a933581f0f5b014ad5d17af9678c037fed2c1ea00dc2a41925fc->enter($__internal_7ef57422b723a933581f0f5b014ad5d17af9678c037fed2c1ea00dc2a41925fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 15
        echo "\t\t";
        // line 16
        echo "\t";
        
        $__internal_7ef57422b723a933581f0f5b014ad5d17af9678c037fed2c1ea00dc2a41925fc->leave($__internal_7ef57422b723a933581f0f5b014ad5d17af9678c037fed2c1ea00dc2a41925fc_prof);

        
        $__internal_775db60cd89ba04ccfa4f4303758ae4c80745744563274976dae4625e99e0c61->leave($__internal_775db60cd89ba04ccfa4f4303758ae4c80745744563274976dae4625e99e0c61_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 16,  104 => 15,  95 => 14,  84 => 17,  82 => 14,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout.html.twig' %}

{% block title %}
\tAnnonces - {{ parent() }}
{% endblock %}

{% block body %}

\t{# Titre commun à toutes les pages du bundle #}
\t<h1>Annonces</h1>

\t<hr>

\t{% block salimplateforme_body %}
\t\t{# Bloc que les vues du bundle pourront remplir #}
\t{% endblock %}

{% endblock %}

", "SalimPlateformeBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/layout.html.twig");
    }
}
