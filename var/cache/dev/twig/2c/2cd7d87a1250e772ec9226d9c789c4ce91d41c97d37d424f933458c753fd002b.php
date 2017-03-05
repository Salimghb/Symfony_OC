<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d5c09493b70a447aab19cd8024e8cd115f80d3b47b167561362032c47f92bae6 extends Twig_Template
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
        $__internal_ee8e03314900b77fa09da579b29dd585b01dbe7a808c468eae5dd50564588971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8e03314900b77fa09da579b29dd585b01dbe7a808c468eae5dd50564588971->enter($__internal_ee8e03314900b77fa09da579b29dd585b01dbe7a808c468eae5dd50564588971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_6a8e80f8f3fb183cec03b4807507b87cf6cc9899043f396c232e124d55f54d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8e80f8f3fb183cec03b4807507b87cf6cc9899043f396c232e124d55f54d9f->enter($__internal_6a8e80f8f3fb183cec03b4807507b87cf6cc9899043f396c232e124d55f54d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ee8e03314900b77fa09da579b29dd585b01dbe7a808c468eae5dd50564588971->leave($__internal_ee8e03314900b77fa09da579b29dd585b01dbe7a808c468eae5dd50564588971_prof);

        
        $__internal_6a8e80f8f3fb183cec03b4807507b87cf6cc9899043f396c232e124d55f54d9f->leave($__internal_6a8e80f8f3fb183cec03b4807507b87cf6cc9899043f396c232e124d55f54d9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
