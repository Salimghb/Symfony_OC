<?php

/* @SalimPlateforme/Advert/menu.html.twig */
class __TwigTemplate_53e6dbcfd5282d34ba282a4c3e277c9f741d516c19bc23c712f716b839b4eb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39d7ce3fee7bbfb0886fb99daca70e3c664dc43edd4a6f5fae7ffb3f0749feda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d7ce3fee7bbfb0886fb99daca70e3c664dc43edd4a6f5fae7ffb3f0749feda->enter($__internal_39d7ce3fee7bbfb0886fb99daca70e3c664dc43edd4a6f5fae7ffb3f0749feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/menu.html.twig"));

        $__internal_b89ee891e2bd6d3315e461cd5c8051436d66723abd23d5eae6cd231b131b23cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89ee891e2bd6d3315e461cd5c8051436d66723abd23d5eae6cd231b131b23cd->enter($__internal_b89ee891e2bd6d3315e461cd5c8051436d66723abd23d5eae6cd231b131b23cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalimPlateforme/Advert/menu.html.twig"));

        // line 1
        echo "<ul>

\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 4
            echo "
\t\t<li>

\t\t\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">

\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "

\t\t\t</a>

\t\t</li>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
</ul>";
        
        $__internal_39d7ce3fee7bbfb0886fb99daca70e3c664dc43edd4a6f5fae7ffb3f0749feda->leave($__internal_39d7ce3fee7bbfb0886fb99daca70e3c664dc43edd4a6f5fae7ffb3f0749feda_prof);

        
        $__internal_b89ee891e2bd6d3315e461cd5c8051436d66723abd23d5eae6cd231b131b23cd->leave($__internal_b89ee891e2bd6d3315e461cd5c8051436d66723abd23d5eae6cd231b131b23cd_prof);

    }

    public function getTemplateName()
    {
        return "@SalimPlateforme/Advert/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  43 => 9,  38 => 7,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>

\t{% for advert in listAdverts %}

\t\t<li>

\t\t\t<a href=\"{{ path('oc_platform_view',{'id':advert.id}) }}\">

\t\t\t\t{{ advert.title }}

\t\t\t</a>

\t\t</li>

\t{% endfor %}

</ul>", "@SalimPlateforme/Advert/menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
