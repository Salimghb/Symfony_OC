<?php

/* SalimPlateformeBundle::layout.html.twig */
class __TwigTemplate_fb261d09ba014c322f391f623ae5d857d910cbe79f588e97cff08006787623ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SalimPlateformeBundle::layout.html.twig", 1);
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
        $__internal_04bd0374f7de4bd9aff5a4bef14a2507ee0c2a38ae2c15600e37358a098d73fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bd0374f7de4bd9aff5a4bef14a2507ee0c2a38ae2c15600e37358a098d73fd->enter($__internal_04bd0374f7de4bd9aff5a4bef14a2507ee0c2a38ae2c15600e37358a098d73fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $__internal_3a6c9359d6d624f611ed3cf8dea362f60eb57065a9b57994de5c5741712dabda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6c9359d6d624f611ed3cf8dea362f60eb57065a9b57994de5c5741712dabda->enter($__internal_3a6c9359d6d624f611ed3cf8dea362f60eb57065a9b57994de5c5741712dabda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04bd0374f7de4bd9aff5a4bef14a2507ee0c2a38ae2c15600e37358a098d73fd->leave($__internal_04bd0374f7de4bd9aff5a4bef14a2507ee0c2a38ae2c15600e37358a098d73fd_prof);

        
        $__internal_3a6c9359d6d624f611ed3cf8dea362f60eb57065a9b57994de5c5741712dabda->leave($__internal_3a6c9359d6d624f611ed3cf8dea362f60eb57065a9b57994de5c5741712dabda_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cba5772e6ae32fa41d436ab2d7a3cadeee317268c474f125475bad592310cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cba5772e6ae32fa41d436ab2d7a3cadeee317268c474f125475bad592310cdc->enter($__internal_4cba5772e6ae32fa41d436ab2d7a3cadeee317268c474f125475bad592310cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_412204cacbfadc05adee3e43b215f7d71e8613f9ee92528724833a8d95e97258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412204cacbfadc05adee3e43b215f7d71e8613f9ee92528724833a8d95e97258->enter($__internal_412204cacbfadc05adee3e43b215f7d71e8613f9ee92528724833a8d95e97258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_412204cacbfadc05adee3e43b215f7d71e8613f9ee92528724833a8d95e97258->leave($__internal_412204cacbfadc05adee3e43b215f7d71e8613f9ee92528724833a8d95e97258_prof);

        
        $__internal_4cba5772e6ae32fa41d436ab2d7a3cadeee317268c474f125475bad592310cdc->leave($__internal_4cba5772e6ae32fa41d436ab2d7a3cadeee317268c474f125475bad592310cdc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f885a2b0983ce67916a23a0456a79b19b66df0a506378fad561ddeb285c6b3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f885a2b0983ce67916a23a0456a79b19b66df0a506378fad561ddeb285c6b3a9->enter($__internal_f885a2b0983ce67916a23a0456a79b19b66df0a506378fad561ddeb285c6b3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a0a2e674b6e781c13861d845da3ec42fe7470c4a13f78e98dfb2984885c3823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0a2e674b6e781c13861d845da3ec42fe7470c4a13f78e98dfb2984885c3823->enter($__internal_1a0a2e674b6e781c13861d845da3ec42fe7470c4a13f78e98dfb2984885c3823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a0a2e674b6e781c13861d845da3ec42fe7470c4a13f78e98dfb2984885c3823->leave($__internal_1a0a2e674b6e781c13861d845da3ec42fe7470c4a13f78e98dfb2984885c3823_prof);

        
        $__internal_f885a2b0983ce67916a23a0456a79b19b66df0a506378fad561ddeb285c6b3a9->leave($__internal_f885a2b0983ce67916a23a0456a79b19b66df0a506378fad561ddeb285c6b3a9_prof);

    }

    // line 14
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_1edd06c8fc92711627335f2af29b7e2547610b9e3d03b69f11edff82e7483cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1edd06c8fc92711627335f2af29b7e2547610b9e3d03b69f11edff82e7483cc9->enter($__internal_1edd06c8fc92711627335f2af29b7e2547610b9e3d03b69f11edff82e7483cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_8d766e5c49b52923ad33be53e188ae50ae204515b85c568da9dd81165d930c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d766e5c49b52923ad33be53e188ae50ae204515b85c568da9dd81165d930c72->enter($__internal_8d766e5c49b52923ad33be53e188ae50ae204515b85c568da9dd81165d930c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 15
        echo "\t\t";
        // line 16
        echo "\t";
        
        $__internal_8d766e5c49b52923ad33be53e188ae50ae204515b85c568da9dd81165d930c72->leave($__internal_8d766e5c49b52923ad33be53e188ae50ae204515b85c568da9dd81165d930c72_prof);

        
        $__internal_1edd06c8fc92711627335f2af29b7e2547610b9e3d03b69f11edff82e7483cc9->leave($__internal_1edd06c8fc92711627335f2af29b7e2547610b9e3d03b69f11edff82e7483cc9_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle::layout.html.twig";
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

", "SalimPlateformeBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\layout.html.twig");
    }
}
