<?php

/* SalimPlateformeBundle:Advert:index.html.twig */
class __TwigTemplate_f200074ca7606affa1c4467ccb5a43a66ed538d61f1b43db60a5a913c8775312 extends Twig_Template
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
        $__internal_eaf31aeb6d69e94ed6f06a61e2689aceb481934d3c1e001b907322ec0fe1733e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf31aeb6d69e94ed6f06a61e2689aceb481934d3c1e001b907322ec0fe1733e->enter($__internal_eaf31aeb6d69e94ed6f06a61e2689aceb481934d3c1e001b907322ec0fe1733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $__internal_2034f90975bdffb01ef4f8de9920ab68f4a2f0be658ed3d2c8f2155d836cf762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2034f90975bdffb01ef4f8de9920ab68f4a2f0be658ed3d2c8f2155d836cf762->enter($__internal_2034f90975bdffb01ef4f8de9920ab68f4a2f0be658ed3d2c8f2155d836cf762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf31aeb6d69e94ed6f06a61e2689aceb481934d3c1e001b907322ec0fe1733e->leave($__internal_eaf31aeb6d69e94ed6f06a61e2689aceb481934d3c1e001b907322ec0fe1733e_prof);

        
        $__internal_2034f90975bdffb01ef4f8de9920ab68f4a2f0be658ed3d2c8f2155d836cf762->leave($__internal_2034f90975bdffb01ef4f8de9920ab68f4a2f0be658ed3d2c8f2155d836cf762_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb07253c46161483ad2dc2b23c515a889a27093d74133ab0cbd795bf8ed93930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb07253c46161483ad2dc2b23c515a889a27093d74133ab0cbd795bf8ed93930->enter($__internal_eb07253c46161483ad2dc2b23c515a889a27093d74133ab0cbd795bf8ed93930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d4448f0f3075ddaf7c79318c40b7d48a2d51f3c6e0f26cededf42cc572ee2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4448f0f3075ddaf7c79318c40b7d48a2d51f3c6e0f26cededf42cc572ee2ea->enter($__internal_3d4448f0f3075ddaf7c79318c40b7d48a2d51f3c6e0f26cededf42cc572ee2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3d4448f0f3075ddaf7c79318c40b7d48a2d51f3c6e0f26cededf42cc572ee2ea->leave($__internal_3d4448f0f3075ddaf7c79318c40b7d48a2d51f3c6e0f26cededf42cc572ee2ea_prof);

        
        $__internal_eb07253c46161483ad2dc2b23c515a889a27093d74133ab0cbd795bf8ed93930->leave($__internal_eb07253c46161483ad2dc2b23c515a889a27093d74133ab0cbd795bf8ed93930_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_5296a45daf6a9370dd5c65f301eb3b0f3f11371b229dfc9a7c4c717b00a31db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5296a45daf6a9370dd5c65f301eb3b0f3f11371b229dfc9a7c4c717b00a31db5->enter($__internal_5296a45daf6a9370dd5c65f301eb3b0f3f11371b229dfc9a7c4c717b00a31db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_49b482bfb187014018deb6b3e0377db59d0618fe255d9418beb06cbba0ee6ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b482bfb187014018deb6b3e0377db59d0618fe255d9418beb06cbba0ee6ed4->enter($__internal_49b482bfb187014018deb6b3e0377db59d0618fe255d9418beb06cbba0ee6ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_49b482bfb187014018deb6b3e0377db59d0618fe255d9418beb06cbba0ee6ed4->leave($__internal_49b482bfb187014018deb6b3e0377db59d0618fe255d9418beb06cbba0ee6ed4_prof);

        
        $__internal_5296a45daf6a9370dd5c65f301eb3b0f3f11371b229dfc9a7c4c717b00a31db5->leave($__internal_5296a45daf6a9370dd5c65f301eb3b0f3f11371b229dfc9a7c4c717b00a31db5_prof);

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
