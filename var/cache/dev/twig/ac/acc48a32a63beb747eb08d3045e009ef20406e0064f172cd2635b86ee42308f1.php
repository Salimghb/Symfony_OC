<?php

/* @SalimPlateforme/layout.html.twig */
class __TwigTemplate_60c3e05332751435751707e2efd05c491427e2e252919a7720f8c502f5cd096d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@SalimPlateforme/layout.html.twig", 1);
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
        $__internal_3f2415d6069108f0725785c3524538cbae27b6321fe1f5fc9d405c82302544eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2415d6069108f0725785c3524538cbae27b6321fe1f5fc9d405c82302544eb->enter($__internal_3f2415d6069108f0725785c3524538cbae27b6321fe1f5fc9d405c82302544eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/layout.html.twig"));

        $__internal_f4d7ab38b11f293b737e38a394935d24e7c2f48756ce458ff041f99624e36c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d7ab38b11f293b737e38a394935d24e7c2f48756ce458ff041f99624e36c34->enter($__internal_f4d7ab38b11f293b737e38a394935d24e7c2f48756ce458ff041f99624e36c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f2415d6069108f0725785c3524538cbae27b6321fe1f5fc9d405c82302544eb->leave($__internal_3f2415d6069108f0725785c3524538cbae27b6321fe1f5fc9d405c82302544eb_prof);

        
        $__internal_f4d7ab38b11f293b737e38a394935d24e7c2f48756ce458ff041f99624e36c34->leave($__internal_f4d7ab38b11f293b737e38a394935d24e7c2f48756ce458ff041f99624e36c34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1589fee1c93f2747270701b5d8d436015873fa5007da4d05962ece8ef324f410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1589fee1c93f2747270701b5d8d436015873fa5007da4d05962ece8ef324f410->enter($__internal_1589fee1c93f2747270701b5d8d436015873fa5007da4d05962ece8ef324f410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a41896919c942bbe69d6b52173a56c771966d5be5194884251360da8a4b1d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a41896919c942bbe69d6b52173a56c771966d5be5194884251360da8a4b1d1f->enter($__internal_2a41896919c942bbe69d6b52173a56c771966d5be5194884251360da8a4b1d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a41896919c942bbe69d6b52173a56c771966d5be5194884251360da8a4b1d1f->leave($__internal_2a41896919c942bbe69d6b52173a56c771966d5be5194884251360da8a4b1d1f_prof);

        
        $__internal_1589fee1c93f2747270701b5d8d436015873fa5007da4d05962ece8ef324f410->leave($__internal_1589fee1c93f2747270701b5d8d436015873fa5007da4d05962ece8ef324f410_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_16102a6530ffd5464de2e3be0c7a091e7b490b4af969c88616169451e4ad1ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16102a6530ffd5464de2e3be0c7a091e7b490b4af969c88616169451e4ad1ea2->enter($__internal_16102a6530ffd5464de2e3be0c7a091e7b490b4af969c88616169451e4ad1ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d64b7f90d131cba2d8f13e5db4477fc5bdd4e9602193cbd70a40e3af0725c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d64b7f90d131cba2d8f13e5db4477fc5bdd4e9602193cbd70a40e3af0725c1f->enter($__internal_2d64b7f90d131cba2d8f13e5db4477fc5bdd4e9602193cbd70a40e3af0725c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d64b7f90d131cba2d8f13e5db4477fc5bdd4e9602193cbd70a40e3af0725c1f->leave($__internal_2d64b7f90d131cba2d8f13e5db4477fc5bdd4e9602193cbd70a40e3af0725c1f_prof);

        
        $__internal_16102a6530ffd5464de2e3be0c7a091e7b490b4af969c88616169451e4ad1ea2->leave($__internal_16102a6530ffd5464de2e3be0c7a091e7b490b4af969c88616169451e4ad1ea2_prof);

    }

    // line 14
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_27a429c2980d0f34ad1bd9f81d21ab6eae5861cdc663b00b81d17654e04efcca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a429c2980d0f34ad1bd9f81d21ab6eae5861cdc663b00b81d17654e04efcca->enter($__internal_27a429c2980d0f34ad1bd9f81d21ab6eae5861cdc663b00b81d17654e04efcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_01ce42d20e953d6c057229c21e2855a2576b70fcc7344e4f3976bfc4776bc2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ce42d20e953d6c057229c21e2855a2576b70fcc7344e4f3976bfc4776bc2ff->enter($__internal_01ce42d20e953d6c057229c21e2855a2576b70fcc7344e4f3976bfc4776bc2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 15
        echo "\t\t";
        // line 16
        echo "\t";
        
        $__internal_01ce42d20e953d6c057229c21e2855a2576b70fcc7344e4f3976bfc4776bc2ff->leave($__internal_01ce42d20e953d6c057229c21e2855a2576b70fcc7344e4f3976bfc4776bc2ff_prof);

        
        $__internal_27a429c2980d0f34ad1bd9f81d21ab6eae5861cdc663b00b81d17654e04efcca->leave($__internal_27a429c2980d0f34ad1bd9f81d21ab6eae5861cdc663b00b81d17654e04efcca_prof);

    }

    public function getTemplateName()
    {
        return "@SalimPlateforme/layout.html.twig";
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

", "@SalimPlateforme/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\layout.html.twig");
    }
}
