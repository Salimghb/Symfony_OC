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
        $__internal_aa1550c124cf1a945c16798e81fe12f9ebb30cca0015e3c4a61178b6c2d8eb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1550c124cf1a945c16798e81fe12f9ebb30cca0015e3c4a61178b6c2d8eb4d->enter($__internal_aa1550c124cf1a945c16798e81fe12f9ebb30cca0015e3c4a61178b6c2d8eb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $__internal_a2330dbacbcaf912fbd732d99a5e5b3678fb75c1df1ab6bca7bce3012d01d248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2330dbacbcaf912fbd732d99a5e5b3678fb75c1df1ab6bca7bce3012d01d248->enter($__internal_a2330dbacbcaf912fbd732d99a5e5b3678fb75c1df1ab6bca7bce3012d01d248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa1550c124cf1a945c16798e81fe12f9ebb30cca0015e3c4a61178b6c2d8eb4d->leave($__internal_aa1550c124cf1a945c16798e81fe12f9ebb30cca0015e3c4a61178b6c2d8eb4d_prof);

        
        $__internal_a2330dbacbcaf912fbd732d99a5e5b3678fb75c1df1ab6bca7bce3012d01d248->leave($__internal_a2330dbacbcaf912fbd732d99a5e5b3678fb75c1df1ab6bca7bce3012d01d248_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19a01d16b9c8b9ae115df8879f86c2f0db10c4ec352adc27d0bd2e5727c17338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a01d16b9c8b9ae115df8879f86c2f0db10c4ec352adc27d0bd2e5727c17338->enter($__internal_19a01d16b9c8b9ae115df8879f86c2f0db10c4ec352adc27d0bd2e5727c17338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8467806c53a7fbd7f737f8131ac843d5fa43ff82a9161145f15376f9e555d391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8467806c53a7fbd7f737f8131ac843d5fa43ff82a9161145f15376f9e555d391->enter($__internal_8467806c53a7fbd7f737f8131ac843d5fa43ff82a9161145f15376f9e555d391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8467806c53a7fbd7f737f8131ac843d5fa43ff82a9161145f15376f9e555d391->leave($__internal_8467806c53a7fbd7f737f8131ac843d5fa43ff82a9161145f15376f9e555d391_prof);

        
        $__internal_19a01d16b9c8b9ae115df8879f86c2f0db10c4ec352adc27d0bd2e5727c17338->leave($__internal_19a01d16b9c8b9ae115df8879f86c2f0db10c4ec352adc27d0bd2e5727c17338_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_a396ec90b9375ea83a5b88023a597318b99dc7ac10a5adef7e801b6ae8faf5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a396ec90b9375ea83a5b88023a597318b99dc7ac10a5adef7e801b6ae8faf5e2->enter($__internal_a396ec90b9375ea83a5b88023a597318b99dc7ac10a5adef7e801b6ae8faf5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_cf7e376db0d8876c82adf364e27331a3ca5b69fd2e2bd4df1071ba0ed3d871cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7e376db0d8876c82adf364e27331a3ca5b69fd2e2bd4df1071ba0ed3d871cf->enter($__internal_cf7e376db0d8876c82adf364e27331a3ca5b69fd2e2bd4df1071ba0ed3d871cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_cf7e376db0d8876c82adf364e27331a3ca5b69fd2e2bd4df1071ba0ed3d871cf->leave($__internal_cf7e376db0d8876c82adf364e27331a3ca5b69fd2e2bd4df1071ba0ed3d871cf_prof);

        
        $__internal_a396ec90b9375ea83a5b88023a597318b99dc7ac10a5adef7e801b6ae8faf5e2->leave($__internal_a396ec90b9375ea83a5b88023a597318b99dc7ac10a5adef7e801b6ae8faf5e2_prof);

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
