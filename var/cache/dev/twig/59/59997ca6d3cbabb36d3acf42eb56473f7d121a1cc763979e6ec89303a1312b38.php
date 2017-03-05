<?php

/* @SalimPlateforme/layout.html.twig */
class __TwigTemplate_fb261d09ba014c322f391f623ae5d857d910cbe79f588e97cff08006787623ba extends Twig_Template
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
        $__internal_360bcea80576f1d82c457e9cdee6c96535ae7c6128bfd1defcd2f6699ea27718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360bcea80576f1d82c457e9cdee6c96535ae7c6128bfd1defcd2f6699ea27718->enter($__internal_360bcea80576f1d82c457e9cdee6c96535ae7c6128bfd1defcd2f6699ea27718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/layout.html.twig"));

        $__internal_bb0acd34bd1d90b8b35726732d14ff95c237c0b44e25dfa17827e75367d2d80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0acd34bd1d90b8b35726732d14ff95c237c0b44e25dfa17827e75367d2d80b->enter($__internal_bb0acd34bd1d90b8b35726732d14ff95c237c0b44e25dfa17827e75367d2d80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_360bcea80576f1d82c457e9cdee6c96535ae7c6128bfd1defcd2f6699ea27718->leave($__internal_360bcea80576f1d82c457e9cdee6c96535ae7c6128bfd1defcd2f6699ea27718_prof);

        
        $__internal_bb0acd34bd1d90b8b35726732d14ff95c237c0b44e25dfa17827e75367d2d80b->leave($__internal_bb0acd34bd1d90b8b35726732d14ff95c237c0b44e25dfa17827e75367d2d80b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_071b25b71e1f5648044d00400b75829060dd958ca94d0a683e35169bb9cbcf47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071b25b71e1f5648044d00400b75829060dd958ca94d0a683e35169bb9cbcf47->enter($__internal_071b25b71e1f5648044d00400b75829060dd958ca94d0a683e35169bb9cbcf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cae98e31ad7ed80dd552bdfee1387d2f4a6af2f2d2af57c28050203780ab1161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae98e31ad7ed80dd552bdfee1387d2f4a6af2f2d2af57c28050203780ab1161->enter($__internal_cae98e31ad7ed80dd552bdfee1387d2f4a6af2f2d2af57c28050203780ab1161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cae98e31ad7ed80dd552bdfee1387d2f4a6af2f2d2af57c28050203780ab1161->leave($__internal_cae98e31ad7ed80dd552bdfee1387d2f4a6af2f2d2af57c28050203780ab1161_prof);

        
        $__internal_071b25b71e1f5648044d00400b75829060dd958ca94d0a683e35169bb9cbcf47->leave($__internal_071b25b71e1f5648044d00400b75829060dd958ca94d0a683e35169bb9cbcf47_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_74d4ca7fd0fd1debf3443b88078c0aac780804b458a59279f701b93b1c2ef2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d4ca7fd0fd1debf3443b88078c0aac780804b458a59279f701b93b1c2ef2bf->enter($__internal_74d4ca7fd0fd1debf3443b88078c0aac780804b458a59279f701b93b1c2ef2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04cb1567fd3bba0a976dc9228e1083a5fe1d3f581cff2fa604169243e3127107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cb1567fd3bba0a976dc9228e1083a5fe1d3f581cff2fa604169243e3127107->enter($__internal_04cb1567fd3bba0a976dc9228e1083a5fe1d3f581cff2fa604169243e3127107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04cb1567fd3bba0a976dc9228e1083a5fe1d3f581cff2fa604169243e3127107->leave($__internal_04cb1567fd3bba0a976dc9228e1083a5fe1d3f581cff2fa604169243e3127107_prof);

        
        $__internal_74d4ca7fd0fd1debf3443b88078c0aac780804b458a59279f701b93b1c2ef2bf->leave($__internal_74d4ca7fd0fd1debf3443b88078c0aac780804b458a59279f701b93b1c2ef2bf_prof);

    }

    // line 14
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_d0d2c8f97ce7604ee902e0d9cc2d0d52bb61ba2b63b43f62685381ff1ff63b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d2c8f97ce7604ee902e0d9cc2d0d52bb61ba2b63b43f62685381ff1ff63b2b->enter($__internal_d0d2c8f97ce7604ee902e0d9cc2d0d52bb61ba2b63b43f62685381ff1ff63b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_ed4a024c657803f788bcbd450717c62f1423ff4800118e28b67421f0b5e86430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4a024c657803f788bcbd450717c62f1423ff4800118e28b67421f0b5e86430->enter($__internal_ed4a024c657803f788bcbd450717c62f1423ff4800118e28b67421f0b5e86430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 15
        echo "\t\t";
        // line 16
        echo "\t";
        
        $__internal_ed4a024c657803f788bcbd450717c62f1423ff4800118e28b67421f0b5e86430->leave($__internal_ed4a024c657803f788bcbd450717c62f1423ff4800118e28b67421f0b5e86430_prof);

        
        $__internal_d0d2c8f97ce7604ee902e0d9cc2d0d52bb61ba2b63b43f62685381ff1ff63b2b->leave($__internal_d0d2c8f97ce7604ee902e0d9cc2d0d52bb61ba2b63b43f62685381ff1ff63b2b_prof);

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
