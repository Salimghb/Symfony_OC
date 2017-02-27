<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e8f229c4ee0b268503cb5986d907bd7f0ff2ceb09b8af8d8ef212d7088726996 extends Twig_Template
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
        $__internal_f2c6ef9d3a08a9c51df07ab35ef48d0acf828148a611821f0638cc2021372bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c6ef9d3a08a9c51df07ab35ef48d0acf828148a611821f0638cc2021372bb2->enter($__internal_f2c6ef9d3a08a9c51df07ab35ef48d0acf828148a611821f0638cc2021372bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6176bdc316cd4e3b1ee94fd086253409790a7f27d4cf6f2b86abffb6f2c33a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6176bdc316cd4e3b1ee94fd086253409790a7f27d4cf6f2b86abffb6f2c33a1f->enter($__internal_6176bdc316cd4e3b1ee94fd086253409790a7f27d4cf6f2b86abffb6f2c33a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f2c6ef9d3a08a9c51df07ab35ef48d0acf828148a611821f0638cc2021372bb2->leave($__internal_f2c6ef9d3a08a9c51df07ab35ef48d0acf828148a611821f0638cc2021372bb2_prof);

        
        $__internal_6176bdc316cd4e3b1ee94fd086253409790a7f27d4cf6f2b86abffb6f2c33a1f->leave($__internal_6176bdc316cd4e3b1ee94fd086253409790a7f27d4cf6f2b86abffb6f2c33a1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
