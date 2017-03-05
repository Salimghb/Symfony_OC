<?php

/* SalimPlateformeBundle:Advert:edit.html.twig */
class __TwigTemplate_72db7309d5e6df8aad35c6e8b092bd02ea6fbabedd2511955a08e42aea37893d extends Twig_Template
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
        $__internal_3b6efc438d365253b9d9a99445da9b05c80e80b97693dd1622068157c7b1699c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6efc438d365253b9d9a99445da9b05c80e80b97693dd1622068157c7b1699c->enter($__internal_3b6efc438d365253b9d9a99445da9b05c80e80b97693dd1622068157c7b1699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $__internal_ef07254d915335551968c083e5ace920fe8eed0131a5a101f327f31c10f11fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef07254d915335551968c083e5ace920fe8eed0131a5a101f327f31c10f11fc6->enter($__internal_ef07254d915335551968c083e5ace920fe8eed0131a5a101f327f31c10f11fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b6efc438d365253b9d9a99445da9b05c80e80b97693dd1622068157c7b1699c->leave($__internal_3b6efc438d365253b9d9a99445da9b05c80e80b97693dd1622068157c7b1699c_prof);

        
        $__internal_ef07254d915335551968c083e5ace920fe8eed0131a5a101f327f31c10f11fc6->leave($__internal_ef07254d915335551968c083e5ace920fe8eed0131a5a101f327f31c10f11fc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec6a5bc4c5f34c1b6303a774ee0874f3486c12c69d17096d3db53a480dedf2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6a5bc4c5f34c1b6303a774ee0874f3486c12c69d17096d3db53a480dedf2d4->enter($__internal_ec6a5bc4c5f34c1b6303a774ee0874f3486c12c69d17096d3db53a480dedf2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbd304023cb4e8716692b2c376c08050b82474d967a9f02565b80e351d139fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd304023cb4e8716692b2c376c08050b82474d967a9f02565b80e351d139fb3->enter($__internal_fbd304023cb4e8716692b2c376c08050b82474d967a9f02565b80e351d139fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fbd304023cb4e8716692b2c376c08050b82474d967a9f02565b80e351d139fb3->leave($__internal_fbd304023cb4e8716692b2c376c08050b82474d967a9f02565b80e351d139fb3_prof);

        
        $__internal_ec6a5bc4c5f34c1b6303a774ee0874f3486c12c69d17096d3db53a480dedf2d4->leave($__internal_ec6a5bc4c5f34c1b6303a774ee0874f3486c12c69d17096d3db53a480dedf2d4_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_88e1ac4cf1a2fb1c5b141f5b894ddaff44d02a4e9a8ec15606ff80428bc521d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e1ac4cf1a2fb1c5b141f5b894ddaff44d02a4e9a8ec15606ff80428bc521d1->enter($__internal_88e1ac4cf1a2fb1c5b141f5b894ddaff44d02a4e9a8ec15606ff80428bc521d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_140ade976aa96d8b3a89bd8d69d3d49b27e805f0d43544a655f6e9be8d7f4c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140ade976aa96d8b3a89bd8d69d3d49b27e805f0d43544a655f6e9be8d7f4c99->enter($__internal_140ade976aa96d8b3a89bd8d69d3d49b27e805f0d43544a655f6e9be8d7f4c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_140ade976aa96d8b3a89bd8d69d3d49b27e805f0d43544a655f6e9be8d7f4c99->leave($__internal_140ade976aa96d8b3a89bd8d69d3d49b27e805f0d43544a655f6e9be8d7f4c99_prof);

        
        $__internal_88e1ac4cf1a2fb1c5b141f5b894ddaff44d02a4e9a8ec15606ff80428bc521d1->leave($__internal_88e1ac4cf1a2fb1c5b141f5b894ddaff44d02a4e9a8ec15606ff80428bc521d1_prof);

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
