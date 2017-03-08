<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_82d52eab7308b1bfe1d92d13d442c73173fdd0c340797dfed469885bd831c198 extends Twig_Template
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
        $__internal_3ebfadf75bca5f9ee5c15a5ce190d6d21863cb90989c8e18d5f846a3e0404dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebfadf75bca5f9ee5c15a5ce190d6d21863cb90989c8e18d5f846a3e0404dbb->enter($__internal_3ebfadf75bca5f9ee5c15a5ce190d6d21863cb90989c8e18d5f846a3e0404dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4574fc38f8958bcf929ebd867425423a4827167f09e555dbc30092e707abaef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4574fc38f8958bcf929ebd867425423a4827167f09e555dbc30092e707abaef1->enter($__internal_4574fc38f8958bcf929ebd867425423a4827167f09e555dbc30092e707abaef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3ebfadf75bca5f9ee5c15a5ce190d6d21863cb90989c8e18d5f846a3e0404dbb->leave($__internal_3ebfadf75bca5f9ee5c15a5ce190d6d21863cb90989c8e18d5f846a3e0404dbb_prof);

        
        $__internal_4574fc38f8958bcf929ebd867425423a4827167f09e555dbc30092e707abaef1->leave($__internal_4574fc38f8958bcf929ebd867425423a4827167f09e555dbc30092e707abaef1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
