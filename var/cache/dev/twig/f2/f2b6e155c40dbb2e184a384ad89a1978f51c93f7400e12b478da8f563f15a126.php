<?php

/* @SalimPlateforme/Advert/edit.html.twig */
class __TwigTemplate_29ed3b1b9d3a31c5713a2137604028279f15c45875c8d39c1e0e92ff06f2ec21 extends Twig_Template
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
        $__internal_cc64177df4d96113bc07a6e193f6ab40505da29f2346b743f11c35b9609238c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc64177df4d96113bc07a6e193f6ab40505da29f2346b743f11c35b9609238c1->enter($__internal_cc64177df4d96113bc07a6e193f6ab40505da29f2346b743f11c35b9609238c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/edit.html.twig"));

        $__internal_90abc5e94bfa4423a1afe27393fa4ebdbd6c658f3cec6037c0e8ab3093bc37c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90abc5e94bfa4423a1afe27393fa4ebdbd6c658f3cec6037c0e8ab3093bc37c0->enter($__internal_90abc5e94bfa4423a1afe27393fa4ebdbd6c658f3cec6037c0e8ab3093bc37c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc64177df4d96113bc07a6e193f6ab40505da29f2346b743f11c35b9609238c1->leave($__internal_cc64177df4d96113bc07a6e193f6ab40505da29f2346b743f11c35b9609238c1_prof);

        
        $__internal_90abc5e94bfa4423a1afe27393fa4ebdbd6c658f3cec6037c0e8ab3093bc37c0->leave($__internal_90abc5e94bfa4423a1afe27393fa4ebdbd6c658f3cec6037c0e8ab3093bc37c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f508a9ed5b3632b50e05c010174f9991fc3114283f7ac943b35b20421f65b2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f508a9ed5b3632b50e05c010174f9991fc3114283f7ac943b35b20421f65b2ed->enter($__internal_f508a9ed5b3632b50e05c010174f9991fc3114283f7ac943b35b20421f65b2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d70e470ebe0bf01e51b3ae9ff30413f75295026685cc98c308cde835ef60a840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70e470ebe0bf01e51b3ae9ff30413f75295026685cc98c308cde835ef60a840->enter($__internal_d70e470ebe0bf01e51b3ae9ff30413f75295026685cc98c308cde835ef60a840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d70e470ebe0bf01e51b3ae9ff30413f75295026685cc98c308cde835ef60a840->leave($__internal_d70e470ebe0bf01e51b3ae9ff30413f75295026685cc98c308cde835ef60a840_prof);

        
        $__internal_f508a9ed5b3632b50e05c010174f9991fc3114283f7ac943b35b20421f65b2ed->leave($__internal_f508a9ed5b3632b50e05c010174f9991fc3114283f7ac943b35b20421f65b2ed_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_e610dae42e3305a7a0d096d247adf5bc3d00ead8fa22e2ab495b134f0af39363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e610dae42e3305a7a0d096d247adf5bc3d00ead8fa22e2ab495b134f0af39363->enter($__internal_e610dae42e3305a7a0d096d247adf5bc3d00ead8fa22e2ab495b134f0af39363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_902737264e873b1337a780f441d3e091616d4f1fb7c1ca766b38ae482a8b1163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902737264e873b1337a780f441d3e091616d4f1fb7c1ca766b38ae482a8b1163->enter($__internal_902737264e873b1337a780f441d3e091616d4f1fb7c1ca766b38ae482a8b1163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_902737264e873b1337a780f441d3e091616d4f1fb7c1ca766b38ae482a8b1163->leave($__internal_902737264e873b1337a780f441d3e091616d4f1fb7c1ca766b38ae482a8b1163_prof);

        
        $__internal_e610dae42e3305a7a0d096d247adf5bc3d00ead8fa22e2ab495b134f0af39363->leave($__internal_e610dae42e3305a7a0d096d247adf5bc3d00ead8fa22e2ab495b134f0af39363_prof);

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
