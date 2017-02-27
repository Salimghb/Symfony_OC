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
        $__internal_a496d30540b774885bc044feaf912fdc211433160a3596f1f874aefe90f34421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a496d30540b774885bc044feaf912fdc211433160a3596f1f874aefe90f34421->enter($__internal_a496d30540b774885bc044feaf912fdc211433160a3596f1f874aefe90f34421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:menu.html.twig"));

        $__internal_a31ec2d87fb1cf33dbb6b3ab68aa54ca1ad6bb0f9ffa36c71aaed8a9b36bd672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31ec2d87fb1cf33dbb6b3ab68aa54ca1ad6bb0f9ffa36c71aaed8a9b36bd672->enter($__internal_a31ec2d87fb1cf33dbb6b3ab68aa54ca1ad6bb0f9ffa36c71aaed8a9b36bd672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:menu.html.twig"));

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
        
        $__internal_a496d30540b774885bc044feaf912fdc211433160a3596f1f874aefe90f34421->leave($__internal_a496d30540b774885bc044feaf912fdc211433160a3596f1f874aefe90f34421_prof);

        
        $__internal_a31ec2d87fb1cf33dbb6b3ab68aa54ca1ad6bb0f9ffa36c71aaed8a9b36bd672->leave($__internal_a31ec2d87fb1cf33dbb6b3ab68aa54ca1ad6bb0f9ffa36c71aaed8a9b36bd672_prof);

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
