<?php

/* SalimPlateformeBundle:Advert:add.html.twig */
class __TwigTemplate_7f4f70068d2037f526137bf1d77909fab07c087f98933efb2c8cdd1fb2f2bb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:add.html.twig", 1);
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
        $__internal_8b99458571e356cbf9bbe5a7d8cdcf88dfd4bb401b83fdd0c8fbdf58d7113992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b99458571e356cbf9bbe5a7d8cdcf88dfd4bb401b83fdd0c8fbdf58d7113992->enter($__internal_8b99458571e356cbf9bbe5a7d8cdcf88dfd4bb401b83fdd0c8fbdf58d7113992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $__internal_23e67cbcdfa44de1223a496e80224a52096c3498334ca573fb76b2f65c3cf0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e67cbcdfa44de1223a496e80224a52096c3498334ca573fb76b2f65c3cf0c6->enter($__internal_23e67cbcdfa44de1223a496e80224a52096c3498334ca573fb76b2f65c3cf0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b99458571e356cbf9bbe5a7d8cdcf88dfd4bb401b83fdd0c8fbdf58d7113992->leave($__internal_8b99458571e356cbf9bbe5a7d8cdcf88dfd4bb401b83fdd0c8fbdf58d7113992_prof);

        
        $__internal_23e67cbcdfa44de1223a496e80224a52096c3498334ca573fb76b2f65c3cf0c6->leave($__internal_23e67cbcdfa44de1223a496e80224a52096c3498334ca573fb76b2f65c3cf0c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2eccd9870ae64a6434f08b8faa5198f32e72f8b4d406546afe8dad27a6be92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2eccd9870ae64a6434f08b8faa5198f32e72f8b4d406546afe8dad27a6be92b->enter($__internal_f2eccd9870ae64a6434f08b8faa5198f32e72f8b4d406546afe8dad27a6be92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9a78d14b03aae75454dbc2408bd27666eca55cc5af682a90d46169ad61c3f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a78d14b03aae75454dbc2408bd27666eca55cc5af682a90d46169ad61c3f6e->enter($__internal_a9a78d14b03aae75454dbc2408bd27666eca55cc5af682a90d46169ad61c3f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a9a78d14b03aae75454dbc2408bd27666eca55cc5af682a90d46169ad61c3f6e->leave($__internal_a9a78d14b03aae75454dbc2408bd27666eca55cc5af682a90d46169ad61c3f6e_prof);

        
        $__internal_f2eccd9870ae64a6434f08b8faa5198f32e72f8b4d406546afe8dad27a6be92b->leave($__internal_f2eccd9870ae64a6434f08b8faa5198f32e72f8b4d406546afe8dad27a6be92b_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_4a1e42e6f4a271fb335cdec0111e2093959d0968316ad63be1c0120f2a65327a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1e42e6f4a271fb335cdec0111e2093959d0968316ad63be1c0120f2a65327a->enter($__internal_4a1e42e6f4a271fb335cdec0111e2093959d0968316ad63be1c0120f2a65327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_1ac27579732af72972c0088c08025d0b8bd0a70c66b3d114b6346d17fe09d139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac27579732af72972c0088c08025d0b8bd0a70c66b3d114b6346d17fe09d139->enter($__internal_1ac27579732af72972c0088c08025d0b8bd0a70c66b3d114b6346d17fe09d139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_1ac27579732af72972c0088c08025d0b8bd0a70c66b3d114b6346d17fe09d139->leave($__internal_1ac27579732af72972c0088c08025d0b8bd0a70c66b3d114b6346d17fe09d139_prof);

        
        $__internal_4a1e42e6f4a271fb335cdec0111e2093959d0968316ad63be1c0120f2a65327a->leave($__internal_4a1e42e6f4a271fb335cdec0111e2093959d0968316ad63be1c0120f2a65327a_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:add.html.twig";
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

{% endblock %}", "SalimPlateformeBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/add.html.twig");
    }
}
