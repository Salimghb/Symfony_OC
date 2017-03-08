<?php

/* SalimPlateformeBundle:Advert:edit.html.twig */
class __TwigTemplate_46b09b32e4ed774e339950bfef6c6eae2533dcbef2a48a6f148e473d72cfd948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:edit.html.twig", 1);
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
        $__internal_5693a26cb6c39070c7acad64c589a8b32926855fdae8a87acddcab6963a36dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5693a26cb6c39070c7acad64c589a8b32926855fdae8a87acddcab6963a36dde->enter($__internal_5693a26cb6c39070c7acad64c589a8b32926855fdae8a87acddcab6963a36dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $__internal_48175db15182538dec410ca55f09a439275c49ea0774224f1fe7b57f3ee02faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48175db15182538dec410ca55f09a439275c49ea0774224f1fe7b57f3ee02faf->enter($__internal_48175db15182538dec410ca55f09a439275c49ea0774224f1fe7b57f3ee02faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5693a26cb6c39070c7acad64c589a8b32926855fdae8a87acddcab6963a36dde->leave($__internal_5693a26cb6c39070c7acad64c589a8b32926855fdae8a87acddcab6963a36dde_prof);

        
        $__internal_48175db15182538dec410ca55f09a439275c49ea0774224f1fe7b57f3ee02faf->leave($__internal_48175db15182538dec410ca55f09a439275c49ea0774224f1fe7b57f3ee02faf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d436ceef20550d5bc17ae949a38d79b5b14096a75e0e6c9fa402e7030758f5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d436ceef20550d5bc17ae949a38d79b5b14096a75e0e6c9fa402e7030758f5b1->enter($__internal_d436ceef20550d5bc17ae949a38d79b5b14096a75e0e6c9fa402e7030758f5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_131c6bb1f20bf00cf4280d53fffdf9af13366465bda18ecdec49c9e9a432664a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131c6bb1f20bf00cf4280d53fffdf9af13366465bda18ecdec49c9e9a432664a->enter($__internal_131c6bb1f20bf00cf4280d53fffdf9af13366465bda18ecdec49c9e9a432664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_131c6bb1f20bf00cf4280d53fffdf9af13366465bda18ecdec49c9e9a432664a->leave($__internal_131c6bb1f20bf00cf4280d53fffdf9af13366465bda18ecdec49c9e9a432664a_prof);

        
        $__internal_d436ceef20550d5bc17ae949a38d79b5b14096a75e0e6c9fa402e7030758f5b1->leave($__internal_d436ceef20550d5bc17ae949a38d79b5b14096a75e0e6c9fa402e7030758f5b1_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_b0e52d9a18c69520a27114b70b52626c607366f93928fda5129ded03609c724e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e52d9a18c69520a27114b70b52626c607366f93928fda5129ded03609c724e->enter($__internal_b0e52d9a18c69520a27114b70b52626c607366f93928fda5129ded03609c724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_53a170408f8cf41cdf7f2d28263994ba5b538366d654983c94903cfbb68486b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a170408f8cf41cdf7f2d28263994ba5b538366d654983c94903cfbb68486b8->enter($__internal_53a170408f8cf41cdf7f2d28263994ba5b538366d654983c94903cfbb68486b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "
\t<h2>Modifier une annonce</h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "SalimPlateformeBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tVous éditez une annonce déja existante, merci de ne pas changer l'esprit général de l'annonce déja publiée.
\t</p>

\t<p>
\t\t<a href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_53a170408f8cf41cdf7f2d28263994ba5b538366d654983c94903cfbb68486b8->leave($__internal_53a170408f8cf41cdf7f2d28263994ba5b538366d654983c94903cfbb68486b8_prof);

        
        $__internal_b0e52d9a18c69520a27114b70b52626c607366f93928fda5129ded03609c724e->leave($__internal_b0e52d9a18c69520a27114b70b52626c607366f93928fda5129ded03609c724e_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:edit.html.twig";
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
\tModifier une annonce - {{parent()}}
{% endblock %}

{% block salimplateforme_body %}

\t<h2>Modifier une annonce</h2>

\t{{include(\"SalimPlateformeBundle:Advert:form.html.twig\")}}

\t<p>
\t\tVous éditez une annonce déja existante, merci de ne pas changer l'esprit général de l'annonce déja publiée.
\t</p>

\t<p>
\t\t<a href=\" {{ path('oc_platform_view',{'id':advert.id}) }}\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

{% endblock %}", "SalimPlateformeBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
