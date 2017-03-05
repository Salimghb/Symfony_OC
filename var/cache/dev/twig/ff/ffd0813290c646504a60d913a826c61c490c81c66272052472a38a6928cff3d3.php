<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_dc83a99e1ba977d27644ae10d71a3e35a4c03cf4338da44415f888cd61bf2468 extends Twig_Template
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
        $__internal_fa1e42af59517d9cf065fa0875ad2a233a553902104505f3f4376823eb84a5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1e42af59517d9cf065fa0875ad2a233a553902104505f3f4376823eb84a5e3->enter($__internal_fa1e42af59517d9cf065fa0875ad2a233a553902104505f3f4376823eb84a5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_d41947159d8ebd70c70ef7b75edaafd1acda6d843d7c260899aa0e3e99adc83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41947159d8ebd70c70ef7b75edaafd1acda6d843d7c260899aa0e3e99adc83e->enter($__internal_d41947159d8ebd70c70ef7b75edaafd1acda6d843d7c260899aa0e3e99adc83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_fa1e42af59517d9cf065fa0875ad2a233a553902104505f3f4376823eb84a5e3->leave($__internal_fa1e42af59517d9cf065fa0875ad2a233a553902104505f3f4376823eb84a5e3_prof);

        
        $__internal_d41947159d8ebd70c70ef7b75edaafd1acda6d843d7c260899aa0e3e99adc83e->leave($__internal_d41947159d8ebd70c70ef7b75edaafd1acda6d843d7c260899aa0e3e99adc83e_prof);

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
