<?php

/* SalimPlateformeBundle:Advert:edit.html.twig */
class __TwigTemplate_c70dce2bbaa45cfbc793c1eed49315dc04822af049789c7a8ba0d8d829f0342e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:edit.html.twig", 1);
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
        $__internal_51b327d48a2a6fc98f748262a908506c34ec20a26d099ccb3fbd14c0053203d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b327d48a2a6fc98f748262a908506c34ec20a26d099ccb3fbd14c0053203d4->enter($__internal_51b327d48a2a6fc98f748262a908506c34ec20a26d099ccb3fbd14c0053203d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $__internal_a4795305e5568e691982cd4dfd166dbf437bd67beaf765731176057996169543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4795305e5568e691982cd4dfd166dbf437bd67beaf765731176057996169543->enter($__internal_a4795305e5568e691982cd4dfd166dbf437bd67beaf765731176057996169543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b327d48a2a6fc98f748262a908506c34ec20a26d099ccb3fbd14c0053203d4->leave($__internal_51b327d48a2a6fc98f748262a908506c34ec20a26d099ccb3fbd14c0053203d4_prof);

        
        $__internal_a4795305e5568e691982cd4dfd166dbf437bd67beaf765731176057996169543->leave($__internal_a4795305e5568e691982cd4dfd166dbf437bd67beaf765731176057996169543_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0187d86bfad9a48730a46ccb32d881d3d2ac62c026cb63c80c79214149bc564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0187d86bfad9a48730a46ccb32d881d3d2ac62c026cb63c80c79214149bc564->enter($__internal_c0187d86bfad9a48730a46ccb32d881d3d2ac62c026cb63c80c79214149bc564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7828c2072262119fc6dd6dc7454feb7b0a7d6678b351824c54c114e1add927d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7828c2072262119fc6dd6dc7454feb7b0a7d6678b351824c54c114e1add927d1->enter($__internal_7828c2072262119fc6dd6dc7454feb7b0a7d6678b351824c54c114e1add927d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7828c2072262119fc6dd6dc7454feb7b0a7d6678b351824c54c114e1add927d1->leave($__internal_7828c2072262119fc6dd6dc7454feb7b0a7d6678b351824c54c114e1add927d1_prof);

        
        $__internal_c0187d86bfad9a48730a46ccb32d881d3d2ac62c026cb63c80c79214149bc564->leave($__internal_c0187d86bfad9a48730a46ccb32d881d3d2ac62c026cb63c80c79214149bc564_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_07178a29f214cfcadf57780dc3cb7fa4a44f51056e543a787d7d1fb4fc13db86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07178a29f214cfcadf57780dc3cb7fa4a44f51056e543a787d7d1fb4fc13db86->enter($__internal_07178a29f214cfcadf57780dc3cb7fa4a44f51056e543a787d7d1fb4fc13db86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_a05c73522ceb43db301a5391566295c823ad16b98b45e5832973acd5829f2431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05c73522ceb43db301a5391566295c823ad16b98b45e5832973acd5829f2431->enter($__internal_a05c73522ceb43db301a5391566295c823ad16b98b45e5832973acd5829f2431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_a05c73522ceb43db301a5391566295c823ad16b98b45e5832973acd5829f2431->leave($__internal_a05c73522ceb43db301a5391566295c823ad16b98b45e5832973acd5829f2431_prof);

        
        $__internal_07178a29f214cfcadf57780dc3cb7fa4a44f51056e543a787d7d1fb4fc13db86->leave($__internal_07178a29f214cfcadf57780dc3cb7fa4a44f51056e543a787d7d1fb4fc13db86_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:edit.html.twig";
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

{% endblock %}", "SalimPlateformeBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/edit.html.twig");
    }
}
