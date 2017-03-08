<?php

/* SalimPlateformeBundle:Advert:delete.html.twig */
class __TwigTemplate_c7dcfc3e36bbb6d999fcb6055c63e38e385c0a12b2971b77f43e5f1bd785d2ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:delete.html.twig", 1);
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
        $__internal_52408196ca8d04355124e04e907100c74408f6670a72c57b7cfb236a0124960e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52408196ca8d04355124e04e907100c74408f6670a72c57b7cfb236a0124960e->enter($__internal_52408196ca8d04355124e04e907100c74408f6670a72c57b7cfb236a0124960e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:delete.html.twig"));

        $__internal_cb2172a40464b7800bb333ab0026e03625ec9016d0d20004fb1b11d09333b17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2172a40464b7800bb333ab0026e03625ec9016d0d20004fb1b11d09333b17c->enter($__internal_cb2172a40464b7800bb333ab0026e03625ec9016d0d20004fb1b11d09333b17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52408196ca8d04355124e04e907100c74408f6670a72c57b7cfb236a0124960e->leave($__internal_52408196ca8d04355124e04e907100c74408f6670a72c57b7cfb236a0124960e_prof);

        
        $__internal_cb2172a40464b7800bb333ab0026e03625ec9016d0d20004fb1b11d09333b17c->leave($__internal_cb2172a40464b7800bb333ab0026e03625ec9016d0d20004fb1b11d09333b17c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f2c39708cb999f9203031724f57abf9354972145e647116529510ce6eaec87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2c39708cb999f9203031724f57abf9354972145e647116529510ce6eaec87c->enter($__internal_0f2c39708cb999f9203031724f57abf9354972145e647116529510ce6eaec87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55f530edb3da5a5e2a8939bdf0a2f1958414029da95f2d063a6e4eb8d85ccc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f530edb3da5a5e2a8939bdf0a2f1958414029da95f2d063a6e4eb8d85ccc49->enter($__internal_55f530edb3da5a5e2a8939bdf0a2f1958414029da95f2d063a6e4eb8d85ccc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tSuppression d'annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_55f530edb3da5a5e2a8939bdf0a2f1958414029da95f2d063a6e4eb8d85ccc49->leave($__internal_55f530edb3da5a5e2a8939bdf0a2f1958414029da95f2d063a6e4eb8d85ccc49_prof);

        
        $__internal_0f2c39708cb999f9203031724f57abf9354972145e647116529510ce6eaec87c->leave($__internal_0f2c39708cb999f9203031724f57abf9354972145e647116529510ce6eaec87c_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_e0908e56c3d745cd8f53e678fe64e1cebec203615d28bf617019775bea492341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0908e56c3d745cd8f53e678fe64e1cebec203615d28bf617019775bea492341->enter($__internal_e0908e56c3d745cd8f53e678fe64e1cebec203615d28bf617019775bea492341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_f718c79ad70652723c3e4348818b362ccf70d7893cd0123aacceabfd014f8fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f718c79ad70652723c3e4348818b362ccf70d7893cd0123aacceabfd014f8fe8->enter($__internal_f718c79ad70652723c3e4348818b362ccf70d7893cd0123aacceabfd014f8fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "
\t<h2>Supprimer une annonce</h2>

\t<p>
\t\tEtes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
\t</p>

\t";
        // line 16
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t\t";
        // line 22
        echo "\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
\t\t";
        // line 24
        echo "\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>

";
        
        $__internal_f718c79ad70652723c3e4348818b362ccf70d7893cd0123aacceabfd014f8fe8->leave($__internal_f718c79ad70652723c3e4348818b362ccf70d7893cd0123aacceabfd014f8fe8_prof);

        
        $__internal_e0908e56c3d745cd8f53e678fe64e1cebec203615d28bf617019775bea492341->leave($__internal_e0908e56c3d745cd8f53e678fe64e1cebec203615d28bf617019775bea492341_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 22,  89 => 17,  84 => 16,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\tSuppression d'annonce - {{ parent() }}
{% endblock %}

{% block salimplateforme_body %}

\t<h2>Supprimer une annonce</h2>

\t<p>
\t\tEtes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
\t</p>

\t{# On met l'id de l'annonce dans la route de l'action du formulaire #}
\t<form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
\t\t<a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t\t{# Ici j'ai écrit le bouton de soumission à la main #}
\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
\t\t{# Ceci va générer le champ CSRF #}
\t\t{{ form_rest(form) }}
\t</form>

{% endblock %}


", "SalimPlateformeBundle:Advert:delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\delete.html.twig");
    }
}
