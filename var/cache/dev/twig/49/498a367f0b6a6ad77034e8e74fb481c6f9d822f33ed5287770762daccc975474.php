<?php

/* SalimPlateformeBundle:Advert:index.html.twig */
class __TwigTemplate_f15b7c8df0b9a8830b464c49c294efe662d5d9c0ff840278e8a7f3eb13279960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:index.html.twig", 1);
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
        $__internal_3daba4e368cb18fdf97eb0d7535a1de4b33317b67f437629c17adabf5dd0f33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3daba4e368cb18fdf97eb0d7535a1de4b33317b67f437629c17adabf5dd0f33b->enter($__internal_3daba4e368cb18fdf97eb0d7535a1de4b33317b67f437629c17adabf5dd0f33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $__internal_18783b113a748e361570a54ca6170219f0d93a1f02e7bc980e8687ba0f41e9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18783b113a748e361570a54ca6170219f0d93a1f02e7bc980e8687ba0f41e9e8->enter($__internal_18783b113a748e361570a54ca6170219f0d93a1f02e7bc980e8687ba0f41e9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3daba4e368cb18fdf97eb0d7535a1de4b33317b67f437629c17adabf5dd0f33b->leave($__internal_3daba4e368cb18fdf97eb0d7535a1de4b33317b67f437629c17adabf5dd0f33b_prof);

        
        $__internal_18783b113a748e361570a54ca6170219f0d93a1f02e7bc980e8687ba0f41e9e8->leave($__internal_18783b113a748e361570a54ca6170219f0d93a1f02e7bc980e8687ba0f41e9e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13ff0c29a10fa054523d5db735c769f9431557217b380e7a5564264b6bf7325a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ff0c29a10fa054523d5db735c769f9431557217b380e7a5564264b6bf7325a->enter($__internal_13ff0c29a10fa054523d5db735c769f9431557217b380e7a5564264b6bf7325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c60d3b6c3a313195b8c172576ae6bb481f321cf9d653bd0bf8cd48bb0778cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c60d3b6c3a313195b8c172576ae6bb481f321cf9d653bd0bf8cd48bb0778cc3->enter($__internal_1c60d3b6c3a313195b8c172576ae6bb481f321cf9d653bd0bf8cd48bb0778cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1c60d3b6c3a313195b8c172576ae6bb481f321cf9d653bd0bf8cd48bb0778cc3->leave($__internal_1c60d3b6c3a313195b8c172576ae6bb481f321cf9d653bd0bf8cd48bb0778cc3_prof);

        
        $__internal_13ff0c29a10fa054523d5db735c769f9431557217b380e7a5564264b6bf7325a->leave($__internal_13ff0c29a10fa054523d5db735c769f9431557217b380e7a5564264b6bf7325a_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_adb6c4e3e3aae33201039a6551d7604b475c427495bea60be5f63d4cdfc1e645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb6c4e3e3aae33201039a6551d7604b475c427495bea60be5f63d4cdfc1e645->enter($__internal_adb6c4e3e3aae33201039a6551d7604b475c427495bea60be5f63d4cdfc1e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_6a4c4ce410135fb4b3f550d3488e8b0a87d2a75b5e76c1b0e12e36441972a56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4c4ce410135fb4b3f550d3488e8b0a87d2a75b5e76c1b0e12e36441972a56e->enter($__internal_6a4c4ce410135fb4b3f550d3488e8b0a87d2a75b5e76c1b0e12e36441972a56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "\t<h2>Liste des annonces</h2>
\t<ul>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 11
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</a>
\t\t\t\tpar ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo ".

\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t\t<li>Aucune annonce n'est disponible pour le moment!</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ul>

";
        
        $__internal_6a4c4ce410135fb4b3f550d3488e8b0a87d2a75b5e76c1b0e12e36441972a56e->leave($__internal_6a4c4ce410135fb4b3f550d3488e8b0a87d2a75b5e76c1b0e12e36441972a56e_prof);

        
        $__internal_adb6c4e3e3aae33201039a6551d7604b475c427495bea60be5f63d4cdfc1e645->leave($__internal_adb6c4e3e3aae33201039a6551d7604b475c427495bea60be5f63d4cdfc1e645_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 21,  105 => 19,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  81 => 11,  76 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SalimPlateformeBundle::layout.html.twig\" %}

{% block title %}
\tAccueil - {{parent()}}
{% endblock %}

{% block salimplateforme_body %}
\t<h2>Liste des annonces</h2>
\t<ul>
\t\t{% for advert in listAdverts %}
\t\t\t<li>
\t\t\t\t<a href=\"{{path('oc_platform_view',{'id':advert.id})}}\">
\t\t\t\t\t{{advert.title}}</a>
\t\t\t\tpar {{advert.author}},
\t\t\t\tle {{advert.date|date('d/m/Y')}}.

\t\t\t</li>
\t\t{% else %}
\t\t\t<li>Aucune annonce n'est disponible pour le moment!</li>
\t\t{% endfor %}
\t</ul>

{% endblock %}", "SalimPlateformeBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/index.html.twig");
    }
}
