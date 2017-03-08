<?php

/* SalimPlateformeBundle:Advert:index.html.twig */
class __TwigTemplate_dd3dc8c4f122950d8a5ab665cf3722ca2529c7e18de4cfbe3167b5e31c93db04 extends Twig_Template
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
        $__internal_97ca14dc3b32d1a798adce8f04826bdcd7d0d5ba20cbcd12cab139ecc7188fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ca14dc3b32d1a798adce8f04826bdcd7d0d5ba20cbcd12cab139ecc7188fae->enter($__internal_97ca14dc3b32d1a798adce8f04826bdcd7d0d5ba20cbcd12cab139ecc7188fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $__internal_0d0341f65df8237472517c341ea424bfc20a49df78cb61255b3cb76f5924a845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0341f65df8237472517c341ea424bfc20a49df78cb61255b3cb76f5924a845->enter($__internal_0d0341f65df8237472517c341ea424bfc20a49df78cb61255b3cb76f5924a845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ca14dc3b32d1a798adce8f04826bdcd7d0d5ba20cbcd12cab139ecc7188fae->leave($__internal_97ca14dc3b32d1a798adce8f04826bdcd7d0d5ba20cbcd12cab139ecc7188fae_prof);

        
        $__internal_0d0341f65df8237472517c341ea424bfc20a49df78cb61255b3cb76f5924a845->leave($__internal_0d0341f65df8237472517c341ea424bfc20a49df78cb61255b3cb76f5924a845_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e4a892d1678bf93389deb0359c766abe2ed3484354539d75922d1ba0866b7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4a892d1678bf93389deb0359c766abe2ed3484354539d75922d1ba0866b7be->enter($__internal_5e4a892d1678bf93389deb0359c766abe2ed3484354539d75922d1ba0866b7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9884266b4141e11dafe32da5ac0b74d7e6f44edf1e6209152a6aace2c97e08f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9884266b4141e11dafe32da5ac0b74d7e6f44edf1e6209152a6aace2c97e08f8->enter($__internal_9884266b4141e11dafe32da5ac0b74d7e6f44edf1e6209152a6aace2c97e08f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9884266b4141e11dafe32da5ac0b74d7e6f44edf1e6209152a6aace2c97e08f8->leave($__internal_9884266b4141e11dafe32da5ac0b74d7e6f44edf1e6209152a6aace2c97e08f8_prof);

        
        $__internal_5e4a892d1678bf93389deb0359c766abe2ed3484354539d75922d1ba0866b7be->leave($__internal_5e4a892d1678bf93389deb0359c766abe2ed3484354539d75922d1ba0866b7be_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_2bd5f74e781724adc8748c1d53178dbd4721333d4c611883936b2c0a6e96e6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd5f74e781724adc8748c1d53178dbd4721333d4c611883936b2c0a6e96e6cb->enter($__internal_2bd5f74e781724adc8748c1d53178dbd4721333d4c611883936b2c0a6e96e6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_8b4316a13d80c4d4852168bcbf5e3a5cae28fa47dd4506aa4baee00e03be827c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4316a13d80c4d4852168bcbf5e3a5cae28fa47dd4506aa4baee00e03be827c->enter($__internal_8b4316a13d80c4d4852168bcbf5e3a5cae28fa47dd4506aa4baee00e03be827c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

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
            echo "
\t\t\t\t</a>
\t\t\t\tpar ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo ".

\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "\t\t\t<li>Aucune annonce n'est disponible pour le moment!</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</ul>
\t<ul class=\"pagination\">
\t\t";
        // line 25
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>

";
        
        $__internal_8b4316a13d80c4d4852168bcbf5e3a5cae28fa47dd4506aa4baee00e03be827c->leave($__internal_8b4316a13d80c4d4852168bcbf5e3a5cae28fa47dd4506aa4baee00e03be827c_prof);

        
        $__internal_2bd5f74e781724adc8748c1d53178dbd4721333d4c611883936b2c0a6e96e6cb->leave($__internal_2bd5f74e781724adc8748c1d53178dbd4721333d4c611883936b2c0a6e96e6cb_prof);

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
        return array (  140 => 30,  129 => 27,  122 => 26,  117 => 25,  113 => 22,  106 => 20,  97 => 16,  93 => 15,  88 => 13,  84 => 12,  81 => 11,  76 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t\t\t\t{{advert.title}}
\t\t\t\t</a>
\t\t\t\tpar {{advert.author}},
\t\t\t\tle {{advert.date|date('d/m/Y')}}.

\t\t\t</li>
\t\t{% else %}
\t\t\t<li>Aucune annonce n'est disponible pour le moment!</li>
\t\t{% endfor %}
\t</ul>
\t<ul class=\"pagination\">
\t\t{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
\t\t{% for p in range(1, nbPages) %}
\t\t\t<li{% if p == page %} class=\"active\"{% endif %}>
\t\t\t<a href=\"{{ path('oc_platform_home', {'page': p}) }}\">{{ p }}</a>
\t\t</li>
\t{% endfor %}
</ul>

{% endblock %}", "SalimPlateformeBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
