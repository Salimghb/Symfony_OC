<?php

/* SalimPlateformeBundle::layout.html.twig */
class __TwigTemplate_0cae764a16175caf2062bfd2fd5cd788838cf0663f1d66272c560505a5233ae8 extends Twig_Template
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
        $__internal_7fc25f02a4346d181da9df82a7627bbe4fc04b98faf03e68001238c03e54a67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc25f02a4346d181da9df82a7627bbe4fc04b98faf03e68001238c03e54a67d->enter($__internal_7fc25f02a4346d181da9df82a7627bbe4fc04b98faf03e68001238c03e54a67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $__internal_b3676f74685fde2bd537310ae45c1e0597804b047b38bf995bd7cbcf17159175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3676f74685fde2bd537310ae45c1e0597804b047b38bf995bd7cbcf17159175->enter($__internal_b3676f74685fde2bd537310ae45c1e0597804b047b38bf995bd7cbcf17159175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc25f02a4346d181da9df82a7627bbe4fc04b98faf03e68001238c03e54a67d->leave($__internal_7fc25f02a4346d181da9df82a7627bbe4fc04b98faf03e68001238c03e54a67d_prof);

        
        $__internal_b3676f74685fde2bd537310ae45c1e0597804b047b38bf995bd7cbcf17159175->leave($__internal_b3676f74685fde2bd537310ae45c1e0597804b047b38bf995bd7cbcf17159175_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_729ab33b207fefd6de4d42e95d51dde6e64b90920862215e6e3d0490ea19b820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729ab33b207fefd6de4d42e95d51dde6e64b90920862215e6e3d0490ea19b820->enter($__internal_729ab33b207fefd6de4d42e95d51dde6e64b90920862215e6e3d0490ea19b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2eb83fd0c4e060f4b024c22b0698a2750d88f35902f1eb7f4b5311c73af6d2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb83fd0c4e060f4b024c22b0698a2750d88f35902f1eb7f4b5311c73af6d2c8->enter($__internal_2eb83fd0c4e060f4b024c22b0698a2750d88f35902f1eb7f4b5311c73af6d2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2eb83fd0c4e060f4b024c22b0698a2750d88f35902f1eb7f4b5311c73af6d2c8->leave($__internal_2eb83fd0c4e060f4b024c22b0698a2750d88f35902f1eb7f4b5311c73af6d2c8_prof);

        
        $__internal_729ab33b207fefd6de4d42e95d51dde6e64b90920862215e6e3d0490ea19b820->leave($__internal_729ab33b207fefd6de4d42e95d51dde6e64b90920862215e6e3d0490ea19b820_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f220d3d6e125a74d9bc5d017ca38fb1817f262ff1e8c674c6007d00f3350079b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f220d3d6e125a74d9bc5d017ca38fb1817f262ff1e8c674c6007d00f3350079b->enter($__internal_f220d3d6e125a74d9bc5d017ca38fb1817f262ff1e8c674c6007d00f3350079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_693ddeaf79a7c9a48a6ac8c9e60301c41b4a4a64fec466fedd56febba15f4af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693ddeaf79a7c9a48a6ac8c9e60301c41b4a4a64fec466fedd56febba15f4af9->enter($__internal_693ddeaf79a7c9a48a6ac8c9e60301c41b4a4a64fec466fedd56febba15f4af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_693ddeaf79a7c9a48a6ac8c9e60301c41b4a4a64fec466fedd56febba15f4af9->leave($__internal_693ddeaf79a7c9a48a6ac8c9e60301c41b4a4a64fec466fedd56febba15f4af9_prof);

        
        $__internal_f220d3d6e125a74d9bc5d017ca38fb1817f262ff1e8c674c6007d00f3350079b->leave($__internal_f220d3d6e125a74d9bc5d017ca38fb1817f262ff1e8c674c6007d00f3350079b_prof);

    }

    // line 14
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_9de0df268e1ae401766299c21707bd2ea0dc26b04bb3fb5036dafcc48c8b25ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de0df268e1ae401766299c21707bd2ea0dc26b04bb3fb5036dafcc48c8b25ce->enter($__internal_9de0df268e1ae401766299c21707bd2ea0dc26b04bb3fb5036dafcc48c8b25ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_502c32884aee6b2b2d73e6ec33b1236440776abd271eda657f3302a96c55213d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502c32884aee6b2b2d73e6ec33b1236440776abd271eda657f3302a96c55213d->enter($__internal_502c32884aee6b2b2d73e6ec33b1236440776abd271eda657f3302a96c55213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 15
        echo "\t\t";
        // line 16
        echo "\t";
        
        $__internal_502c32884aee6b2b2d73e6ec33b1236440776abd271eda657f3302a96c55213d->leave($__internal_502c32884aee6b2b2d73e6ec33b1236440776abd271eda657f3302a96c55213d_prof);

        
        $__internal_9de0df268e1ae401766299c21707bd2ea0dc26b04bb3fb5036dafcc48c8b25ce->leave($__internal_9de0df268e1ae401766299c21707bd2ea0dc26b04bb3fb5036dafcc48c8b25ce_prof);

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

", "SalimPlateformeBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/layout.html.twig");
    }
}
