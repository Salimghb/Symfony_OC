<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_87a08ea14c26eecd3a8576d0e4f63eb4bacf4d180b7fdf13ae0b811b7302eed3 extends Twig_Template
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
        $__internal_ccd00725a7b252d7d74cba671f4642ba864e8cb61420c9c51a140b3b87c072af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd00725a7b252d7d74cba671f4642ba864e8cb61420c9c51a140b3b87c072af->enter($__internal_ccd00725a7b252d7d74cba671f4642ba864e8cb61420c9c51a140b3b87c072af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cda5cc86092bb7f189bbe6bfc2f41af2d5b47a095fcd39bcd36db91ba5b4d169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda5cc86092bb7f189bbe6bfc2f41af2d5b47a095fcd39bcd36db91ba5b4d169->enter($__internal_cda5cc86092bb7f189bbe6bfc2f41af2d5b47a095fcd39bcd36db91ba5b4d169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ccd00725a7b252d7d74cba671f4642ba864e8cb61420c9c51a140b3b87c072af->leave($__internal_ccd00725a7b252d7d74cba671f4642ba864e8cb61420c9c51a140b3b87c072af_prof);

        
        $__internal_cda5cc86092bb7f189bbe6bfc2f41af2d5b47a095fcd39bcd36db91ba5b4d169->leave($__internal_cda5cc86092bb7f189bbe6bfc2f41af2d5b47a095fcd39bcd36db91ba5b4d169_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
