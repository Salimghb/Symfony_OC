<?php

/* @SalimPlateforme/Advert/edit.html.twig */
class __TwigTemplate_46b09b32e4ed774e339950bfef6c6eae2533dcbef2a48a6f148e473d72cfd948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "@SalimPlateforme/Advert/edit.html.twig", 1);
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
        $__internal_8ce62a8da6f7941402b63751e58fbcc53c2b1d25bcb4a02a739240c4e0b64592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce62a8da6f7941402b63751e58fbcc53c2b1d25bcb4a02a739240c4e0b64592->enter($__internal_8ce62a8da6f7941402b63751e58fbcc53c2b1d25bcb4a02a739240c4e0b64592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/edit.html.twig"));

        $__internal_24d156d4797d3d2638bad401119a79e7462c2e8147195fe81c4ece5ca011f883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d156d4797d3d2638bad401119a79e7462c2e8147195fe81c4ece5ca011f883->enter($__internal_24d156d4797d3d2638bad401119a79e7462c2e8147195fe81c4ece5ca011f883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce62a8da6f7941402b63751e58fbcc53c2b1d25bcb4a02a739240c4e0b64592->leave($__internal_8ce62a8da6f7941402b63751e58fbcc53c2b1d25bcb4a02a739240c4e0b64592_prof);

        
        $__internal_24d156d4797d3d2638bad401119a79e7462c2e8147195fe81c4ece5ca011f883->leave($__internal_24d156d4797d3d2638bad401119a79e7462c2e8147195fe81c4ece5ca011f883_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc2b12f7d5e661a9470e98e93e64f3de6d88ad6a5282dd456ebcff13ac28602c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2b12f7d5e661a9470e98e93e64f3de6d88ad6a5282dd456ebcff13ac28602c->enter($__internal_cc2b12f7d5e661a9470e98e93e64f3de6d88ad6a5282dd456ebcff13ac28602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c2edb63af7d30476bfaf6564642d7acee138852b8f517871e6b3d0eaf5122ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2edb63af7d30476bfaf6564642d7acee138852b8f517871e6b3d0eaf5122ac->enter($__internal_4c2edb63af7d30476bfaf6564642d7acee138852b8f517871e6b3d0eaf5122ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c2edb63af7d30476bfaf6564642d7acee138852b8f517871e6b3d0eaf5122ac->leave($__internal_4c2edb63af7d30476bfaf6564642d7acee138852b8f517871e6b3d0eaf5122ac_prof);

        
        $__internal_cc2b12f7d5e661a9470e98e93e64f3de6d88ad6a5282dd456ebcff13ac28602c->leave($__internal_cc2b12f7d5e661a9470e98e93e64f3de6d88ad6a5282dd456ebcff13ac28602c_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_d27bb2b42857fd23bb81b6c742f314f0664c61721fdbcf9ed8a04affa5c381c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27bb2b42857fd23bb81b6c742f314f0664c61721fdbcf9ed8a04affa5c381c9->enter($__internal_d27bb2b42857fd23bb81b6c742f314f0664c61721fdbcf9ed8a04affa5c381c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_970b63d54460dad513800d6ead51c96009a8a5c49d7ada7ac15a3071c5410e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970b63d54460dad513800d6ead51c96009a8a5c49d7ada7ac15a3071c5410e7f->enter($__internal_970b63d54460dad513800d6ead51c96009a8a5c49d7ada7ac15a3071c5410e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "
\t<h2>Modifier une annonce</h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "SalimPlateformeBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tVous éditez une annonce déja existante, merci de ne pas changer l'esprit général de l'annonce déja publiée.
\t</p>

\t<p>
\t\t<a href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_970b63d54460dad513800d6ead51c96009a8a5c49d7ada7ac15a3071c5410e7f->leave($__internal_970b63d54460dad513800d6ead51c96009a8a5c49d7ada7ac15a3071c5410e7f_prof);

        
        $__internal_d27bb2b42857fd23bb81b6c742f314f0664c61721fdbcf9ed8a04affa5c381c9->leave($__internal_d27bb2b42857fd23bb81b6c742f314f0664c61721fdbcf9ed8a04affa5c381c9_prof);

    }

    public function getTemplateName()
    {
        return "@SalimPlateforme/Advert/edit.html.twig";
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
\tModifier une annonce - {{parent()}}
{% endblock %}

{% block salimplateforme_body %}

\t<h2>Modifier une annonce</h2>

\t{{include(\"SalimPlateformeBundle:Advert:form.html.twig\")}}

\t<p>
\t\tVous éditez une annonce déja existante, merci de ne pas changer l'esprit général de l'annonce déja publiée.
\t</p>

\t<p>
\t\t<a href=\" {{ path('oc_platform_view',{'id':advert.id}) }}\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

{% endblock %}", "@SalimPlateforme/Advert/edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
