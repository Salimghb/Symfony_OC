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
        $__internal_d9beb7cb625b27d17077d0774caaa3ba1382a61f230fe77ee492dc98a4d326ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9beb7cb625b27d17077d0774caaa3ba1382a61f230fe77ee492dc98a4d326ee->enter($__internal_d9beb7cb625b27d17077d0774caaa3ba1382a61f230fe77ee492dc98a4d326ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9a61803d743c625e6ca136875704f1642ffa29816e52785a9fdcae3d6bd08ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a61803d743c625e6ca136875704f1642ffa29816e52785a9fdcae3d6bd08ef9->enter($__internal_9a61803d743c625e6ca136875704f1642ffa29816e52785a9fdcae3d6bd08ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d9beb7cb625b27d17077d0774caaa3ba1382a61f230fe77ee492dc98a4d326ee->leave($__internal_d9beb7cb625b27d17077d0774caaa3ba1382a61f230fe77ee492dc98a4d326ee_prof);

        
        $__internal_9a61803d743c625e6ca136875704f1642ffa29816e52785a9fdcae3d6bd08ef9->leave($__internal_9a61803d743c625e6ca136875704f1642ffa29816e52785a9fdcae3d6bd08ef9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_396a754bbd2a295d899199d650c0c5f899ea90196448ff4af86b04f10f52119d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396a754bbd2a295d899199d650c0c5f899ea90196448ff4af86b04f10f52119d->enter($__internal_396a754bbd2a295d899199d650c0c5f899ea90196448ff4af86b04f10f52119d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6bff9623eb3b6836826a1c6a3615775865ecd379356226618db76852d47412f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bff9623eb3b6836826a1c6a3615775865ecd379356226618db76852d47412f6->enter($__internal_6bff9623eb3b6836826a1c6a3615775865ecd379356226618db76852d47412f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6bff9623eb3b6836826a1c6a3615775865ecd379356226618db76852d47412f6->leave($__internal_6bff9623eb3b6836826a1c6a3615775865ecd379356226618db76852d47412f6_prof);

        
        $__internal_396a754bbd2a295d899199d650c0c5f899ea90196448ff4af86b04f10f52119d->leave($__internal_396a754bbd2a295d899199d650c0c5f899ea90196448ff4af86b04f10f52119d_prof);

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
