<?php

/* SalimPlateformeBundle:Advert:add.html.twig */
class __TwigTemplate_e0b18c6a7895fb873ed3fc33309edb71eee846abcec746788c8be41bdd867d9c extends Twig_Template
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
        $__internal_ddb09edb260273acf56f321d7aa8e936a8e633cae8e71b287c510d901611313a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb09edb260273acf56f321d7aa8e936a8e633cae8e71b287c510d901611313a->enter($__internal_ddb09edb260273acf56f321d7aa8e936a8e633cae8e71b287c510d901611313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $__internal_30f33cdbe4d7558acf94f3175c7020a1f697c0ff23fe9a708b5e8d75bc2ca1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f33cdbe4d7558acf94f3175c7020a1f697c0ff23fe9a708b5e8d75bc2ca1c5->enter($__internal_30f33cdbe4d7558acf94f3175c7020a1f697c0ff23fe9a708b5e8d75bc2ca1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb09edb260273acf56f321d7aa8e936a8e633cae8e71b287c510d901611313a->leave($__internal_ddb09edb260273acf56f321d7aa8e936a8e633cae8e71b287c510d901611313a_prof);

        
        $__internal_30f33cdbe4d7558acf94f3175c7020a1f697c0ff23fe9a708b5e8d75bc2ca1c5->leave($__internal_30f33cdbe4d7558acf94f3175c7020a1f697c0ff23fe9a708b5e8d75bc2ca1c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_853ba1cf19cf2738105b89cacb22be62854a77786b153fa75ecb15c95049d5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853ba1cf19cf2738105b89cacb22be62854a77786b153fa75ecb15c95049d5ee->enter($__internal_853ba1cf19cf2738105b89cacb22be62854a77786b153fa75ecb15c95049d5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ddfcc475791f9155de29fc38af6935a14271ffee596cdf48f5627b913329c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddfcc475791f9155de29fc38af6935a14271ffee596cdf48f5627b913329c5a->enter($__internal_6ddfcc475791f9155de29fc38af6935a14271ffee596cdf48f5627b913329c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ddfcc475791f9155de29fc38af6935a14271ffee596cdf48f5627b913329c5a->leave($__internal_6ddfcc475791f9155de29fc38af6935a14271ffee596cdf48f5627b913329c5a_prof);

        
        $__internal_853ba1cf19cf2738105b89cacb22be62854a77786b153fa75ecb15c95049d5ee->leave($__internal_853ba1cf19cf2738105b89cacb22be62854a77786b153fa75ecb15c95049d5ee_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_5c2a673880662bbdff99bfc7d06e41b94cedf35a1bc969b110e7c66a42df9dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2a673880662bbdff99bfc7d06e41b94cedf35a1bc969b110e7c66a42df9dc3->enter($__internal_5c2a673880662bbdff99bfc7d06e41b94cedf35a1bc969b110e7c66a42df9dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_13d881a72c8b0cca45f398e9f3a9795ea030ce8990c5ca12ac026bd381f36414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d881a72c8b0cca45f398e9f3a9795ea030ce8990c5ca12ac026bd381f36414->enter($__internal_13d881a72c8b0cca45f398e9f3a9795ea030ce8990c5ca12ac026bd381f36414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_13d881a72c8b0cca45f398e9f3a9795ea030ce8990c5ca12ac026bd381f36414->leave($__internal_13d881a72c8b0cca45f398e9f3a9795ea030ce8990c5ca12ac026bd381f36414_prof);

        
        $__internal_5c2a673880662bbdff99bfc7d06e41b94cedf35a1bc969b110e7c66a42df9dc3->leave($__internal_5c2a673880662bbdff99bfc7d06e41b94cedf35a1bc969b110e7c66a42df9dc3_prof);

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

{% endblock %}", "SalimPlateformeBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
