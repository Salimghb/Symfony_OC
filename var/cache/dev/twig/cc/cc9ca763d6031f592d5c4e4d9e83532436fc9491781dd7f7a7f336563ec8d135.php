<?php

/* SalimPlateformeBundle:Advert:add.html.twig */
class __TwigTemplate_b1ecd4ddb158d629dfb26f41ff45ff51217a68c308d68f48472c23c85505f257 extends Twig_Template
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
        $__internal_30747a14176513448e094183edc128bb147b44dc0c016e915c5ae72de6514294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30747a14176513448e094183edc128bb147b44dc0c016e915c5ae72de6514294->enter($__internal_30747a14176513448e094183edc128bb147b44dc0c016e915c5ae72de6514294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $__internal_f674ca0dfdcd9236eaf50c7847721515ba2525f8d292d4a7e4bf40ed3be9f1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f674ca0dfdcd9236eaf50c7847721515ba2525f8d292d4a7e4bf40ed3be9f1c3->enter($__internal_f674ca0dfdcd9236eaf50c7847721515ba2525f8d292d4a7e4bf40ed3be9f1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30747a14176513448e094183edc128bb147b44dc0c016e915c5ae72de6514294->leave($__internal_30747a14176513448e094183edc128bb147b44dc0c016e915c5ae72de6514294_prof);

        
        $__internal_f674ca0dfdcd9236eaf50c7847721515ba2525f8d292d4a7e4bf40ed3be9f1c3->leave($__internal_f674ca0dfdcd9236eaf50c7847721515ba2525f8d292d4a7e4bf40ed3be9f1c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60b488055ae810693cbba66477b911ea8552824a55e0af3fdb37f0c3cb4148b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b488055ae810693cbba66477b911ea8552824a55e0af3fdb37f0c3cb4148b3->enter($__internal_60b488055ae810693cbba66477b911ea8552824a55e0af3fdb37f0c3cb4148b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b530e4400ac5f8ad97837c2bc54489f406bff15c9f7924062df1bc903d0db712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b530e4400ac5f8ad97837c2bc54489f406bff15c9f7924062df1bc903d0db712->enter($__internal_b530e4400ac5f8ad97837c2bc54489f406bff15c9f7924062df1bc903d0db712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b530e4400ac5f8ad97837c2bc54489f406bff15c9f7924062df1bc903d0db712->leave($__internal_b530e4400ac5f8ad97837c2bc54489f406bff15c9f7924062df1bc903d0db712_prof);

        
        $__internal_60b488055ae810693cbba66477b911ea8552824a55e0af3fdb37f0c3cb4148b3->leave($__internal_60b488055ae810693cbba66477b911ea8552824a55e0af3fdb37f0c3cb4148b3_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_bfc36dc16900e1e65af34f5ffae899e8f9fd40099875a74d4496b5f7d343ffb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc36dc16900e1e65af34f5ffae899e8f9fd40099875a74d4496b5f7d343ffb0->enter($__internal_bfc36dc16900e1e65af34f5ffae899e8f9fd40099875a74d4496b5f7d343ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_1a73b626a3f192f6d916b3108ec2fd855587fa15939dd1e781a7ce3df9d2dc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a73b626a3f192f6d916b3108ec2fd855587fa15939dd1e781a7ce3df9d2dc57->enter($__internal_1a73b626a3f192f6d916b3108ec2fd855587fa15939dd1e781a7ce3df9d2dc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_1a73b626a3f192f6d916b3108ec2fd855587fa15939dd1e781a7ce3df9d2dc57->leave($__internal_1a73b626a3f192f6d916b3108ec2fd855587fa15939dd1e781a7ce3df9d2dc57_prof);

        
        $__internal_bfc36dc16900e1e65af34f5ffae899e8f9fd40099875a74d4496b5f7d343ffb0->leave($__internal_bfc36dc16900e1e65af34f5ffae899e8f9fd40099875a74d4496b5f7d343ffb0_prof);

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
