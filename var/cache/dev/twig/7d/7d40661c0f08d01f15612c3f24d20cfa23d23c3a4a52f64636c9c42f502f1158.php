<?php

/* @SalimPlateforme/Advert/add.html.twig */
class __TwigTemplate_b7b66100a70372ea6db9572dde32e3b6e6d40bc9b4da6ca7443036762ae8c1d1 extends Twig_Template
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
        $__internal_5d37731b7d6cc6836265b79024612b59cbc38df2c22717c142cd4ed5cf45117b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d37731b7d6cc6836265b79024612b59cbc38df2c22717c142cd4ed5cf45117b->enter($__internal_5d37731b7d6cc6836265b79024612b59cbc38df2c22717c142cd4ed5cf45117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/add.html.twig"));

        $__internal_f0a1fb7b5c1c5b98f14df0b14dd723a493615504537fe45c286852e127ebf5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a1fb7b5c1c5b98f14df0b14dd723a493615504537fe45c286852e127ebf5fe->enter($__internal_f0a1fb7b5c1c5b98f14df0b14dd723a493615504537fe45c286852e127ebf5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d37731b7d6cc6836265b79024612b59cbc38df2c22717c142cd4ed5cf45117b->leave($__internal_5d37731b7d6cc6836265b79024612b59cbc38df2c22717c142cd4ed5cf45117b_prof);

        
        $__internal_f0a1fb7b5c1c5b98f14df0b14dd723a493615504537fe45c286852e127ebf5fe->leave($__internal_f0a1fb7b5c1c5b98f14df0b14dd723a493615504537fe45c286852e127ebf5fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67d9a900d3e60aab4d18316c03a377099e0aafb826e6468fa412e31c90b06b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67d9a900d3e60aab4d18316c03a377099e0aafb826e6468fa412e31c90b06b1->enter($__internal_e67d9a900d3e60aab4d18316c03a377099e0aafb826e6468fa412e31c90b06b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c661e9192994055b17b6f07812f259a68b7d74079d9c0412cd6e5a97394b059d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c661e9192994055b17b6f07812f259a68b7d74079d9c0412cd6e5a97394b059d->enter($__internal_c661e9192994055b17b6f07812f259a68b7d74079d9c0412cd6e5a97394b059d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c661e9192994055b17b6f07812f259a68b7d74079d9c0412cd6e5a97394b059d->leave($__internal_c661e9192994055b17b6f07812f259a68b7d74079d9c0412cd6e5a97394b059d_prof);

        
        $__internal_e67d9a900d3e60aab4d18316c03a377099e0aafb826e6468fa412e31c90b06b1->leave($__internal_e67d9a900d3e60aab4d18316c03a377099e0aafb826e6468fa412e31c90b06b1_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_2e2b300aadcba637d5a668e5ca13dc02b1e326c7caf97c7b1f5b52aa0acd3fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2b300aadcba637d5a668e5ca13dc02b1e326c7caf97c7b1f5b52aa0acd3fac->enter($__internal_2e2b300aadcba637d5a668e5ca13dc02b1e326c7caf97c7b1f5b52aa0acd3fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_9cd3c87b327ee4170d0e1cceb3fd7070a3dc1baaa9f5f609955c83549fa81abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd3c87b327ee4170d0e1cceb3fd7070a3dc1baaa9f5f609955c83549fa81abc->enter($__internal_9cd3c87b327ee4170d0e1cceb3fd7070a3dc1baaa9f5f609955c83549fa81abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_9cd3c87b327ee4170d0e1cceb3fd7070a3dc1baaa9f5f609955c83549fa81abc->leave($__internal_9cd3c87b327ee4170d0e1cceb3fd7070a3dc1baaa9f5f609955c83549fa81abc_prof);

        
        $__internal_2e2b300aadcba637d5a668e5ca13dc02b1e326c7caf97c7b1f5b52aa0acd3fac->leave($__internal_2e2b300aadcba637d5a668e5ca13dc02b1e326c7caf97c7b1f5b52aa0acd3fac_prof);

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
