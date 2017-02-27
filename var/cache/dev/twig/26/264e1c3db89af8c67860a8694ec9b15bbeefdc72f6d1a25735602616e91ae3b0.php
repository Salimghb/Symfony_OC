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
        $__internal_d8055e23eaeb45c019438e009e705d8bc02d4f7f32485c169b6b595e5428b780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8055e23eaeb45c019438e009e705d8bc02d4f7f32485c169b6b595e5428b780->enter($__internal_d8055e23eaeb45c019438e009e705d8bc02d4f7f32485c169b6b595e5428b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $__internal_b2438b90708dfb4e3d75a43ff213673c76b93dcda64b30c1a7201e89fa9d4cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2438b90708dfb4e3d75a43ff213673c76b93dcda64b30c1a7201e89fa9d4cf3->enter($__internal_b2438b90708dfb4e3d75a43ff213673c76b93dcda64b30c1a7201e89fa9d4cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8055e23eaeb45c019438e009e705d8bc02d4f7f32485c169b6b595e5428b780->leave($__internal_d8055e23eaeb45c019438e009e705d8bc02d4f7f32485c169b6b595e5428b780_prof);

        
        $__internal_b2438b90708dfb4e3d75a43ff213673c76b93dcda64b30c1a7201e89fa9d4cf3->leave($__internal_b2438b90708dfb4e3d75a43ff213673c76b93dcda64b30c1a7201e89fa9d4cf3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07a5b3da1de40575891d15a00f55ee3c501f8f0221dfb62560f84e7d373b3523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a5b3da1de40575891d15a00f55ee3c501f8f0221dfb62560f84e7d373b3523->enter($__internal_07a5b3da1de40575891d15a00f55ee3c501f8f0221dfb62560f84e7d373b3523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d92e1f44e91c77572472be6dc094a783ed5c3417b2e6323d0b386f1839e3fb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92e1f44e91c77572472be6dc094a783ed5c3417b2e6323d0b386f1839e3fb8e->enter($__internal_d92e1f44e91c77572472be6dc094a783ed5c3417b2e6323d0b386f1839e3fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d92e1f44e91c77572472be6dc094a783ed5c3417b2e6323d0b386f1839e3fb8e->leave($__internal_d92e1f44e91c77572472be6dc094a783ed5c3417b2e6323d0b386f1839e3fb8e_prof);

        
        $__internal_07a5b3da1de40575891d15a00f55ee3c501f8f0221dfb62560f84e7d373b3523->leave($__internal_07a5b3da1de40575891d15a00f55ee3c501f8f0221dfb62560f84e7d373b3523_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_0405287d339b9458a789d387b3d8efac6ddf550ff611e93fbb758f1b45fcadce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0405287d339b9458a789d387b3d8efac6ddf550ff611e93fbb758f1b45fcadce->enter($__internal_0405287d339b9458a789d387b3d8efac6ddf550ff611e93fbb758f1b45fcadce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_836539cfd7a13628b2f7ff07fb6740d4768659f77d2de90fdb8ae23f782a6878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836539cfd7a13628b2f7ff07fb6740d4768659f77d2de90fdb8ae23f782a6878->enter($__internal_836539cfd7a13628b2f7ff07fb6740d4768659f77d2de90fdb8ae23f782a6878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
        
        $__internal_836539cfd7a13628b2f7ff07fb6740d4768659f77d2de90fdb8ae23f782a6878->leave($__internal_836539cfd7a13628b2f7ff07fb6740d4768659f77d2de90fdb8ae23f782a6878_prof);

        
        $__internal_0405287d339b9458a789d387b3d8efac6ddf550ff611e93fbb758f1b45fcadce->leave($__internal_0405287d339b9458a789d387b3d8efac6ddf550ff611e93fbb758f1b45fcadce_prof);

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
