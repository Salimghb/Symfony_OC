<?php

/* @SalimPlateforme/Advert/index.html.twig */
class __TwigTemplate_dd3dc8c4f122950d8a5ab665cf3722ca2529c7e18de4cfbe3167b5e31c93db04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "@SalimPlateforme/Advert/index.html.twig", 1);
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
        $__internal_a01cefb399df75590c2ee2261613ed7b776a69dfee3e94b1d6cffca574230fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01cefb399df75590c2ee2261613ed7b776a69dfee3e94b1d6cffca574230fc4->enter($__internal_a01cefb399df75590c2ee2261613ed7b776a69dfee3e94b1d6cffca574230fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/index.html.twig"));

        $__internal_2a89f4b58a1a6f4aa6c8305592a464f1c78116377318f84d0d359fc4c3c836f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a89f4b58a1a6f4aa6c8305592a464f1c78116377318f84d0d359fc4c3c836f3->enter($__internal_2a89f4b58a1a6f4aa6c8305592a464f1c78116377318f84d0d359fc4c3c836f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01cefb399df75590c2ee2261613ed7b776a69dfee3e94b1d6cffca574230fc4->leave($__internal_a01cefb399df75590c2ee2261613ed7b776a69dfee3e94b1d6cffca574230fc4_prof);

        
        $__internal_2a89f4b58a1a6f4aa6c8305592a464f1c78116377318f84d0d359fc4c3c836f3->leave($__internal_2a89f4b58a1a6f4aa6c8305592a464f1c78116377318f84d0d359fc4c3c836f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14ac93b7dc7d161e8338ef4ea4020c0fad809c210b693712ccb84212022d9d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ac93b7dc7d161e8338ef4ea4020c0fad809c210b693712ccb84212022d9d3f->enter($__internal_14ac93b7dc7d161e8338ef4ea4020c0fad809c210b693712ccb84212022d9d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67a5a7e75f6ee0317a7ad5538fe1f8b8cb11f125c8d1de46dee3104646ab90e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a5a7e75f6ee0317a7ad5538fe1f8b8cb11f125c8d1de46dee3104646ab90e7->enter($__internal_67a5a7e75f6ee0317a7ad5538fe1f8b8cb11f125c8d1de46dee3104646ab90e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_67a5a7e75f6ee0317a7ad5538fe1f8b8cb11f125c8d1de46dee3104646ab90e7->leave($__internal_67a5a7e75f6ee0317a7ad5538fe1f8b8cb11f125c8d1de46dee3104646ab90e7_prof);

        
        $__internal_14ac93b7dc7d161e8338ef4ea4020c0fad809c210b693712ccb84212022d9d3f->leave($__internal_14ac93b7dc7d161e8338ef4ea4020c0fad809c210b693712ccb84212022d9d3f_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_dcfdd3130fc736a2d63225b6c690a4573857d1a6bd3f0841a5ae618bfebe947c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfdd3130fc736a2d63225b6c690a4573857d1a6bd3f0841a5ae618bfebe947c->enter($__internal_dcfdd3130fc736a2d63225b6c690a4573857d1a6bd3f0841a5ae618bfebe947c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_fb3d870623c181cbca9f8016bef535b0c41428bbe3a3ce349f93e24448fec983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3d870623c181cbca9f8016bef535b0c41428bbe3a3ce349f93e24448fec983->enter($__internal_fb3d870623c181cbca9f8016bef535b0c41428bbe3a3ce349f93e24448fec983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_fb3d870623c181cbca9f8016bef535b0c41428bbe3a3ce349f93e24448fec983->leave($__internal_fb3d870623c181cbca9f8016bef535b0c41428bbe3a3ce349f93e24448fec983_prof);

        
        $__internal_dcfdd3130fc736a2d63225b6c690a4573857d1a6bd3f0841a5ae618bfebe947c->leave($__internal_dcfdd3130fc736a2d63225b6c690a4573857d1a6bd3f0841a5ae618bfebe947c_prof);

    }

    public function getTemplateName()
    {
        return "@SalimPlateforme/Advert/index.html.twig";
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

{% endblock %}", "@SalimPlateforme/Advert/index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
