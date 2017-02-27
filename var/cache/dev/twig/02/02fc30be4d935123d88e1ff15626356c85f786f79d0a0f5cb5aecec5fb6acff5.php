<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b7442681ebcbe2f4da75915bc744d42da5a118616a9154d5d4105bb4f8821fc0 extends Twig_Template
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
        $__internal_5ccd5190ed19c0a28a1e9554fa0b4563f21f1e8829635fc2bae18a4fc4b3a8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccd5190ed19c0a28a1e9554fa0b4563f21f1e8829635fc2bae18a4fc4b3a8eb->enter($__internal_5ccd5190ed19c0a28a1e9554fa0b4563f21f1e8829635fc2bae18a4fc4b3a8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_45dd6fa3ccd0a784e6c81aac91b0422098f5eb892e62743295efe1643c399b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dd6fa3ccd0a784e6c81aac91b0422098f5eb892e62743295efe1643c399b8f->enter($__internal_45dd6fa3ccd0a784e6c81aac91b0422098f5eb892e62743295efe1643c399b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5ccd5190ed19c0a28a1e9554fa0b4563f21f1e8829635fc2bae18a4fc4b3a8eb->leave($__internal_5ccd5190ed19c0a28a1e9554fa0b4563f21f1e8829635fc2bae18a4fc4b3a8eb_prof);

        
        $__internal_45dd6fa3ccd0a784e6c81aac91b0422098f5eb892e62743295efe1643c399b8f->leave($__internal_45dd6fa3ccd0a784e6c81aac91b0422098f5eb892e62743295efe1643c399b8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
