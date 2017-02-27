<?php

/* SalimPlateformeBundle:Advert:menu.html.twig */
class __TwigTemplate_fed43e59a1043315735fd9886fd9850298e52c2e40700b8ccd64cec99dc5c41f extends Twig_Template
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
        $__internal_0555cb79d38fd533e01a28c661f837420283c8fbe7497659da3b8b9c8114dd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0555cb79d38fd533e01a28c661f837420283c8fbe7497659da3b8b9c8114dd51->enter($__internal_0555cb79d38fd533e01a28c661f837420283c8fbe7497659da3b8b9c8114dd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:menu.html.twig"));

        $__internal_15d24a804f24d4d3c9e1ec1ac2da9eaefca9eb4a96a956b8412474c06327c1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d24a804f24d4d3c9e1ec1ac2da9eaefca9eb4a96a956b8412474c06327c1b8->enter($__internal_15d24a804f24d4d3c9e1ec1ac2da9eaefca9eb4a96a956b8412474c06327c1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:menu.html.twig"));

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
        
        $__internal_0555cb79d38fd533e01a28c661f837420283c8fbe7497659da3b8b9c8114dd51->leave($__internal_0555cb79d38fd533e01a28c661f837420283c8fbe7497659da3b8b9c8114dd51_prof);

        
        $__internal_15d24a804f24d4d3c9e1ec1ac2da9eaefca9eb4a96a956b8412474c06327c1b8->leave($__internal_15d24a804f24d4d3c9e1ec1ac2da9eaefca9eb4a96a956b8412474c06327c1b8_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:menu.html.twig";
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

</ul>", "SalimPlateformeBundle:Advert:menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/menu.html.twig");
    }
}
