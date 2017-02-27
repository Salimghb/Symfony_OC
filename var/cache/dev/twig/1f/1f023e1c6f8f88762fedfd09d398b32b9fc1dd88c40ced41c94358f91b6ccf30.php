<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_98a9a4396d6e89c7b6d1714fa615b21d3f45d75d12f624041c54d4d2d30fe328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49b0951f96545157acd9d7e04b409bf656617bc95768c1d9312fdcafae6ffbe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b0951f96545157acd9d7e04b409bf656617bc95768c1d9312fdcafae6ffbe4->enter($__internal_49b0951f96545157acd9d7e04b409bf656617bc95768c1d9312fdcafae6ffbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e234c54d8f9666498b556fdd1cce045990382f268e6e726bee8785064e46bb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e234c54d8f9666498b556fdd1cce045990382f268e6e726bee8785064e46bb06->enter($__internal_e234c54d8f9666498b556fdd1cce045990382f268e6e726bee8785064e46bb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_49b0951f96545157acd9d7e04b409bf656617bc95768c1d9312fdcafae6ffbe4->leave($__internal_49b0951f96545157acd9d7e04b409bf656617bc95768c1d9312fdcafae6ffbe4_prof);

        
        $__internal_e234c54d8f9666498b556fdd1cce045990382f268e6e726bee8785064e46bb06->leave($__internal_e234c54d8f9666498b556fdd1cce045990382f268e6e726bee8785064e46bb06_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f09a1305f8b85d11bc7728fceb4c31bec2131342822f5d0a47656fda11ea872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f09a1305f8b85d11bc7728fceb4c31bec2131342822f5d0a47656fda11ea872->enter($__internal_8f09a1305f8b85d11bc7728fceb4c31bec2131342822f5d0a47656fda11ea872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e049f7b67a3c0e3ba361343fbad13cfa34b32416903bd39e9ce00756eb6f713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e049f7b67a3c0e3ba361343fbad13cfa34b32416903bd39e9ce00756eb6f713->enter($__internal_3e049f7b67a3c0e3ba361343fbad13cfa34b32416903bd39e9ce00756eb6f713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3e049f7b67a3c0e3ba361343fbad13cfa34b32416903bd39e9ce00756eb6f713->leave($__internal_3e049f7b67a3c0e3ba361343fbad13cfa34b32416903bd39e9ce00756eb6f713_prof);

        
        $__internal_8f09a1305f8b85d11bc7728fceb4c31bec2131342822f5d0a47656fda11ea872->leave($__internal_8f09a1305f8b85d11bc7728fceb4c31bec2131342822f5d0a47656fda11ea872_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
