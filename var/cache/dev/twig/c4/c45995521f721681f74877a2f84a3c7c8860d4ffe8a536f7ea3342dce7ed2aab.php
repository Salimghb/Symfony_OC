<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_637ea6d981c4efa12ff6c816857c78892404fdbcde9751d62d5407c67d7d4a37 extends Twig_Template
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
        $__internal_5f59c9ca8f5211c408417eb67e135c0913ecc6f8fd27b8f434de594d5eedf7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f59c9ca8f5211c408417eb67e135c0913ecc6f8fd27b8f434de594d5eedf7e2->enter($__internal_5f59c9ca8f5211c408417eb67e135c0913ecc6f8fd27b8f434de594d5eedf7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_27937e7f203135f7331241895fd36f7e3945c3c692de0857e6d86caeda1e1a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27937e7f203135f7331241895fd36f7e3945c3c692de0857e6d86caeda1e1a10->enter($__internal_27937e7f203135f7331241895fd36f7e3945c3c692de0857e6d86caeda1e1a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5f59c9ca8f5211c408417eb67e135c0913ecc6f8fd27b8f434de594d5eedf7e2->leave($__internal_5f59c9ca8f5211c408417eb67e135c0913ecc6f8fd27b8f434de594d5eedf7e2_prof);

        
        $__internal_27937e7f203135f7331241895fd36f7e3945c3c692de0857e6d86caeda1e1a10->leave($__internal_27937e7f203135f7331241895fd36f7e3945c3c692de0857e6d86caeda1e1a10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_48b4a9d9910c45ce129a37ae8f5485570bd12207c82d0c37dd2ce78624b6372a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b4a9d9910c45ce129a37ae8f5485570bd12207c82d0c37dd2ce78624b6372a->enter($__internal_48b4a9d9910c45ce129a37ae8f5485570bd12207c82d0c37dd2ce78624b6372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_339785bf4fc0cd6a864ef9c33bf9f0fee7bd5d1caa1c3d557358030172fa71f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339785bf4fc0cd6a864ef9c33bf9f0fee7bd5d1caa1c3d557358030172fa71f5->enter($__internal_339785bf4fc0cd6a864ef9c33bf9f0fee7bd5d1caa1c3d557358030172fa71f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_339785bf4fc0cd6a864ef9c33bf9f0fee7bd5d1caa1c3d557358030172fa71f5->leave($__internal_339785bf4fc0cd6a864ef9c33bf9f0fee7bd5d1caa1c3d557358030172fa71f5_prof);

        
        $__internal_48b4a9d9910c45ce129a37ae8f5485570bd12207c82d0c37dd2ce78624b6372a->leave($__internal_48b4a9d9910c45ce129a37ae8f5485570bd12207c82d0c37dd2ce78624b6372a_prof);

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
