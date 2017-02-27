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
        $__internal_88ba351cade93f23efa2608f9ef0d802d864a371d0f6ee61bb7b08359af044fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ba351cade93f23efa2608f9ef0d802d864a371d0f6ee61bb7b08359af044fe->enter($__internal_88ba351cade93f23efa2608f9ef0d802d864a371d0f6ee61bb7b08359af044fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $__internal_eb8fb06bf2c8a5a2e9e021ae1575d43276949c3651dcfda7f5ce40d917f13ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8fb06bf2c8a5a2e9e021ae1575d43276949c3651dcfda7f5ce40d917f13ba9->enter($__internal_eb8fb06bf2c8a5a2e9e021ae1575d43276949c3651dcfda7f5ce40d917f13ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ba351cade93f23efa2608f9ef0d802d864a371d0f6ee61bb7b08359af044fe->leave($__internal_88ba351cade93f23efa2608f9ef0d802d864a371d0f6ee61bb7b08359af044fe_prof);

        
        $__internal_eb8fb06bf2c8a5a2e9e021ae1575d43276949c3651dcfda7f5ce40d917f13ba9->leave($__internal_eb8fb06bf2c8a5a2e9e021ae1575d43276949c3651dcfda7f5ce40d917f13ba9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84a4373dc0a0fea8de94fc326838d2b4bcce62d79da4c5c4e74736c30a843093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a4373dc0a0fea8de94fc326838d2b4bcce62d79da4c5c4e74736c30a843093->enter($__internal_84a4373dc0a0fea8de94fc326838d2b4bcce62d79da4c5c4e74736c30a843093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32e84d2dc3de4ff36563c6f887fc3d2dfbc78b2bf893a36b834e3447f119c6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e84d2dc3de4ff36563c6f887fc3d2dfbc78b2bf893a36b834e3447f119c6d9->enter($__internal_32e84d2dc3de4ff36563c6f887fc3d2dfbc78b2bf893a36b834e3447f119c6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_32e84d2dc3de4ff36563c6f887fc3d2dfbc78b2bf893a36b834e3447f119c6d9->leave($__internal_32e84d2dc3de4ff36563c6f887fc3d2dfbc78b2bf893a36b834e3447f119c6d9_prof);

        
        $__internal_84a4373dc0a0fea8de94fc326838d2b4bcce62d79da4c5c4e74736c30a843093->leave($__internal_84a4373dc0a0fea8de94fc326838d2b4bcce62d79da4c5c4e74736c30a843093_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_915a3ce0f4319e940cc79363ee9ea8f998137b32755f4c31ab1bf8c9badb0bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915a3ce0f4319e940cc79363ee9ea8f998137b32755f4c31ab1bf8c9badb0bfb->enter($__internal_915a3ce0f4319e940cc79363ee9ea8f998137b32755f4c31ab1bf8c9badb0bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5070810168e30d85a6b5faaa9230b481616ab12fbcc59061d97947c18109148e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5070810168e30d85a6b5faaa9230b481616ab12fbcc59061d97947c18109148e->enter($__internal_5070810168e30d85a6b5faaa9230b481616ab12fbcc59061d97947c18109148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5070810168e30d85a6b5faaa9230b481616ab12fbcc59061d97947c18109148e->leave($__internal_5070810168e30d85a6b5faaa9230b481616ab12fbcc59061d97947c18109148e_prof);

        
        $__internal_915a3ce0f4319e940cc79363ee9ea8f998137b32755f4c31ab1bf8c9badb0bfb->leave($__internal_915a3ce0f4319e940cc79363ee9ea8f998137b32755f4c31ab1bf8c9badb0bfb_prof);

    }

    // line 14
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_8233e913d3132b4ccde15a7a85189fde9aa367a846fcc1fab8e01825e9794523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8233e913d3132b4ccde15a7a85189fde9aa367a846fcc1fab8e01825e9794523->enter($__internal_8233e913d3132b4ccde15a7a85189fde9aa367a846fcc1fab8e01825e9794523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_70a5fbac0313014f6a40e074615b34de4e67b8fa6337d27d0163d0cd3aed603f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a5fbac0313014f6a40e074615b34de4e67b8fa6337d27d0163d0cd3aed603f->enter($__internal_70a5fbac0313014f6a40e074615b34de4e67b8fa6337d27d0163d0cd3aed603f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 15
        echo "\t\t";
        // line 16
        echo "\t";
        
        $__internal_70a5fbac0313014f6a40e074615b34de4e67b8fa6337d27d0163d0cd3aed603f->leave($__internal_70a5fbac0313014f6a40e074615b34de4e67b8fa6337d27d0163d0cd3aed603f_prof);

        
        $__internal_8233e913d3132b4ccde15a7a85189fde9aa367a846fcc1fab8e01825e9794523->leave($__internal_8233e913d3132b4ccde15a7a85189fde9aa367a846fcc1fab8e01825e9794523_prof);

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
