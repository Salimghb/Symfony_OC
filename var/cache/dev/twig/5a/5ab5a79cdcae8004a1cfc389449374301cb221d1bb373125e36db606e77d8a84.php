<?php

/* @SalimPlateforme/Advert/add.html.twig */
class __TwigTemplate_e0b18c6a7895fb873ed3fc33309edb71eee846abcec746788c8be41bdd867d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "@SalimPlateforme/Advert/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'salimplateforme_body' => array($this, 'block_salimplateforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalimPlateformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e284dd042f2a094471d33c7fa22a5b179308adcaf69e9c8410149742d88d234b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e284dd042f2a094471d33c7fa22a5b179308adcaf69e9c8410149742d88d234b->enter($__internal_e284dd042f2a094471d33c7fa22a5b179308adcaf69e9c8410149742d88d234b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/add.html.twig"));

        $__internal_89e448f5f4840c0ee8c690074d0814d629663f6f9a603310ecded1ec5f6cbb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e448f5f4840c0ee8c690074d0814d629663f6f9a603310ecded1ec5f6cbb3c->enter($__internal_89e448f5f4840c0ee8c690074d0814d629663f6f9a603310ecded1ec5f6cbb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e284dd042f2a094471d33c7fa22a5b179308adcaf69e9c8410149742d88d234b->leave($__internal_e284dd042f2a094471d33c7fa22a5b179308adcaf69e9c8410149742d88d234b_prof);

        
        $__internal_89e448f5f4840c0ee8c690074d0814d629663f6f9a603310ecded1ec5f6cbb3c->leave($__internal_89e448f5f4840c0ee8c690074d0814d629663f6f9a603310ecded1ec5f6cbb3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d08c9f7713849acd750aba0c4a52c4fc9fb2938fedc022b57d19edbd3da40c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08c9f7713849acd750aba0c4a52c4fc9fb2938fedc022b57d19edbd3da40c67->enter($__internal_d08c9f7713849acd750aba0c4a52c4fc9fb2938fedc022b57d19edbd3da40c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3ddde35933163a2d69f87f9e99a5f2b39ee955472f2fd42af3a1f6d34f120cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ddde35933163a2d69f87f9e99a5f2b39ee955472f2fd42af3a1f6d34f120cc->enter($__internal_c3ddde35933163a2d69f87f9e99a5f2b39ee955472f2fd42af3a1f6d34f120cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c3ddde35933163a2d69f87f9e99a5f2b39ee955472f2fd42af3a1f6d34f120cc->leave($__internal_c3ddde35933163a2d69f87f9e99a5f2b39ee955472f2fd42af3a1f6d34f120cc_prof);

        
        $__internal_d08c9f7713849acd750aba0c4a52c4fc9fb2938fedc022b57d19edbd3da40c67->leave($__internal_d08c9f7713849acd750aba0c4a52c4fc9fb2938fedc022b57d19edbd3da40c67_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_57cc04d4e9549568e55829e3e137acb3906a47c985c2e272490927fe59d40bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cc04d4e9549568e55829e3e137acb3906a47c985c2e272490927fe59d40bef->enter($__internal_57cc04d4e9549568e55829e3e137acb3906a47c985c2e272490927fe59d40bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_64a757fbfd470c15e3806484746ff722976a4cf8a79c67f6f4b426f00e78956a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a757fbfd470c15e3806484746ff722976a4cf8a79c67f6f4b426f00e78956a->enter($__internal_64a757fbfd470c15e3806484746ff722976a4cf8a79c67f6f4b426f00e78956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "
\t<h2>Ajouter une annonce</h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "SalimPlateformeBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tAttention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'accueil

\t\t</a>
\t</p>

";
        
        $__internal_64a757fbfd470c15e3806484746ff722976a4cf8a79c67f6f4b426f00e78956a->leave($__internal_64a757fbfd470c15e3806484746ff722976a4cf8a79c67f6f4b426f00e78956a_prof);

        
        $__internal_57cc04d4e9549568e55829e3e137acb3906a47c985c2e272490927fe59d40bef->leave($__internal_57cc04d4e9549568e55829e3e137acb3906a47c985c2e272490927fe59d40bef_prof);

    }

    public function getTemplateName()
    {
        return "@SalimPlateforme/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SalimPlateformeBundle::layout.html.twig' %}

{% block title %}
\tAjouter une annonce - {{parent()}}
{% endblock %}

{% block salimplateforme_body %}

\t<h2>Ajouter une annonce</h2>

\t{{ include(\"SalimPlateformeBundle:Advert:form.html.twig\") }}

\t<p>
\t\tAttention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'accueil

\t\t</a>
\t</p>

{% endblock %}", "@SalimPlateforme/Advert/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
