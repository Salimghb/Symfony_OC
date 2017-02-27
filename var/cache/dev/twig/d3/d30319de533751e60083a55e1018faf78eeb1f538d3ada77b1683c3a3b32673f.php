<?php

/* SalimPlateformeBundle:Advert:edit.html.twig */
class __TwigTemplate_c70dce2bbaa45cfbc793c1eed49315dc04822af049789c7a8ba0d8d829f0342e extends Twig_Template
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
        $__internal_a2813a827655f2ba00c2f340a35b3aa7e43ad220b5d9d6e83ebbf0816d06e852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2813a827655f2ba00c2f340a35b3aa7e43ad220b5d9d6e83ebbf0816d06e852->enter($__internal_a2813a827655f2ba00c2f340a35b3aa7e43ad220b5d9d6e83ebbf0816d06e852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $__internal_161c17374d3a8561bba81fa351ee90d2e0c0d5a9b55406f7bef5f19558904cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161c17374d3a8561bba81fa351ee90d2e0c0d5a9b55406f7bef5f19558904cf0->enter($__internal_161c17374d3a8561bba81fa351ee90d2e0c0d5a9b55406f7bef5f19558904cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2813a827655f2ba00c2f340a35b3aa7e43ad220b5d9d6e83ebbf0816d06e852->leave($__internal_a2813a827655f2ba00c2f340a35b3aa7e43ad220b5d9d6e83ebbf0816d06e852_prof);

        
        $__internal_161c17374d3a8561bba81fa351ee90d2e0c0d5a9b55406f7bef5f19558904cf0->leave($__internal_161c17374d3a8561bba81fa351ee90d2e0c0d5a9b55406f7bef5f19558904cf0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74fb8b2a768c55446799456f9e37612a96360daf87f9ca351c1daf2f09f50c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fb8b2a768c55446799456f9e37612a96360daf87f9ca351c1daf2f09f50c09->enter($__internal_74fb8b2a768c55446799456f9e37612a96360daf87f9ca351c1daf2f09f50c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54b122da0e5e842f8b83857a00cf043efa22df06f885c276ece5b90a9215f6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b122da0e5e842f8b83857a00cf043efa22df06f885c276ece5b90a9215f6d0->enter($__internal_54b122da0e5e842f8b83857a00cf043efa22df06f885c276ece5b90a9215f6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_54b122da0e5e842f8b83857a00cf043efa22df06f885c276ece5b90a9215f6d0->leave($__internal_54b122da0e5e842f8b83857a00cf043efa22df06f885c276ece5b90a9215f6d0_prof);

        
        $__internal_74fb8b2a768c55446799456f9e37612a96360daf87f9ca351c1daf2f09f50c09->leave($__internal_74fb8b2a768c55446799456f9e37612a96360daf87f9ca351c1daf2f09f50c09_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_47931b446786dd3dd0c920dc0f643707e297cbb297e654eaf6dcc63e13198750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47931b446786dd3dd0c920dc0f643707e297cbb297e654eaf6dcc63e13198750->enter($__internal_47931b446786dd3dd0c920dc0f643707e297cbb297e654eaf6dcc63e13198750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_5c2edf3e0097044797531ec33d83d04cad3269e39690960dca34253748bcbac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2edf3e0097044797531ec33d83d04cad3269e39690960dca34253748bcbac4->enter($__internal_5c2edf3e0097044797531ec33d83d04cad3269e39690960dca34253748bcbac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_5c2edf3e0097044797531ec33d83d04cad3269e39690960dca34253748bcbac4->leave($__internal_5c2edf3e0097044797531ec33d83d04cad3269e39690960dca34253748bcbac4_prof);

        
        $__internal_47931b446786dd3dd0c920dc0f643707e297cbb297e654eaf6dcc63e13198750->leave($__internal_47931b446786dd3dd0c920dc0f643707e297cbb297e654eaf6dcc63e13198750_prof);

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

{% endblock %}", "SalimPlateformeBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/edit.html.twig");
    }
}
