<?php

/* @SalimPlateforme/Advert/index.html.twig */
class __TwigTemplate_893527aae8dc2b0e97fba155782215e1a3a0551f67db572247d4f57c3e68d3bf extends Twig_Template
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
        $__internal_e29c186263f957439866a285c95cd98530f994a2c131b9c4e014465026b663b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29c186263f957439866a285c95cd98530f994a2c131b9c4e014465026b663b8->enter($__internal_e29c186263f957439866a285c95cd98530f994a2c131b9c4e014465026b663b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/index.html.twig"));

        $__internal_59ea188cf66cd7a06e128f280354dd964cd364549e998b8b6e48c7bc7a362d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ea188cf66cd7a06e128f280354dd964cd364549e998b8b6e48c7bc7a362d17->enter($__internal_59ea188cf66cd7a06e128f280354dd964cd364549e998b8b6e48c7bc7a362d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e29c186263f957439866a285c95cd98530f994a2c131b9c4e014465026b663b8->leave($__internal_e29c186263f957439866a285c95cd98530f994a2c131b9c4e014465026b663b8_prof);

        
        $__internal_59ea188cf66cd7a06e128f280354dd964cd364549e998b8b6e48c7bc7a362d17->leave($__internal_59ea188cf66cd7a06e128f280354dd964cd364549e998b8b6e48c7bc7a362d17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00b28b3b010a922245f1c4e63c27ec3c199b645950508b0079ad6beefe0d54d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b28b3b010a922245f1c4e63c27ec3c199b645950508b0079ad6beefe0d54d8->enter($__internal_00b28b3b010a922245f1c4e63c27ec3c199b645950508b0079ad6beefe0d54d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6dc4f517f0ca1edcc21dec7b8f988bf749da4928808e2028f53ae0f6e617f686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc4f517f0ca1edcc21dec7b8f988bf749da4928808e2028f53ae0f6e617f686->enter($__internal_6dc4f517f0ca1edcc21dec7b8f988bf749da4928808e2028f53ae0f6e617f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6dc4f517f0ca1edcc21dec7b8f988bf749da4928808e2028f53ae0f6e617f686->leave($__internal_6dc4f517f0ca1edcc21dec7b8f988bf749da4928808e2028f53ae0f6e617f686_prof);

        
        $__internal_00b28b3b010a922245f1c4e63c27ec3c199b645950508b0079ad6beefe0d54d8->leave($__internal_00b28b3b010a922245f1c4e63c27ec3c199b645950508b0079ad6beefe0d54d8_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_666d78708425ecefd19e05b9e2dd055572102692c688aac0f4f3e153a2cc147e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666d78708425ecefd19e05b9e2dd055572102692c688aac0f4f3e153a2cc147e->enter($__internal_666d78708425ecefd19e05b9e2dd055572102692c688aac0f4f3e153a2cc147e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_3155475498aac9ca46fc1a31388888227c58147d2e7972b543f5459d9b25046e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3155475498aac9ca46fc1a31388888227c58147d2e7972b543f5459d9b25046e->enter($__internal_3155475498aac9ca46fc1a31388888227c58147d2e7972b543f5459d9b25046e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_3155475498aac9ca46fc1a31388888227c58147d2e7972b543f5459d9b25046e->leave($__internal_3155475498aac9ca46fc1a31388888227c58147d2e7972b543f5459d9b25046e_prof);

        
        $__internal_666d78708425ecefd19e05b9e2dd055572102692c688aac0f4f3e153a2cc147e->leave($__internal_666d78708425ecefd19e05b9e2dd055572102692c688aac0f4f3e153a2cc147e_prof);

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
