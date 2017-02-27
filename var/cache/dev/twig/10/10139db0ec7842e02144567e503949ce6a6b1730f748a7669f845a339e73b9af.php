<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e340f7fc21c468ae34188b011f0a77ce04653697dac808cfae2fef3a9223058 extends Twig_Template
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
        $__internal_24e5169136c420fbda0ae26c0c5faf40d3d5089803cddd59ae0a711329fa1c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e5169136c420fbda0ae26c0c5faf40d3d5089803cddd59ae0a711329fa1c2f->enter($__internal_24e5169136c420fbda0ae26c0c5faf40d3d5089803cddd59ae0a711329fa1c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_54c54a6618cf0c51e7df6211673c01d6cc18610c816aac5d56f705a527b0e420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c54a6618cf0c51e7df6211673c01d6cc18610c816aac5d56f705a527b0e420->enter($__internal_54c54a6618cf0c51e7df6211673c01d6cc18610c816aac5d56f705a527b0e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_24e5169136c420fbda0ae26c0c5faf40d3d5089803cddd59ae0a711329fa1c2f->leave($__internal_24e5169136c420fbda0ae26c0c5faf40d3d5089803cddd59ae0a711329fa1c2f_prof);

        
        $__internal_54c54a6618cf0c51e7df6211673c01d6cc18610c816aac5d56f705a527b0e420->leave($__internal_54c54a6618cf0c51e7df6211673c01d6cc18610c816aac5d56f705a527b0e420_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
